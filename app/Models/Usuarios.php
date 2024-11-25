<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['id', 'nombre', 'telefono', 'creado_en']; // Ajusta estos campos según tu tabla
}
