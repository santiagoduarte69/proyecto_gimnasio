@extends('auth.tema.appEntrenador')

@section('title', "Listado de Cliente")

@section('contenido')
<h3>Listado de Clientes</h3>

<div class="col-sm-12">
    <a href="{{ route('entrenador.indexentrenador') }}" class="btn btn-outline-secondary">Volver</a>
</div>
<br>
<table class="table table-striped table-bordered" style="width:100%" id="example">
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
                Id Valoracion Fisica
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
        </tr>
        @endforeach
    </tbody>
</table>

<script>
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No se encontró nada, lo siento",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)"
                }
            });
        });
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@endsection