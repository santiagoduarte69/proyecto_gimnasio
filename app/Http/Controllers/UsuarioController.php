<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuario = User::get();
        return view('auth.usuario.index', compact('usuario'));
    }

    public function create()
    {
        $role = Role::All();
        return view('auth.usuario.create')->with('role',$role);
    }

    public function store(Request $request)
    {

        $datos = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|max:50| email',
                'id_Role_FK' => 'required',
                'password' => 'required|max:60'
            ]
        );

        $usuario = User::create($datos);
        return view('auth.usuario.creado');
    }

    public function show(User $usuario)
    {
        //
    }

    public function edit(User $usuario)
    {
        $role = Role::All();
        return view('auth.usuario.edit', compact('usuario'))->with('role',$role);
    }

    public function update(Request $request, User $usuario)
    {
        $datos = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|max:50| email',
                'id_Role_FK',
                'password' => 'required|max:60'
            ]
        );
        $usuario->update($datos);
        return view('auth.usuario.actualizado');
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();
        return view('auth.usuario.borrado');
    }
}
