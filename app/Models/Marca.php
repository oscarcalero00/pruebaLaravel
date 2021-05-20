<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $table = 'marca';

    protected $primaryKey = 'id';

    protected $attributes = [
        'marca_nombre' => true,
        'marca_referencia' => true,

    ];

    protected $fillable = [
        'marca_nombre',
        'marca_referencia'
    ];
}
