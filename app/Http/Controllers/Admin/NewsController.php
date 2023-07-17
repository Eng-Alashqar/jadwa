<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{


    function __construct()
    {
        $this->middleware('permission:news-list|news-create|news-edit|news-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:news-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:news-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:news-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news = News::latest()->get();
        return response()->view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(News::rules());

        if ($request->hasFile('image_name')) {
            $image_name = rand() . '_' . time() . '_' . $request->file('image_name')->getClientOriginalName();
            $request->file('image_name')->move(public_path('uploads'), $image_name);
            $data = $request->except('image_name');
            $data['image_name'] = $image_name;
            $data['auther'] = Auth::user()->name;
        }

        News::create($data);

        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم الاضافة بنجاح.'
        ];

        return back()->with($notifications);
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,News $news)
    {
        $request->validate(News::updateRules());

        $image_name = $news->image_name;
        if ($request->hasFile('image_name')) {
            $image_name = rand() . '_' . time() . '_' . $request->file('image_name')->getClientOriginalName();
            $request->file('image_name')->move(public_path('uploads'), $image_name);
        }

        $data = $request->except('image_name');
        $data['image_name'] = $image_name;
        $data['auther'] = Auth::user()->name;
        $news->update($data);
        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم التعديل بنجاح.'
        ];
        return redirect()->route('admin.news.index')->with($notifications);
      }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {

        File::delete(public_path('uploads/' . $news->image_name));
        $isDeleted = $news->delete();
        if ($isDeleted) {
            return response()->json([
                'tilte' => 'success',
                'text' => 'تم الحذف بنجاح ',
                'icon' => 'success',
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                'tilte' => 'Failed',
                'text' => 'فشلت عملية الحذف لسبب ما',
                'icon' => 'error',
            ], Response::HTTP_BAD_REQUEST);
        }
    }



}
