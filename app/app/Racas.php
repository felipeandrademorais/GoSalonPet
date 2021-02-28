<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Racas extends Model
{
    public function racas()
    {
        return $this->belongsTo(Servicos::class);
    }
}