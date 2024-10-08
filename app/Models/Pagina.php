<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'visitas'];

    public static function contarPagina($path)
    {
        $pagina = Pagina::where('path', $path)->first();
        if ($pagina == null) {
            $pagina = new Pagina();
            $pagina->path = $path;
            $pagina->visitas = 0;
        }
        $pagina->visitas = $pagina->visitas + 1;
        $pagina->save();
    }
}
