<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    public function servicos()
    {
        return $this->hasMany(Racas::class, 'id');
    }
}