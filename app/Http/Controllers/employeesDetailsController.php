<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployessDetails;

class employeesDetailsController extends Controller
{
    
    public function index()
    {
        $data_detail = EmployessDetails::orderBy('id_detail_karyawan', 'asc')->get();
        return view('detail.index', compact('data_detail'));
   
    }

  
    public function create()
    {
        return view('detail.create');
    }

    
    public function store(Request $request)
    {
        $id_detail_karyawan = $request->id_detail_karyawan;
    
        $cekId = EmployessDetails::where('id_detail_karyawan', $id_detail_karyawan)->exists();
    
        if ($cekId) {
            return "id detail karyawan tidak boleh sama";
        }
    
        EmployessDetails::create([
            "id_detail_karyawan" => $id_detail_karyawan,
            "id_karyawan_fk" => $request->id_karyawan_fk,
            "experience" => $request->experience,
            "job_tittle" => $request->job_tittle,
            "job_desc" => $request->job_desc,
        ]);
    
        return redirect()->to('/employeesDetails');

    }

   
    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        $data_detail = EmployessDetails::where('id_detail_karyawan',$id)->first();
        return view('detail.edit', compact('data_detail'));
    }

  
    public function update(Request $request, string $id)
    {

    }

   
    public function destroy(string $id)
    {
        EmployessDetails::where('id_detail_karyawan', $id)->delete();

        return redirect()->to('/employeesDetails');

    }
}
