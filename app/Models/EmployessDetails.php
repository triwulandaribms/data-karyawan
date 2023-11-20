<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployessDetails extends Model
{
    use HasFactory;



    protected $fillable = [
        'id_fk',
        'experience',
        'job_tittle',
        'job_desc',
    ];

  

    public static function getAll(){
        return EmployeesDetails::all();
    }
}
