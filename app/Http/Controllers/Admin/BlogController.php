<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:blog-list|blog-create|blog-edit|blog-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:blog-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:blog-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return response()->view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Blog::rules());

        if ($request->hasFile('image_name')) {
            $image_name = rand() . '_' . time() . '_' . $request->file('image_name')->getClientOriginalName();
            $request->file('image_name')->move(public_path('uploads'), $image_name);
            $data = $request->except('image_name');
            $data['image_name'] = $image_name;
            $data['auther'] = Auth::user()->name;
        }

        Blog::create($data);

        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم الاضافة بنجاح.'
        ];

        return back()->with($notifications);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate(Blog::updateRules());

        $image_name = $blog->image_name;
        if ($request->hasFile('image_name')) {
            $image_name = rand() . '_' . time() . '_' . $request->file('image_name')->getClientOriginalName();
            $request->file('image_name')->move(public_path('uploads'), $image_name);
        }

        $data = $request->except('image_name');
        $data['image_name'] = $image_name;
        $data['auther'] = Auth::user()->name;
        $blog->update($data);
        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم التعديل بنجاح.'
        ];
        return redirect()->route('admin.blogs.index')->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        File::delete(public_path('uploads/' . $blog->image_name));

        $isDeleted = $blog->delete();
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
