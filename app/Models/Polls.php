<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polls extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'name_ar', 'institution_ar', 'institution_en', 'content_ar', 'content_en', 'image_name'];

    public static function rules()
    {
        return [
            'image_name' => 'required|image|max:1024000',
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'institution_ar' => 'required|string|max:255',
            'institution_en' => 'required|string|max:255',
            'content_ar' => 'required',
            'content_en' => 'required',

        ];
    }

    public static function updateRules()
    {
        return [
            'image_name' => 'nullable|image|max:1024000',
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'institution_ar' => 'required|string|max:255',
            'institution_en' => 'required|string|max:255',
            'content_ar' => 'required',
            'content_en' => 'required',

        ];
    }
}
