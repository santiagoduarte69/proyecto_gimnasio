@extends('auth.tema.app')

@section('title', "Listado de Entrenador")

@section('contenido')
<h3>Listado de Entrenador</h3>

<div class="col-sm-12">
    <a href="{{ route('entrenador.create') }}" class="btn btn-outline-secondary">Crear Entrenador</a>
    <a href="{{ route('entrenador.index') }}" class="btn btn-outline-secondary">Listar Entrenador</a>
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
                Nombre
            </th>
            <th>
                Apellido
            </th>
            <th>
                Fecha Nacimiento
            </th>
            <th>
                Telefono
            </th>
            <th>
                Direccion
            </th>
            <th>
                Usuario
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
        @foreach ($entrenador as $entrenador)
        <tr>
            <td>
                {{ $entrenador->id }}
            </td>
            <td>
                {{ $entrenador->nombre_Entre }}
            </td>
            <td>
                {{ $entrenador->apellido_Entre }}
            </td>
            <td>
                {{ $entrenador->fecha_Nac_Entre }}
            </td>
            <td>
                {{ $entrenador->telefono_Entre }}
            </td>
            <td>
                {{ $entrenador->direccion_Entre }}
            </td>
            <td>
                {{ $entrenador->usuario->name }}
            </td>
            <td>
                {{ $entrenador->estado_Entre() }}
            </td>
            <td>
                <form action="{{ route('entrenador.destroy', $entrenador) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="Toast()">Borrar</button>
                </form>
            </td>
            <td><a href="{{ route('entrenador.edit', $entrenador) }}" class="btn btn-warning btn-sm">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection