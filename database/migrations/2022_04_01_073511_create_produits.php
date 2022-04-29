<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->text('descriptif')->nullable();
            $table->text('image')->nullable();
            $table->string('path')->nullable();
            $table->text('code_qr')->nullable();
            $table->text('quantite')->nullable();
            $table->text('ville')->nullable();
            $table->text('poids')->nullable();
            $table->text('mention-legales')->nullable();

            $table->bigInteger('id_ingredient')->unsigned();
            $table->foreign('id_ingredient')->references('id')->on('ingredients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
