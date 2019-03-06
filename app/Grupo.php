<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //
    protected $fillable = ['nome','descricao'];

    public function Users()
    {
        return $this->belongsToMany(User::class);

    }

    public function Permissoes()
    {
        return $this->belongsToMany(Permissao::class);
    }
}
