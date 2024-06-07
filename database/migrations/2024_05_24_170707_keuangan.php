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
        Schema::create('keuangan', function (Blueprint $table) {
            $table->id('id'); // Adds an auto-incrementing id column
            $table->date('tanggal');
            $table->string('jenis_iuran'); // You can adjust the length as needed
            $table->string('jenis_data');  // You can adjust the length as needed
            $table->unsignedInteger('jumlah');  // Assuming 'jumlah' is a numeric value
            $table->string('nama');        // You can adjust the length as needed
            $table->string('rt');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangan');
    }
};

