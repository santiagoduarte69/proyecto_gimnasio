<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Http\Request;

class MantenimientoController extends Controller
{

    public function index()
    {
        $mantenimiento = Mantenimiento::get();
        return view('auth.mantenimiento.index', compact('mantenimiento'));
    }

    public function create()
    {
        return view('auth.mantenimiento.crear');
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'tipo_Mantenimiento' => ' max:50',
                'diagnostico_Manteni' => 'required| max:50',
                'fecha_Inicio' => 'required',
                'fecha_Fin' => 'required',
                'estado_Mantenimiento' => 'required'
            ]
        );

        $mantenimiento = Mantenimiento::create($datos);
        return view('auth.mantenimiento.creado');
    }

    public function show(Mantenimiento $mantenimiento)
    {
        //
    }

    public function edit(Mantenimiento $mantenimiento)
    {
        return view('auth.mantenimiento.edit', compact('mantenimiento'));
    }

    public function update(Request $request, Mantenimiento $mantenimiento)
    {
        $datos = $request->validate(
            [
                'tipo_Mantenimiento' => ' max:50',
                'diagnostico_Manteni' => 'required| max:50',
                'fecha_Inicio' => 'required',
                'fecha_Fin' => 'required',
                'estado_Mantenimiento' => 'required'
            ]
        );

        $mantenimiento->update($datos);
        return view('auth.mantenimiento.actualizado');
    }

    public function destroy(Mantenimiento $mantenimiento)
    {
        $mantenimiento->delete();
        return view('auth.mantenimiento.borrado');
    }
}
