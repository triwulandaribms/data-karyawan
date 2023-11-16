<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'name',
        'dob',
        'status',
        'join_date',
    ];

    public static function getAll(){
        return Employees::all();
    }

}
