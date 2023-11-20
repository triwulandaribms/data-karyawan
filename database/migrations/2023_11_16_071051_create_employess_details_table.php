<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('employess_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_fk');
            $table->integer('experience');
            $table->string('job_tittle');
            $table->text('job_desc');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_fk')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('employess_details');
    }
};
