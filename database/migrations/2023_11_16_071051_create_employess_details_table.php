<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('employess_details', function (Blueprint $table) {
            $table->string('id_detail_karyawan')->unique();
            $table->integer('id_karyawan_fk');
            $table->integer('experience');
            $table->string('job_tittle');
            $table->string('job_desc');
            $table->timestamps();

            $table->foreign('id_karyawan_fk')->references('id_karyawan')->on('employees');
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('employess_details');
    }
};
