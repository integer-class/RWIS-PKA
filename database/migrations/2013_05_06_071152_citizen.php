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
        Schema::create('citizen', function (Blueprint $table) {
            $table->id('nik');
            $table->String('nama');
            $table->string('alamat');
            $table->string('rt');
            $table->string('agama');
            $table->enum('golongan_darah', ['A', 'B', 'AB', 'O']);
            $table->enum('jenis_kelamin', ["L", "P"]);
            $table->string('pekerjaan');
            $table->unsignedBigInteger('no_kk'); // Adding the no_kk column
            $table->rememberToken(); 
            $table->timestamps();

            $table->foreign('no_kk')->references('no_kk')->on('kartu_keluarga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citizen');
    }
};

