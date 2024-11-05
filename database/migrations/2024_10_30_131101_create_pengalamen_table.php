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
        Schema::create('pengalaman', function (Blueprint $table) {
            $table->id('id_pengalaman');
            $table->unsignedBigInteger('id_cake')->index();
            $table->string('judul');
            $table->text('deskripsi');
            $table->enum('jenis', ['in', 'out']);
            $table->timestamps();

            $table->foreign('id_cake')->references('id_cake')->on('cakes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengalaman');
    }
};
