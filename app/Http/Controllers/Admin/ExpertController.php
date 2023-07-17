<?php

namespace App\Http\Controllers\Admin;

use App\Models\Expert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class ExpertController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:expert-list|expert-create|expert-edit|expert-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:expert-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:expert-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:expert-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experts = Expert::latest()->get();
        return view('admin.experts.index', compact('experts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Expert::rules());

        $image_name = rand() . '_' . time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $image_name);

        $data = $request->except('image');
        $data['image'] = $image_name;

        Expert::create($data);
        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم الاضافة بنجاح.'
        ];
        return back()->with($notifications);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    public function file()
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Expert $expert)
    {
        return view('admin.experts.edit', compact('expert'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expert $expert)
    {
        $image_name = $expert->image;
        $request->validate(Expert::updateRules());
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image_name = rand() . '_' . time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $image_name);
            $data = $request->except('image');
            $data['image'] = $image_name;
            File::delete(public_path('uploads/' . $expert->image));
        }

        $expert->update($data);
        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم التعديل بنجاح.'
        ];
        return redirect()->route('admin.experts.index')->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy(Expert $expert)
    {
        File::delete(public_path('uploads/' . $expert->image));
        $isDeleted = $expert->delete();
        if ($isDeleted) {
            return response()->json([
                'tilte' => 'success',
                'text' => 'تم حذف البيانات بنجاح',
                'icon' => 'success',
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                'tilte' => 'Failed',
                'text' => 'حدث خطأ أثناء الحذف',
                'icon' => 'error',
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
