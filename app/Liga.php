<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
    protected $table = 'Liga';
    protected $primaryKey = 'IdLiga';
    public $timestamps = false;
    protected $fillabe = 
    [
     'Nombre',
     'Sede',
     'Year',
     'EsApuesta'
    ];
    protected $guarded =
    [

    ];
}
