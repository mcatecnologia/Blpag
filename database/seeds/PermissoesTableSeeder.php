<?php

use Illuminate\Database\Seeder;
use App\Permissao;

class PermissoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $usuarios1 = Permissao::firstOrCreate([
            'nome'=>'usuario-view',
            'descricao'=>'Acesso a lista de Usuários'
        ]);

        $usuarios2 = Permissao::firstOrCreate([
            'nome'=>'usuario-create',
            'descricao'=>'Criar Usuários'
        ]);

        $usuarios3 = Permissao::firstOrCreate([
            'nome'=>'usuario-edit',
            'descricao'=>'Editar Usuários'
        ]);

        $usuarios4 = Permissao::firstOrCreate([
            'nome'=>'usuario-delete',
            'descricao'=>'Deletar Usuários'
        ]);

        $grupos1 = Permissao::firstOrCreate([
            'nome'=>'grupo-view',
            'descricao'=>'Acesso a lista de Grupos'
        ]);

        $grupo2 = Permissao::firstOrCreate([
            'nome'=>'grupo-create',
            'descricao'=>'Criar Grupos'
        ]);

        $grupo3 = Permissao::firstOrCreate([
            'nome'=>'grupo-edit',
            'descricao'=>'Editar Grupos'
        ]);

        $grupo4 = Permissao::firstOrCreate([
            'nome'=>'grupo-delete',
            'descricao'=>'Deletar Grupos'
        ]);

        $credor1 = Permissao::firstOrCreate([
            'nome'=>'credor-view',
            'descricao'=>'Acesso a lista de Credores'
        ]);

        $credor2 = Permissao::firstOrCreate([
            'nome'=>'credor-create',
            'descricao'=>'Criar Credor'
        ]);

        $credor3 = Permissao::firstOrCreate([
            'nome'=>'credor-edit',
            'descricao'=>'Editar Credor'
        ]);

        $credor4 = Permissao::firstOrCreate([
            'nome'=>'credor-delete',
            'descricao'=>'Deletar Credor'
        ]);




    }
}
