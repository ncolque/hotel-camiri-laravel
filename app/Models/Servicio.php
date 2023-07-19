<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'fecha', 'promocion_id', 'cliente_id',
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function promocion(){
        return $this->belongsTo(Promocion::class);
    }
}
