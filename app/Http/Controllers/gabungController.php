<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class gabungController extends Controller
{
    
    public function lihatGabung(){
        $data_tampil = DB::select(' 
        SELECT kar.id, kar.name, kar.dob, kar.status, det.experience, det.job_tittle
        FROM employees kar INNER JOIN employess_details det ON kar.id = det.id_fk
       ');
       
       return view('gabung.index', compact('data_tampil'));

    }
}


