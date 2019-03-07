<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Plano');
            $table->float('Valor');
            $table->integer('Usuarios');
            $table->integer('Devedores');
            $table->timestamps();
        });

        Schema::create('credor_planos', function (Blueprint $table){
            $table->integer('plano_id')->unsigned();
            $table->integer('credor_id')->unsigned();

            $table->foreign('plano_id')->references('id')->on('planos')->onDelete('cascade');
            $table->foreign('credor_id')->references('id')->on('credores')->onDelete('cascade');

            $table->primary(['plano_id','credor_id']);
        });

        Schema::create('credor_user', function (Blueprint $table){
            $table->integer('user_id')->unsigned();
            $table->integer('credor_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('credor_id')->references('id')->on('credores')->onDelete('cascade');

            $table->primary(['user_id','credor_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planos');
    }
}
