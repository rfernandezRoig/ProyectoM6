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
        Schema::create('pobles', function (Blueprint $table) {
            $table->id();
            $table->string('municipi')->unique();
            $table->string('comarca');
            $table->string('provincia');
            $table->text('descripcio');
            $table->string('imatge');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pobles');
    }
};
