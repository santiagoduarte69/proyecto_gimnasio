@extends('auth.tema.app')
@section('title', "Listado de Usuarios")

@section('contenido')
<h3>Listado de Entrenador</h3>
<div class="col-sm-12">
    <a href="{{ route('entrenador.create') }}" class="btn btn-outline-secondary">Crear Entrenador</a>
    <a href="{{ route('entrenador.index') }}" class="btn btn-outline-secondary">Listar Entrenador</a>
    <a href="{{ route('gerente.indexadmin') }}" class="btn btn-outline-secondary">Volver</a>
</div>
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
                Estado
            </th>
            <th>
                Acciones
            </th>
            <th>
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


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>


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
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@endsection