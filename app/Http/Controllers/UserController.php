<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use App\Models\User;
use Aws\Rekognition\RekognitionClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* $roles = Role::all(); */
        return view('usuarios.create'/* , compact('roles') */);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                
        /* $usuario->roles()->sync($request->roles); */
        $newUsuario = $request->all();
        $newUsuario['password'] = Hash::make($request->password);
        $usuario = User::create($newUsuario);
        return redirect()->route('users.index')->with(
            'info',
            [
                'afirmacion' => 'success',
                'mensaje' => 'Registro creado satisfactoriamente',
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        /* $roles = Role::all(); */
        return view('usuarios.edit', compact('user'/* , 'roles' */));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {   
        $newUsuario = $request->all();
        $newUsuario['password'] = Hash::make($request->password);
        $user->update($newUsuario);
        /* $user->roles()->sync($request->roles); */
        return redirect()->route('users.index')->with(
            'info',
            [
                'afirmacion' => 'primary',
                'mensaje' => 'Registro actualizado satisfactoriamente',
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $result = [
            'afirmacion' => 'danger',
            'mensaje' => 'Registro eliminado satisfactoriamente',
        ];
        try {
            $user->delete();
        } catch (\Throwable $th) {
            $result['afirmacion'] = 'danger';
            $result['mensaje'] = 'No es posible eliminar este registro';
        }
        return redirect()->route('users.index')->with('info', $result);
    }
    
}
