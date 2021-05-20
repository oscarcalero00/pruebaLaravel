<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $primaryKey = 'id';

    protected $attributes = [
        'producto_nombre' => true,
        'producto_observaciones' => true,
        'producto_cantidad' => true,
        'producto_fechaembarque' => true,
        'producto_talla' => true,
        'producto_marca' => true,

    ];

    protected $fillable = [
        'producto_nombre',
        'producto_observaciones' ,
        'producto_cantidad' ,
        'producto_fechaembarque' ,
        'producto_talla' ,
        'producto_marca' ,
    ];


}
