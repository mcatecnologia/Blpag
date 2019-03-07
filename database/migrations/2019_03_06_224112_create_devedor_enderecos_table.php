<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevedorEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devedorenderecos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Cd_Devedor')->unsigned();
            $table->string('Ds_TipoEndereco','40')->nullable();
            $table->string('Ds_Logradouro','120');
            $table->string('Numero','30')->nullable();
            $table->string('Complemento','60')->nullable();
            $table->string('Bairro','80')->nullable();
            $table->string('Cidade','80');
            $table->char('UF','2');
            $table->string('CEP','12');
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
        Schema::dropIfExists('devedorenderecos');
    }
}
