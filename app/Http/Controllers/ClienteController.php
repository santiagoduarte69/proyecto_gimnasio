<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\ValoracionFisica;
use App\Models\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = Cliente::get();
        return view('auth.cliente.index', compact('cliente'));
    }

    public function create()
    {
        $usuario = User::All();
        $valofisica = ValoracionFisica::All();
        return view('auth.cliente.create')->with('usuario', $usuario)->with('valofisica', $valofisica);
    }

    public function store(Request $request)
    {
        $user = User::All();
        $datos = $request->validate(
            [
                'nombre_Clie' => ' required| max:50',
                'apellido_Clie' => 'required| max:50',
                'fecha_Nac_Clie' => 'required',
                'telefono_Clie' => 'required| max:11',
                'direccion_Clie' => 'required| max:50',
                'estado_Clie' => 'required',
                'id_valoracionFisica_FK' => 'required',
                'identificacion_Usuario_FK' => 'required|unique:Cliente'
            ],
            [
                'identificacion_Usuario_FK.unique' => 'El Correo ya se encuentra en uso'
            ]
        );

        $cliente = Cliente::create($datos);
        return view('auth.cliente.creado');
    }

    public function index2()
    {
        $valofisica = ValoracionFisica::All();
        $cliente = Cliente::get();
        return view('auth.REntrenador.cliente.index', compact('cliente'))->with('valofisica', $valofisica);
    }

    public function show(Cliente $cliente)
    {
        //
    }

    public function edit(Cliente $cliente)
    {
        $usuario = User::All();
        $valofisica = ValoracionFisica::All();
        return view('auth.cliente.edit', compact('cliente'))->with('usuario', $usuario)->with('valofisica', $valofisica);
    }

    public function update(Request $request, Cliente $cliente)
    {
        $datos = $request->validate(
            [
                'nombre_Clie' => ' required| max:50',
                'apellido_Clie' => 'required| max:50',
                'fecha_Nac_Clie' => 'required',
                'telefono_Clie' => 'required',
                'direccion_Clie' => 'required| max:50',
                'estado_Clie' => 'required',
                'id_valoracionFisica_FK',
                'identificacion_Usuario_FK' => 'unique:user' . $user->id
            ]
        );

        $cliente->update($datos);
        return view('auth.cliente.actualizado');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return view('auth.cliente.borrado');
    }
}
