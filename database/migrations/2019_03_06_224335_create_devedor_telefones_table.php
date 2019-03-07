<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevedorTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devedor_telefones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Cd_Devedor')->unsigned();
            $table->char('DDD','5');
            $table->char('DDI','5');
            $table->char('Tipo','1');
            $table->string('Telefone','15');
            $table->char('Situacao','1');
            $table->timestamps();

            $table->foreign('Cd_Devedor')->references('id')->on('devedores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devedor_telefones');
    }
}
