<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'fch_reserva', 'fch_desde', 'fch_hasta', 'cliente_id', 'habitacion_id'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function habitacion(){
        return $this->belongsTo(Habitacion::class);
    }

    public function hospedaje(){
        return $this->hasOne(Hospedaje::class);
    }
}
