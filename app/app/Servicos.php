<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    public function racas()
    {
        return $this->belongsTo(Racas::class );
    }
}