<?php

use Illuminate\Database\Seeder;
use App\Grupo;

class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $p1 = Grupo::firstOrCreate([
            'nome' => 'Admin',
            'descricao' =>'Acesso Total ao Sistema'
        ]);

        $p2 = Grupo::firstOrCreate([
            'nome' => 'Gerente',
            'descricao' =>'Gerenciamento do Sistema'
        ]);

        $p3 = Grupo::firstOrCreate([
            'nome' => 'Supervisor',
            'descricao' =>'Supervisionar as atividades dos Atendentes e Credores'
        ]);

        $p4 = Grupo::firstOrCreate([
            'nome' => 'Atendente',
            'descricao' =>'Acesso Sistema e visualização dos Devedores'
        ]);

        $p5 = Grupo::firstOrCreate([
            'nome' => 'Credor-Admin',
            'descricao' =>'Acesso Total e controle do Credor'
        ]);

        $p6 = Grupo::firstOrCreate([
            'nome' => 'Credor-Usuario',
            'descricao' =>'Usuário do Credor'
        ]);
    }
}
