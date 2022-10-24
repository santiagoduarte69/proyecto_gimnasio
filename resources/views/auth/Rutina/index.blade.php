@extends('auth.tema.app')

@section('title', "Listado de Rutinas")

@section('contenido')
<h3>Listado de Rutinas</h3>
<div class="col-sm-12">
    <a href="{{ route('rutina.create') }}" class="btn btn-outline-secondary">Crear Rutina</a>
    <a href="{{ route('rutina.index') }}" class="btn btn-outline-secondary">Listar Rutinas</a>
    <a href="{{ route('gerente.indexadmin') }}" class="btn btn-outline-secondary">Volver</a>
</div>
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
                Objetivo
            </th>
            <th>
                Id Ejercicio
            </th>
            <th>
                Entrenador
            </th>
            <th>
                Cliente
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
        @foreach ($rutina as $rutina)
        <tr>
            <td>
                {{ $rutina->id }}
            </td>
            <td>
                {{ $rutina->nombre_Rutina }}
            </td>
            <td>
                {{ $rutina->objetivo }}
            </td>
            <td>
                {{ $rutina->ejercicio->nombre_Ejercicio }}
            </td>
            <td>
                {{ $rutina->entrenador->nombre_Entre }}
            </td>
            <td>
                {{ $rutina->cliente->nombre_Clie }}
            </td>
            <td>
                {{ $rutina->estado_Rutina() }}
            </td>
            <td>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $rutina->id }}">Eliminar</button>
            </td>
            <td>
                <a href="{{ route('rutina.edit', $rutina) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach 
    </tbody>
</table>

<div class="modal fade" id="modal-delete-{{ $rutina->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form action="{{ route('rutina.destroy', $rutina) }}" method="post">
                @csrf
                @method('delete')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar rutina</h5>
                    </div>
                    <div class="modal-body">
                        Deseas eliminar al registro por nombre {{$rutina->nombre_Rutina}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-sm" class="formulario-eliminar">Borrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@endsection