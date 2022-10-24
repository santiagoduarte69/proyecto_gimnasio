@extends('auth.tema.app')

@section('title', "Listado de Reportes")

@section('contenido')
<h3>Listado de Reportes</h3>
<div class="col-sm-12">
    <a href="{{ route('reporte.create') }}" class="btn btn-outline-secondary">Crear Reporte</a>
    <a href="{{ route('reporte.index') }}" class="btn btn-outline-secondary">Listar Reportes</a>
    <a href="{{ route('gerente.indexadmin') }}" class="btn btn-outline-secondary">Volver</a>
</div>
<br>
<table class="table table-sm">
    <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Fecha
            </th>
            <th>
                Descripcion
            </th>
            <th>
                Id Maquina
            </th>
            <th>
                Identificacion Usuario
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
        @foreach ($reporte as $reporte)
        <tr>
            <td>
                {{ $reporte->id}}
            </td>
            <td>
                {{ $reporte->fecha_Reporte }}
            </td>
            <td>
                {{ $reporte->descripcion }}
            </td>
            <td>
                {{ $reporte->maquina->nombre_Maquina }}
            </td>
            <td>
                {{ $reporte->usuario->name }}
            </td>
            <td>
                {{ $reporte->estado_Reporte() }}
            </td>
            <td>
                <form action="{{ route('reporte.destroy', $reporte) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                </form>
            </td>
            <td>
                <a href="{{ route('reporte.edit', $reporte) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection