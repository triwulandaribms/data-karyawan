<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\employeesController;
use App\Http\Controllers\employeesDetailsController;
use App\Http\Controllers\gabungController;


// route halaman depan
Route::get('/',function(){ return view('welcome'); });
Route::get('/tampilAll', [employeesController::class, 'index'])->name('employees.index');

// route karyawan
Route::get('/employees',[employeesController::class, 'index'])->name('index');
Route::get('/employees/create', [employeesController::class, 'create'])->name('employees.create');
Route::post('/employees/store', [employeesController::class, 'store'])->name('employees.store');
Route::get('/employees/edit/{id}', [employeesController::class, 'edit'])->name('employees.edit');
Route::put('/employees/update/{id}', [employeesController::class, 'update'])->name('employees.update');
Route::delete('/employees/destroy/{id}', [employeesController::class, 'destroy'])->name('employees.destroy');

// route detail karyawan
Route::get('/employeesDetails',[employeesDetailsController::class, 'index'])->name('index');
Route::get('/employeesDetails/create', [employeesDetailsController::class, 'create'])->name('detail.create');
Route::post('/employeesDetails/store', [employeesDetailsController::class, 'store'])->name('detail.store');
Route::delete('/employeesDetails/destroy/{id}', [employeesDetailsController::class, 'destroy'])->name('detail.destroy');


Route::get('/tampil', [gabungController::class, 'lihatGabung'])->name('lihatGabung');
