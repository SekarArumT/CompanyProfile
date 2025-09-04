<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('position');       
            $table->string('department');     
            $table->string('location');      
            $table->string('job_type');       
            $table->string('salary_range')->nullable(); 
            $table->enum('status', ['open', 'closed', 'on_hold'])->default('open'); 
            $table->string('link')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
