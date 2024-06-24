<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenisSurat_id')->unsigned();
            // $table->foreignId('jenisSurat_id')->constrained('jenissurats')->onDelete('cascade');
            $table->string('nomorSurat');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->boolean('validate')->default(false); //
            $table->boolean('tertanda')->default(false);
            $table->timestamps();


            $table->foreign('jenisSurat_id')->references('id')->on('jenissurats');
        });
    }

    public function down()
    {
        Schema::dropIfExists('surats');
    }
}

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('surats', function (Blueprint $table) {
//             $table->id();
//             $table->foreignId('jenisSurat_id')->constrained('jenissurats')->onDelete('cascade');
//             $table->string('nomorSurat');
//             $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
//             // $table->string('nomorSurat');
//             $table->boolean('validate')->default(false); //
//             $table->timestamps();

//             // Kode sebelumnya
//             // $table->unsignedBigInteger('jenissurat')->unsigned();
//             // $table->string('value');
//             // $table->unsignedBigInteger('user')->unsigned();
//             // $table->string('nomorSurat');
//             // $table->string('kelas');
//             // $table->string('prodi');
//             // $table->string('name');
//             // $table->string('nik');
//             // $table->foreign('jenissurat')->references('id')->on('jenissurats');
//             // $table->foreign('user')->references('id')->on('users');
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('surats');
//     }
// };
