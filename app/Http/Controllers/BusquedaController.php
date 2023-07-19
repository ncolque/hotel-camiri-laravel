<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Habitacion;
use App\Models\Promocion;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class BusquedaController extends Controller
{
    public function buscarGeneral(Request $request)
    {
        $valor = $request->input('texto');

        $searchResults = (new Search())
            ->registerModel(Habitacion::class, 'categoria')
            ->registerModel(Promocion::class, 'nombre')
            ->registerModel(Cliente::class, 'nombre')
            ->search($valor);

        return view('busqueda', compact('searchResults'));
    }
}
