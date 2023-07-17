<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\News;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Visits;

class AdminController extends Controller
{

    public function home()
    {
        $users = User::count();
        $courses=Course::count();
        $news =News::count();
        $blogs=Blog::count();

        $visitors = Visits::count();
        $visitor = Visits::get('place_visit');

        $counter_visits ['home'] = 0;
        $counter_visits ['news'] = 0;
        $counter_visits ['blogs'] = 0;
        $counter_visits ['courses'] = 0;
        foreach ($visitor as $i) {
            if($i->place_visit == url('/') || $i->place_visit == url('/ar/jadwa/index') || $i->place_visit == url('/en/jadwa/index')){
                $counter_visits['home'] = $counter_visits['home']+1;
            }
            if($i->place_visit == url('/ar/news') || $i->place_visit == url('/en/news') ){
                $counter_visits ['news'] = $counter_visits['news']+1;
            }
            if($i->place_visit == url('/ar/blogs') || $i->place_visit == url('/en/blogs')){
                $counter_visits ['blogs'] = $counter_visits['blogs']+1;
            }
            if($i->place_visit == url('/ar/courses') || $i->place_visit == url('/en/courses')){
                $counter_visits ['courses'] = $counter_visits['courses']+1;
            }
        }
        return view('admin.index',compact( 'users',  'courses',  'news',  'blogs','visitors','counter_visits'));
    }

    public function index($page)
    {

        $users = User::count();
        $courses=Course::count();
        $news =News::count();
        $blogs=Blog::count();


        $visitors = Visits::count();
        $visitor = Visits::get('place_visit');

        $counter_visits ['home'] = 0;
        $counter_visits ['news'] = 0;
        $counter_visits ['blogs'] = 0;
        $counter_visits ['courses'] = 0;
        foreach ($visitor as $i) {
            if($i->place_visit == url('/') || $i->place_visit == url('/ar/jadwa/index') || $i->place_visit == url('/en/jadwa/index')){
                $counter_visits['home'] = $counter_visits['home']+1;
            }
            if($i->place_visit == url('/ar/news') || $i->place_visit == url('/en/news') ){
                $counter_visits ['news'] = $counter_visits['news']+1;
            }
            if($i->place_visit == url('/ar/blogs') || $i->place_visit == url('/en/blogs')){
                $counter_visits ['blogs'] = $counter_visits['blogs']+1;
            }
            if($i->place_visit == url('/ar/courses') || $i->place_visit == url('/en/courses')){
                $counter_visits ['courses'] = $counter_visits['courses']+1;
            }
        }
        return view('admin.'.$page,compact( 'users',  'courses',  'news',  'blogs','visitors','counter_visits'));
    }

}
