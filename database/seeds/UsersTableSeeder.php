<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name'=>'Thiago Silva',
            'email'=>'thiago.silva@mcainfo.com.br',
            'password'=>bcrypt('rafael@2603')
        ]);
    }
}
