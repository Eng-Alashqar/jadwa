<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['agent','count','place_visit','last_visit_date'];

}
