<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
     protected $table = 'agendamento';
    protected $fillable = ['id_servico', 'nome','email','telefone','endereco','data','hora'];
}