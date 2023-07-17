<?php

namespace App\Http\Controllers\Site;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function indexAR()
    {
        $news = News::latest()->paginate(20);
        try {
            return view('site.ar.news.index',compact('news'));
        } catch (\Throwable $th) {
            return view('site.ar.error');
        }
    }

    public function indexEN()
    {
        $news = News::latest()->simplePaginate(10);
        try {
            return view('site.en.news.index',compact('news'));
        } catch (\Throwable $th) {
            return view('site.en.error');
        }
    }


    public function showAR(News $news)
    {
        try {
            return view('site.ar.news.show',compact('news'));
        } catch (\Throwable $th) {
            return view('site.ar.error');
        }
    }

    public function showEN(News $news)
    {
        try {
            return view('site.en.news.show',compact('news'));
        } catch (\Throwable $th) {
            return view('site.en.error');
        }
    }
}
