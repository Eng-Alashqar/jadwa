<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function indexAR()
    {
        $blog = Blog::latest()->paginate(20);

        try {
            return view('site.ar.blog.index', compact('blog'));
        } catch (\Throwable $th) {
            return view('site.ar.error');
        }
    }

    public function indexEN()
    {
        $blog = Blog::latest()->simplePaginate(10);
        try {
            return view('site.en.blog.index', compact('blog'));
        } catch (\Throwable $th) {
            return view('site.en.error');
        }
    }


    public function showAR(Blog $blog)
    {
        $blogs = Blog::take(8)->get();
        try {
            return view('site.ar.blog.show', compact('blog','blogs'));
        } catch (\Throwable $th) {
            return view('site.ar.error');
        }
    }

    public function showEN(Blog $blog)
    {
        $blogs = Blog::take(8)->get();
        try {
            return view('site.en.blog.show', compact('blog','blogs'));
        } catch (\Throwable $th) {
            return view('site.en.error');
        }
    }
}
