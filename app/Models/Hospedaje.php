<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'reserva_id',
    ];

    public function reserva(){
        return $this->belongsTo(Reserva::class);
    }
}
