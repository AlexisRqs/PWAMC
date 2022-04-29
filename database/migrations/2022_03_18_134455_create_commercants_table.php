<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommercantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ville');
            $table->integer('code_postale');
            $table->string('categorie');
            $table->string('adresse')->nullable();
            $table->string('nom');
            $table->bigInteger('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commercants');
    }
}
