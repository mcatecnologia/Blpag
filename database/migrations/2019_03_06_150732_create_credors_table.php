<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCredorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Cd_Dono');
            $table->string('Ds_Credor');
            $table->string('DS_Razao');
            $table->string('Endereco');
            $table->string('Numero');
            $table->string('Bairro');
            $table->string('Cidade');
            $table->string('CEP');
            $table->char('UF');
            $table->string('CNPJ');
            $table->string('Insc');
            $table->string('Contato');
            $table->string('Funcao');
            $table->integer('Cd_Banco');
            $table->string('Conta');
            $table->string('Praca');
            $table->string('site');
            $table->char('Tp_NotaFiscal');
            $table->float('Al_MinEntradaAcordo');
            $table->string('Ds_DestinoDeposito');
            $table->integer('Nr_MaxParcelasAcordo');
            $table->string('Latitude');
            $table->string('Longitude');
            $table->string('logo');
            $table->tinyInteger('Fl_CredorValidado');
            $table->string('telefone');
            $table->char('Fl_Aceite');
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
        Schema::dropIfExists('credors');
    }
}
