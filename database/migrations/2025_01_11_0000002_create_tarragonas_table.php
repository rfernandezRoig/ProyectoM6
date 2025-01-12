<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('tarragonas', function (Blueprint $table) {
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

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('tarragonas');
        Schema::enableForeignKeyConstraints();
    }
};
