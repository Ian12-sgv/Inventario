<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    use HasFactory;

    protected $fillable =[
        "titulo",
        'direccion_ip',
        'modelo',
        'marca',
        'serial',
        'direccion_mac',
        'componentes_marcas',
        'usuario',
        'oficina'
    ];
}
