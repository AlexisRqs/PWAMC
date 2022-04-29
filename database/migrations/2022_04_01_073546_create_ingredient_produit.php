<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientProduit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_produit', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('ingredient_id')->unsigned();
            $table->bigInteger('produit_id')->unsigned();

            $table->foreign('ingredient_id')->references('id')->on('ingredients');
            $table->foreign('produit_id')->references('id')->on('produits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_produit');
    }
}
