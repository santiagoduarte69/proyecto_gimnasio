@extends('auth.tema.app')
@section('title', "Listado de Usuarios")

@section('contenido')
<h3>Listado de Usuarios</h3>
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
                Email
            </th>
            <th>
                Role
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
        @foreach ($usuario as $usuario)
        <tr>
            <td>
                {{ $usuario->id }}
            </td>
            <td>
                {{ $usuario->name }}
            </td>
            <td>
                {{ $usuario->email }}
            </td>
            <td>
                {{ $usuario->id_Role_FK() }}
            </td>
            <td>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $usuario->id }}">Eliminar</button>
            </td>
            <td>
                <a href="{{ route('usuario.edit', $usuario) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr>

        @endforeach
    </tbody>

    <div class="modal fade" id="modal-delete-{{ $usuario->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('usuario.destroy', $usuario) }}" method="post">
                @csrf
                @method('delete')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                    </div>
                    <div class="modal-body">
                        Deseas eliminar al registro por nombre {{$usuario->name}}
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> 

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@endsection