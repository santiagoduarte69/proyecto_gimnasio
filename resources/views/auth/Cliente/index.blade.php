@extends('auth.tema.app')

@section('title', "Listado de Cliente")

@section('contenido')
<h3>Listado de Clientes</h3>

<div class="col-sm-12">
    <a href="{{ route('cliente.create') }}" class="btn btn-outline-secondary">Crear Cliente</a>
    <a href="{{ route('cliente.index') }}" class="btn btn-outline-secondary">Listar Clientes</a>
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
                Valoracion Fisica
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
        @foreach ($cliente as $cliente)
        <tr>
            <td>
                {{ $cliente->id }}
            </td>
            <td>
                {{ $cliente->nombre_Clie }}
            </td>
            <td>
                {{ $cliente->apellido_Clie }}
            </td>
            <td>
                {{ $cliente->fecha_Nac_Clie }}
            </td>
            <td>
                {{ $cliente->telefono_Clie }}
            </td>
            <td>
                {{ $cliente->direccion_Clie }}
            </td>
            <td>
                {{ $cliente->usuario->name }}
            </td>
            <td>
                {{ $cliente->id_valoracionFisica_FK }}
            </td>
            <td>
                {{ $cliente->estado_Clie() }}
            </td>
            <td>
                <form action="{{ route('cliente.destroy', $cliente) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                </form>
            </td>
            <td>
                <a href="{{ route('cliente.edit', $cliente) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection