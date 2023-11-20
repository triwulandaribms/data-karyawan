<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployessDetails;

class employeesDetailsController extends Controller
{
    
    public function index()
    {
        $data_detail = EmployessDetails::orderBy('id', 'asc')->get();
        return view('detail.index', compact('data_detail'));
   
    }

  
    public function create()
    {
        return view('detail.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'id_fk' => 'required',
            'experience' => 'required',
            'job_tittle' => 'required',
            'job_desc' => 'required',
        ],[
            'id_fk.required' => 'id karyawan tidak boleh kosong.',
            'experience.required' => 'pengalaman tidak boleh kosong.',
            'job_tittle.required' => 'Job tittle tidak boleh kosong.',
            'job_desc.required' => 'Join desc tidak boleh kosong.',
        ]);
    
        EmployessDetails::create([
            "id_fk" => $request->id_fk,
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
        $data_detail = EmployessDetails::where('id',$id)->first();
        return view('detail.edit', compact('data_detail'));
    }

  
    public function update(Request $request, string $id)
    {

    }

   
    public function destroy(string $id)
    {
        EmployessDetails::where('id', $id)->delete();

        return redirect()->to('/employeesDetails');

    }
}
