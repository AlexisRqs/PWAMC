<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('image')->nullable();
            $table->string('path')->nullable();
            $table->string('quantite')->nullable();
            $table->text('descriptif')->nullable();
            $table->string('mesure')->nullable();
            $table->string('poids')->nullable();
            $table->string('reference')->nullable();
            $table->string('region')->nullable();
            $table->timestamps();
            $table->bigInteger('id_categorie')->unsigned();
            $table->foreign('id_categorie')->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
}
