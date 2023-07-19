<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pagina;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function visitasPDF()
    {
        $visitas = Pagina::all();
        $pdf = \PDF::loadView('reportes.visitas', [
            'visitas' => $visitas,
        ]);
        return $pdf->download('visitas.pdf');
    }

    public function usuariosPDF()
    {
        $usuarios = Cliente::all();
        $pdf = \PDF::loadView('reportes.usuarios', [
            'usuarios' => $usuarios,
        ]);
        return $pdf->download('clientes.pdf');
    }

    public function estadisticas()
    {
        /* $cursos = Curso::all();
        $inscrip = Inscripcion::count();
        $asisten = Asistencia::count(); */

        /* $paginaMenor = Pagina::orderBy("visitas", 'asc')->first();
        $paginaMayor = Pagina::orderBy("visitas", 'desc')->first();
        $paginaTotal = Pagina::sum('visitas');
        return view('reportes.estadisticas', compact('inscrip', 'asisten', 'cursos', 'paginaMenor', 'paginaMayor', 'paginaTotal')); */
    }
}
