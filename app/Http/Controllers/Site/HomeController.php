<?php

namespace App\Http\Controllers\Site;

use App\Models\Blog;
use App\Models\News;
use App\Models\Polls;
use App\Models\Client;
use App\Models\Course;
use App\Models\Expert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function home($lang = 'ar')
    {
        $clients=Client::get();
        $experts= Expert::get();
        $commit=Polls::get();
        $blog=Blog::get();
        $news=News::get();
        $main=News::orderByDesc('id')->take(1)->get();
        $main2=News::orderByDesc('id')->take(2)->offset(1)->get();
        $course= Course::orderByDesc('id')->get();
        try {
            return view("site.$lang.index",compact('clients','experts','commit','blog','news','main','main2','course'));
        } catch (\Throwable $th) {
            return view("site.$lang.error");
        }
    }

    public function indexAR($page)
    {
        if($page === 'index'){
            return $this->home();
        }
        $clients=Client::get();
        $experts= Expert::get();
        $commit=Polls::get();
        try {
            return view('site.ar.'.$page,compact('clients','experts','commit'));
        } catch (\Throwable $th) {
            return view('site.ar.error');
        }
    }

    public function indexEN($page)
    {
        if($page == 'index'){
            return $this->home('en');
        }
        $clients=Client::get();
        $experts= Expert::get();
        $commit=Polls::get();
        try {
            return view('site.en.'.$page,compact('clients','experts','commit'));
        } catch (\Throwable $th) {
            return view('site.en.error');
        }
    }


}
