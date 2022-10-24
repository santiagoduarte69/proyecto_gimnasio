@extends('auth.tema.app')

@section('title', "Listado de Maquinas")

@section('contenido')
<h3>Listado de Maquinas</h3>
<div class="col-sm-12">
    <a href="{{ route('maquina.create') }}" class="btn btn-outline-secondary">Crear Maquina</a>
    <a href="{{ route('maquina.index') }}" class="btn btn-outline-secondary">Listar Maquinas</a>
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
                Proveedor
            </th>
            <th>
                Cantidad
            </th>
            <th>
                Lugar Maquina
            </th>
            <th>
                Mantenimiento
            </th>
            <th>
                Gerente
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
        @foreach ($maquina as $maquina)
        <tr>
            <td>
                {{ $maquina->id}}
            </td>
            <td>
                {{ $maquina->nombre_Maquina }}
            </td>
            <td>
                {{ $maquina->proveedor }}
            </td>
            <td>
                {{ $maquina->cantidad }}
            </td>
            <td> 
                {{ $maquina->lugar_Maquina }}
            </td>   
            <td>
                {{ $maquina->mantenimiento->tipo_Mantenimiento }}
            </td>
            <td>
                {{ $maquina->gerente->nombre_Geren }}
            </td>
            <td>
                {{ $maquina->estado_Maquina() }}
            </td>
            <td>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $maquina->id }}">Eliminar</button>
            </td>
            <td>
                <a href="{{ route('maquina.edit', $maquina) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>

            </tr>
        @endforeach

    <div class="modal fade" id="modal-delete-{{ $maquina->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('maquina.destroy', $maquina) }}" method="post">
                    @csrf
                    @method('delete')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar maquina</h5>
                        </div>
                    <div class="modal-body">
                        Deseas eliminar al registro por nombre {{$maquina->nombre_Maquina}}
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