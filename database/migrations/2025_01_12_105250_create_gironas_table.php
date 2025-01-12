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
        Schema::create('gironas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->unsignedBigInteger('comarca');
            $table->foreign('comarca')->references('id')->on('comarcas');
            $table->unsignedBigInteger('provincia');
            $table->foreign('provincia')->references('id')->on('provincias');
            $table->string('descripcio');
            $table->string('imatge');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gironas');
    }
};
