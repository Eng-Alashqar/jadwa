<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;


    protected $fillable = [ 'name_ar','name_en' , 'total_price', 'total_time'];

    public function Tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
