<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function indexAR()
    {
        $course = Course::latest()->paginate(20);
        try {
            return view('site.ar.course.index', compact('course'));
        } catch (\Throwable $th) {
            return view('site.ar.error');
        }
    }

    public function indexEN()
    {
        $course = Course::latest()->simplePaginate(10);
        try {
            return view('site.en.course.index', compact('course'));
        } catch (\Throwable $th) {
            return view('site.en.error');
        }
    }


    public function showAR(Course $course)
    {

        try {
            return view('site.ar.course.show', compact('course'));
        } catch (\Throwable $th) {
            return view('site.ar.error');
        }
    }

    public function showEN(Course $course)
    {
        try {
            return view('site.en.course.show', compact('course'));
        } catch (\Throwable $th) {
            return view('site.en.error');
        }
    }
}
