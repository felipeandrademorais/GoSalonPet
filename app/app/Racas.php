<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Racas extends Model
{
    public function servicos()
    {
        return $this->hasMany(Servicos::class, 'id_raca');
    }
}