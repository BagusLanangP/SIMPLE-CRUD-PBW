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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenissurat')->unsigned();
            // $table->string('nomorSurat');
            $table->string('kelas');
            $table->string('prodi');
            $table->string('name');
            // $table->string('nik');
            $table->timestamps();

            $table->foreign('jenissurat')->references('id')->on('jenissurats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
