<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'dob',
        'status',
        'join_date',
    ];
   
    protected $dates = ['deleted_at'];

    public static function getAll(){
        return Employees::all();
    }

}
