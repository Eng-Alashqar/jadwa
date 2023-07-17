<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:client-list|client-create|client-edit|client-delete', ['only' => ['index','store']]);
         $this->middleware('permission:client-create', ['only' => ['create','store']]);
         $this->middleware('permission:client-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:client-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients= Client::latest()->get();
       return view('admin.clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'image_name'=>'required|image|max:1024000'
        ]);
        $image_name=rand().time().$request->file('image_name')->getClientOriginalName();
        $request->file('image_name')->move(public_path('uploads'),$image_name);

        Client::create([
            'image_name'=>$image_name
        ]);
        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم الاضافة بنجاح.'
        ];
        return back()->with($notifications);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Client $client)
    {
        $request->validate([
            'image_name'=>'nullable|image|max:1024000'
        ]);

        if($request->hasFile('image_name')){
            $image_name=rand().time().$request->file('image_name')->getClientOriginalName();
            $request->file('image_name')->move(public_path('uploads'),$image_name);
            File::delete(public_path('uploads/'.$client->image_name));
            $client->update([
                'image_name'=>$image_name
            ]);
        }


        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم تعديل البيانات بنجاح.'
        ];
        return redirect()->route('admin.clients.index')->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        File::delete(public_path('uploads/'.$client->image_name));
        $isDeleted = $client->delete();
        if ($isDeleted) {
            return response()->json([
                'title'=>'Success',
                'text'=>'Admin Deleted successfully',
                'icon'=>'success'
            ], Response::HTTP_OK);
        }else{
            return response()->json([
                'title'=>'Failed',
                'text'=>'Failed to delete',
                'icon'=>'error'
            ], Response::HTTP_BAD_REQUEST);
    }
}
}

