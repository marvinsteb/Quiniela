<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioPorLiga extends Model
{
    protected $table = 'UsuarioPorLiga';
    protected $primaryKey = 'IdUsuarioPorLiga';
    public $timestamps = false;
    protected $fillabe = 
    [
     'IdUsuario',
     'IdLiga',
     'IsAdmin'
    ];
    protected $guarded =
    [

    ];

}
