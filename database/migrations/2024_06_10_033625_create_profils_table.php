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
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->string('namaLengkap');
            $table->string('tempatLahir');
            $table->integer('tanggal');
            $table->string('bulan');
            $table->integer('tahun');
            $table->string('warganegara');
            $table->integer('jenisKelamin');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->integer('nik');
            $table->integer('no_KK');
            $table->string('keperluan');
            $table->string('golonganDarah');
            $table->string('rt');
            $table->string('rw');
            $table->string('banjar');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

            // 3.	Umur // diambil dengan javascript
            // 12.	Berlaku // ditetapkan sekertaris
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};
