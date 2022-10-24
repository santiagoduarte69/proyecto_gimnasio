@extends('auth.tema.app')
@section('title', "Listado de Usuarios")

@section('contenido')
<h3>Listado de mantenimientos</h3>
<div class="col-sm-12">
    <a href="{{ route('maquina.create') }}" class="btn btn-outline-secondary">Crear Maquina</a>
    <a href="{{ route('maquina.index') }}" class="btn btn-outline-secondary">Listar Maquinas</a>
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
            <th>
                Acciones
            </th>
            <th>
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