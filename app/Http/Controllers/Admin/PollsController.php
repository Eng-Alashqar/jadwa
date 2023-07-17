<?php

namespace App\Http\Controllers\Admin;

use App\Models\Polls;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Response;

class PollsController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:polls-list|polls-create|polls-edit|polls-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:polls-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:polls-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:polls-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polls = Polls::latest()->get();
        return response()->view('admin.polls.index', compact('polls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.polls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Polls::rules());

        if ($request->hasFile('image_name')) {
            $image_name = rand() . '_' . time() . '_' . $request->file('image_name')->getClientOriginalName();
            $request->file('image_name')->move(public_path('uploads'), $image_name);
        }

        $data = $request->except('image_name');
        $data['image_name'] = $image_name;



        Polls::create($data);


        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم الاضافة بنجاح.'
        ];

        return back()->with($notifications);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Polls  $polls
     * @return \Illuminate\Http\Response
     */
    public function show(Polls $polls)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Polls  $polls
     * @return \Illuminate\Http\Response
     */
    public function edit(Polls $poll)
    {
        return response()->view('admin.polls.edit', ['poll' => $poll]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Polls  $polls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Polls $poll)
    {
        $request->validate(Polls::updateRules());

        $image_name = $poll->image_name;
        if ($request->hasFile('image_name')) {
            $image_name = rand() . '_' . time() . '_' . $request->file('image_name')->getClientOriginalName();
            $request->file('image_name')->move(public_path('uploads'), $image_name);
        }
        $data = $request->except('image_name');
        $data['image_name'] = $image_name;
        $poll->update($data);
        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم التعديل بنجاح.'
        ];
        return redirect()->route('admin.polls.index')->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Polls  $polls
     * @return \Illuminate\Http\Response
     */
    public function destroy(Polls $poll)
    {
        File::delete(public_path('uploads/' . $poll->image_name));
        $isDeleted = $poll->delete();
        if ($isDeleted) {
            return response()->json([
                'tilte' => 'success',
                'text' => 'Deleted Successfully',
                'icon' => 'success',
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                'tilte' => 'Failed',
                'text' => 'Failed to delete',
                'icon' => 'error',
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
