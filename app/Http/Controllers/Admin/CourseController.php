<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Response;

class CourseController extends Controller
{


    function __construct()
    {
        $this->middleware('permission:course-list|course-create|course-edit|course-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:course-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:course-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:course-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $courses = Course::latest()->get();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data['objectives_en']= json_encode($request->objectives_en);

        // dd($data);

        $request->validate([
            'course_en' => 'required|string',
            'course_ar' => 'required|string',
            'course_image' => 'required|image|max:1024000',
            'price' => 'required|string',
            'instructor_en' => 'required|string',
            'instructor_ar' => 'required|string',
            'instructor_name_en' => 'required|string',
            'instructor_name_ar' => 'required|string',
            'instructor_image' => 'required|image|max:1024000',
            'start_at' => 'required|date',
            'status' => 'required',
        ]);

        if ($request->hasFile('course_image') && $request->hasFile('instructor_image')) {
            $course_image = rand() . '_' . time() . '_' . $request->file('course_image')->getClientOriginalName();
            $request->file('course_image')->move(public_path('uploads'), $course_image);
            $instructor_image = rand() . '_' . time() . '_' . $request->file('instructor_image')->getClientOriginalName();
            $request->file('instructor_image')->move(public_path('uploads'), $instructor_image);
        }
        $data = $request->except('course_image', 'instructor_image', 'objectives_en', 'objectives_ar');
        $data['course_image'] = $course_image;
        $data['instructor_image'] = $instructor_image;
        $data['objectives_en'] = json_encode($request->objectives_en);
        $data['objectives_ar'] = json_encode($request->objectives_ar);
        Course::create($data);
        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم الاضافة بنجاح.'
        ];
        return back()->with($notifications);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
       $objectives_ar = json_decode($course->objectives_ar);
       $objectives_en = json_decode($course->objectives_en);
        return view('admin.courses.edit', compact('course','objectives_ar','objectives_en'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Course $Course)
    {
        $request->validate([
            'course_en' => 'required|string',
            'course_ar' => 'required|string',
            'price' => 'required|string',
            'instructor_en' => 'required|string',
            'instructor_ar' => 'required|string',
            'instructor_name_en' => 'required|string',
            'instructor_name_ar' => 'required|string',
            'start_at' => 'required|date',
            'status' => 'required',
            'topics_en' => 'required',
            'topics_ar' => 'required',
            'objectives_en' => 'required',
            'objectives_ar' => 'required',
            'course_image' => 'nullable|image|max:1024000',
            'instructor_image' => 'nullable|image|max:1024000',


        ]);

        $course_image = $Course->course_image;
        if ($request->hasFile('course_image')) {
            $course_image = rand() . '_' . time() . '_' . $request->file('course_image')->getClientOriginalName();
            $request->file('course_image')->move(public_path('uploads'), $course_image);
            File::delete(public_path('uploads/' . $Course->course_image));
        }
        $instructor_image = $Course->instructor_image;
        if ($request->hasFile('instructor_image')) {
            $instructor_image = rand() . '_' . time() . '_' . $request->file('instructor_image')->getClientOriginalName();
            $request->file('instructor_image')->move(public_path('uploads'), $instructor_image);
            File::delete(public_path('uploads/' . $Course->instructor_image));
        }


        $Course->update([
            'course_en' => $request->course_en,
            'course_ar' => $request->course_ar,
            'price' => $request->price,
            'instructor_en' => $request->instructor_en,
            'instructor_ar' => $request->instructor_ar,
            'instructor_name_en' => $request->instructor_name_en,
            'instructor_name_ar' => $request->instructor_name_ar,
            'start_at' => $request->start_at,
            'status' => $request->status,
            'topics_en' => $request->get('topics_en'),
            'topics_ar' => $request->get('topics_ar'),
            'objectives_en' => json_encode($request->objectives_en),
            'objectives_ar' => json_encode($request->objectives_ar),
            'course_image' => $course_image,
            'instructor_image' => $instructor_image,
        ]);

        $notifications = [
            'alert-type' => 'success',
            'message' => 'تم التعديل بنجاح.'
        ];
        return redirect()->route('admin.courses.index')->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        File::delete(public_path('uploads/' . $course->course_image));
        File::delete(public_path('uploads/' . $course->instructor_image));

        $isDeleted = $course->delete();
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
