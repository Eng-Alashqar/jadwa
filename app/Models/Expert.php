<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;

    protected $fillable = ['name_en','name_ar','content_en','content_ar','jop_description_en','jop_description_ar','phone','email','image','facebook','linkedln','twitter','skay'];

    public static function rules()
    {
        return [
            'name_en'=>'required | string | max:255',
            'name_ar'=>'required | string | max:255',
            'content_en'=>'required | string | max:255',
            'content_ar'=>'required | string | max:255',
            'jop_description_en'=>'required | string | max:255',
            'jop_description_ar'=>'required | string | max:255',
            'phone'=>'required | string | max:255',
            'email'=>'required | string | max:255',
            'image'=>'required | image | max:102450',
            'facebook'=>'required | string | max:255',
            'linkedln'=>'required | string | max:255',
            'twitter'=>'required | string | max:255',
            'skay'=>'required | string | max:255',
        ];
    }

    public static function updateRules()
    {
        return [
            'name_en'=>'required | string | max:255',
            'name_ar'=>'required | string | max:255',
            'content_en'=>'required | string | max:255',
            'content_ar'=>'required | string | max:255',
            'jop_description_en'=>'required | string | max:255',
            'jop_description_ar'=>'required | string | max:255',
            'phone'=>'required | string | max:255',
            'email'=>'required | string | max:255',
            'image'=>'nullable | image | max:102450',
            'facebook'=>'required | string | max:255',
            'linkedln'=>'required | string | max:255',
            'twitter'=>'required | string | max:255',
            'skay'=>'required | string | max:255',
        ];
    }
}
