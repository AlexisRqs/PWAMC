<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  /*  public function up()
    {
        Schema::create('favoris', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_produit')->unsigned();
            $table->bigInteger('id_commercant')->unsigned();
            $table->foreign('id_produit')->references('id')->on('produits');
            $table->foreign('id_commercant')->references('id')->on('commercants');
        });
    }
*/
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favoris');
    }
}
