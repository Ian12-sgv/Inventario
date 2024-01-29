<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pc extends Model
{
    use HasFactory;

    protected $fillable =[
        "title",
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
