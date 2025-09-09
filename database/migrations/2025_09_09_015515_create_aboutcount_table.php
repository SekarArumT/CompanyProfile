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
        Schema::create('aboutcount', function (Blueprint $table) {
            $table->id();
            $table->integer('insan_satylaksana');
            $table->integer('distribution_center');
            $table->integer('csr_partner');
            $table->integer('sku_products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutcount');
    }
};
