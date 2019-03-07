<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     */
    public function up()
    {
        Schema::create('devedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cd_status');
            $table->char('Cd_FisJur','1');
            $table->date('Dt_Nascimento')->nullable();
            $table->string('Ds_CPFCNPJ','40')->nullable();
            $table->string('Ds_Naturalidade','60')->nullable();
            $table->string('Ds_nome','120')->nullable();
            $table->string('Cd_EstadoCivil','30')->nullable();
            $table->string('Nr_Documento','60')->nullable();
            $table->char('Cd_Sexo','1')->nullable();
            $table->string('Ds_Mae','120')->nullable();
            $table->string('Ds_Trabalho','80')->nullable();
            $table->string('Ds_Cargo','80')->nullable();
            $table->string('Ds_Pai','120')->nullable();
            $table->text('Ds_ReferenciaPessoal1')->nullable();
            $table->text('Ds_ReferenciaPessoal2')->nullable();
            $table->string('Ds_RG','15')->nullable();
            $table->tinyInteger('Fl_Importacao')->nullable();
            $table->string('Ds_NomeFantasia','120')->nullable();
            $table->string('Ds_Atividade','200')->nullable();
            $table->string('Ds_Nome_Gerente','120')->nullable();
            $table->string('Ds_NomeFinanceiro','120')->nullable();
            $table->string('Ds_NomeContato','120')->nullable();
            $table->timestamps();
        });

        Schema::create('devedorcredor', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('Cd_Devedor')->unsigned();
            $table->integer('Cd_Credor')->unsigned();
            $table->integer('Cd_Sit');
            $table->timestamps();

            $table->foreign('Cd_Devedor')->references('id')->on('devedores')->onDelete('cascade');
            $table->foreign('Cd_Credor')->references('id')->on('credores')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devedorcredor');
        Schema::dropIfExists('devedores');
    }
}
