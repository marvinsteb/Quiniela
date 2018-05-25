<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    
    protected $table = 'Partido';
    protected $primaryKey = 'IdPartido';
    public $timestamps = false;
    protected $fillabe = 
    [
        'IdUsuario',
        'IdLiga',
        'IdGrupo',
        'IdEquipo',
        'IdContrincante',
        'Jugado',
        'ResultadoEquipo',
        'ResultadoContrincante',
        'Fecha',
        'EquipoEnCasa',
        'EsResultado'
    ];
    protected $guarded =
    [

    ];
   
}
