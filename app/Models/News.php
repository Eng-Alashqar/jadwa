<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['slug','auther', 'title_ar', 'title_en', 'content_ar', 'content_en', 'image_name'];
    public static function booted()
    {
        static::creating(function (News $blog){
            $blog->slug = Str::slug($blog->title_en);
        });

        static::updating(function (News $blog){
            $blog->slug = Str::slug($blog->title_en);
        });
    }


    public static function rules()
    {
        return [
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content_ar' => 'required|string',
            'content_en' => 'required|string',
            'image_name' => 'required|image|max:1024000',
        ];
    }


    public static function updateRules()
    {
        return [
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content_ar' => 'required|string',
            'content_en' => 'required|string',
            'image_name' => 'nullable|image|max:1024000',

        ];
    }
}
