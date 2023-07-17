<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'course_ar',
        'course_en',
        'course_image',
        'start_at',
        'price',
        'instructor_en',
        'instructor_ar',
        'instructor_name_en',
        'instructor_name_ar',
        'instructor_image',
        'status',
        'topics_ar',
        'topics_en',
        'objectives_en',
        'objectives_ar',

    ];

    public static function booted()
    {
        static::creating(function (Course $course){
            $course->slug = Str::slug($course->course_en);
        });

        static::updating(function (Course $course){
            $course->slug = Str::slug($course->course_en);
        });
    }
}
