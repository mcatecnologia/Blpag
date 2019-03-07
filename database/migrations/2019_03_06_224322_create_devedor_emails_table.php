<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevedorEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devedoremails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Cd_Devedor');
            $table->string('Ds_Email','120');
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
        Schema::dropIfExists('devedoremails');
    }
}
