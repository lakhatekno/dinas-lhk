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
        Schema::create('submenu_data', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 3);
            $table->string('elemen');
            $table->float('data2021')->nullable();
            $table->float('data2022')->nullable();
            $table->float('data2023')->nullable();
            $table->float('data2024')->nullable();
            $table->string('satuan')->nullable();
            $table->string('sifat_data')->default('Tahunan');
            $table->enum('status', ['tidak ada', 'sementara', 'tetap']);
            $table->string('otoritas')->nullable();
            $table->string('verifikasi')->nullable();
            $table->string('slug');
            $table->foreign('slug')->references('slug')->on('items')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submenu_data');
    }
};
