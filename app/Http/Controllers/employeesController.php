<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class employeesController extends Controller
{
  
    public function index()
    {
        $data_employees = Employees::orderBy('id_karyawan', 'asc')->get();
        return view('employees.index', compact('data_employees'));
    }

   
    public function create()
    {
        return view('employees.create');
    }

   
    public function store(Request $request)
    {
        $id_karyawan = $request->id_karyawan;
        

        $cekId = Employees::where('id_karyawan', $id_karyawan)->exists();

        if($cekId){
            return "id karyawan tidak boleh sama";
        }

        Employees::create([
            "id_karyawan" => $id_karyawan,
            "name" => $request->name,
            "dob" => $request->dob,
            "status" => $request->status,
            "join_date" => $request->join_date,
        ]);

        return redirect()->to('/employees');
    }

  
    public function show(string $id)
    {
        
    }

   
    public function edit(string $id)
    {
        $data_employees = Employees::where('id_karyawan', $id)->first();
        return view('employees.edit', compact('data_employees'));
    }


    public function update(Request $request, string $id)
    {
        Employees::where('id_karyawan', $id)->update([
            'id_karyawan'=> $request->id_karyawan,
            'name' => $request->name,
            'dob' => $request->dob,
            'status' => $request->status,
            'join_date' => $request->join_date,
        ]);  
        
        return redirect()->to('/employees');
    }

    public function destroy(string $id)
    {
        Employees::where('id_karyawan', $id)->delete();
        return redirect()->to('/employees');  
    }
}
