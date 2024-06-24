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
            $table->string('tanggalLahir');
            $table->string('wargaNegara');
            $table->string('kelamin');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('nik');
<<<<<<< HEAD
            $table->string('no_KK');
=======
            $table->string('nomorKk');
            $table->string('keperluan');
>>>>>>> ca0e7b8dedd746d909fffd69fbc28df53698d2e9
            $table->string('golonganDarah');
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
