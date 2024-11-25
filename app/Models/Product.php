<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Si el nombre de la tabla no es el plural del nombre del modelo (por ejemplo, 'products' en lugar de 'product'),
    // puedes especificar la tabla aquí.
    // protected $table = 'products';  // Solo si el nombre de la tabla no sigue la convención de Laravel

    // Si tu tabla tiene columnas que no son asignables masivamente, puedes usar el siguiente atributo para protegerlas:
    // protected $guarded = []; // Esto permite que todas las columnas sean asignables

    // O bien, si deseas definir las columnas que son asignables masivamente:
    protected $fillable = ['id', 'name', 'price', 'description', 'stock']; // Ajusta estos campos según tu tabla
}
