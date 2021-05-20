<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    use HasFactory;

    protected $table = 'talla';

    protected $primaryKey = 'id';

    protected $attributes = [
        'talla_nombre' => true,
    ];
}
