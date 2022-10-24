@extends('auth.tema.app')

@section('title', "Listado de Valoracion Fisica")

@section('contenido')
<h3>Listado de Valoracion Fisica</h3>
<div class="col-sm-12">
    <a href="{{ route('valoracion_fisica.create') }}" class="btn btn-outline-secondary">Crear valoracion fisica</a>
    <a href="{{ route('valoracion_fisica.index') }}" class="btn btn-outline-secondary">Listar valoracion fisicas</a>
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
                Peso
            </th>
            <th>
                Estatura
            </th>
            <th>
                Descripcion Medidas
            </th>
            <th>
                IMC
            </th>
            <th>
                Fecha Valoracion
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
        @foreach ($valoracion_fisica as $valoracion_fisica)
        <tr>
            <td>
                {{ $valoracion_fisica->id }}
            </td>
            <td>
                {{ $valoracion_fisica->peso }}
            </td>
            <td>
                {{ $valoracion_fisica->estatura }}
            </td>
            <td>
                {{ $valoracion_fisica->descripcion_Medidas }}
            </td>
            <td>
                {{ $valoracion_fisica->imc }}
            </td>
            <td>
                {{ $valoracion_fisica->fecha_Valoracion }}
            </td>
            <td>
                {{ $valoracion_fisica->estado_Valoracion() }}
            </td>
            <td>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $valoracion_fisica->id }}">Eliminar</button>
            </td>
            <td>
                <a href="{{ route('valoracion_fisica.edit', $valoracion_fisica) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr> 
        @endforeach
    </tbody>
</table>
<div class="modal fade" id="modal-delete-{{ $valoracion_fisica->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form action="{{ route('valoracion_fisica.destroy', $valoracion_fisica) }}" method="post">
                @csrf
                @method('delete')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Valoracion</h5>
                    </div>
                    <div class="modal-body">
                        Deseas eliminar al registro por id {{$valoracion_fisica->id}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-sm" class="formulario-eliminar">Borrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@endsection