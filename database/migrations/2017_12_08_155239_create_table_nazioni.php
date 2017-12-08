<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNazioni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('nazioni', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_en')->nullable();
            $table->string('nome_it')->nullable();
            $table->string('nome_de')->nullable();
            $table->integer('ordine')->unique()->nullable();
            $table->string('sfondo')->nullable();
            $table->string('mappa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nazioni');
    }
}
