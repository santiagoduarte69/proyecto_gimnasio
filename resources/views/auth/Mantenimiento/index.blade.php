@extends('auth.tema.app')

@section('title', "Listado de Mantenimientos")

@section('contenido')
<h3>Listado de Mantenimientos</h3>
<div class="col-sm-12">
    <a href="{{ route('mantenimiento.create') }}" class="btn btn-outline-secondary">Crear mantenimiento</a>
    <a href="{{ route('mantenimiento.index') }}" class="btn btn-outline-secondary">Listar mantenimientos</a>
    <a href="{{ route('gerente.indexadmin') }}" class="btn btn-outline-secondary">Volver</a>
</div>
<br>
<table class="table table-stripped table-hover">
    <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Tipo Mantenimiento
            </th>
            <th>
                Diagnostico Mantenimiento
            </th>
            <th>
                Fecha Inicio
            </th>
            <th>
                Fecha Fin
            </th>
            <th>
                Estado
            </th>
            <th colspan="3">
                Acciones
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($mantenimiento as $mantenimiento)
        <tr>
            <td>
                {{ $mantenimiento->id}}
            </td>
            <td>
                {{ $mantenimiento->tipo_Mantenimiento }}
            </td>
            <td>
                {{ $mantenimiento->diagnostico_Manteni }}
            </td>
            <td>
                {{ $mantenimiento->fecha_Inicio }}
            </td>
            <td>
                {{ $mantenimiento->fecha_Fin }}
            </td>
            <td>
                {{ $mantenimiento->estado_Mantenimiento() }}
            </td>
            <td>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $mantenimiento->id }}">Eliminar</button>
            </td>
            <td>
                <a href="{{ route('mantenimiento.edit', $mantenimiento) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
        <div class="modal fade" id="modal-delete-{{ $mantenimiento->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('mantenimiento.destroy', $mantenimiento) }}" method="post">
                    @csrf
                    @method('delete')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar mantenimiento</h5>
                        </div>
                    <div class="modal-body">
                        Deseas eliminar al registro por nombre {{$mantenimiento->tipo_Mantenimiento}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-sm" class="formulario-eliminar">Borrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </tbody>
</table>
@endsection