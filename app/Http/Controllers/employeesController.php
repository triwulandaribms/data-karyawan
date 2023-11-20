<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class employeesController extends Controller
{
  
    public function index()
    {
        $data_employees = Employees::orderBy('id', 'asc')->get();
        return view('employees.index', compact('data_employees'));
    }

   
    public function create()
    {
        return view('employees.create');
    }


    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'dob' => 'required|date',
            'status' => 'required',
            'join_date' => 'required|date',
        ],[
            'name.required' => 'Nama tidak boleh kosong.',
            'dob.required' => 'Tanggal lahir tidak boleh kosong.',
            'status.required' => 'Status tidak boleh kosong.',
            'join_date.required' => 'Tanggal bergabung tidak boleh kosong.',
        ]);

        Employees::create([
            "name" => $request->input('name'),
            "dob" => $request->input('dob'),
            "status" => $request->input('status'),
            "join_date" => $request->input('join_date'),
        ]);

        return redirect()->to('/employees');
    }

  
    public function show(string $id)
    {
        
    }

   
    public function edit(string $id)
    {
        $data_employees = Employees::where('id', $id)->first();
        return view('employees.edit', compact('data_employees'));
    }


    public function update(Request $request, string $id)
    {

        $request->validate([
            'name' => 'required',
            'dob' => 'required|date',
            'status' => 'required',
            'join_date' => 'required|date',
        ],[
            'name.required' => 'Nama tidak boleh kosong.',
            'dob.required' => 'Tanggal lahir tidak boleh kosong.',
            'status.required' => 'Status tidak boleh kosong.',
            'join_date.required' => 'Tanggal bergabung tidak boleh kosong.',
        ]);
        
    
        if ($request->id != $id) {
            return redirect()->back()->withErrors(['id' => 'ID tidak boleh diubah.']);
        }

        Employees::where('id', $id)->update([
            'name' => $request->name,
            'dob' => $request->dob,
            'status' => $request->status,
            'join_date' => $request->join_date,
        ]);  
        
        return redirect()->to('/employees');
    }

    public function destroy(string $id)
    {
        Employees::where('id', $id)->delete();
        return redirect()->to('/employees');  
    }
}
