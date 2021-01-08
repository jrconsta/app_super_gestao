<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{   
    protected $table = 'site_contatos';
    protected $fillable = ['nome', 'telefone', 'email', 'motivo', 'mensagem', 'created_at', 'updated_at'];
}
