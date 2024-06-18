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
        Schema::create('form_inputs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenissurats_id')->unsigned();
            $table->string('name');
            $table->string('type');
            $table->integer('available');
            $table->timestamps();
            $table->foreign('jenissurats_id')->references('id')->on('jenissurats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_inputs');
    }
};
