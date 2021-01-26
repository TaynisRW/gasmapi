<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GasolinePrice extends Model
{
    // Protect the table for insertions unauthorized
    protected $table = 'gasoline_prices';
    public $timestamps = false;
    // Fields than app can fill
    protected $fillable = [
        'id',
        'calle',
        'rfc',
        'razonsocial',
        'date_insert',
        'numeropermiso',
        'fechaaplicacion',
        'permisoid',
        'longitude',
        'latitude',
        'codigopostal',
        'colonia',
        'municipio',
        'estado',
        'regular',
        'premium',
        'dieasel'
    ];
}
