<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Cliente extends Model implements Searchable
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'documento', 'registro', 'nombre', 'telefono'
    ];

    public function servicios(){
        return $this->hasMany(Servicio::class);
    }

    public function reserva(){
        return $this->hasOne(Reserva::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('buscar.resultado', $this->id);

        return new SearchResult(
            $this,
            $this->nombre,
            $url
        );
    }
}
