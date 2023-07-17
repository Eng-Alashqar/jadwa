<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name_ar','name_en','time','price'];


    public function Packages()
    {
        return $this->belongsToMany(Package::class);
    }
}
