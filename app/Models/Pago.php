<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'detalle', 'fecha', 'nro_dias', 'total', 'cliente_id'
    ];
}
