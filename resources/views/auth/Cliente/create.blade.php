@extends('auth.tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nuevo Cliente</h3>
    <div class="col-sm-12">
                <a href="{{ route('cliente.create') }}" class="btn btn-outline-secondary">Crear Cliente</a>
                <a href="{{ route('cliente.index') }}" class="btn btn-outline-secondary">Listar Clientes</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-outline-secondary">Volver</a>
            </div>
    <form action="{{ route('cliente.store') }}" method="POST">
        @csrf
        <br>
        <div class="row">
            <div class="col-sm-6">
                <label for="nombre_Clie" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Clie" class="form-control" id="nombre_Clie"><br><br>
            </div>
            
            <div class="col-sm-6">
                <label for="apellido_Clie" class="form-label">Apellido</label><br>
                <input type="text" name="apellido_Clie" class="form-control" id="apellido_Clie"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="fecha_Nac_Clie" class="form-label">Fecha Nacimiento:</label><br>
                <?php
                $fm = date("1900-01-01");
                $fma = date ("2008-12-31");
                ?>
                <input type="date" name="fecha_Nac_Clie" class="form-control" id="fecha_Nac_Clie" min="<?= $fm;?>" max="<?= $fma;?>"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="telefono_Clie" class="form-label">Telefono:</label><br>
                <input type="text" name="telefono_Clie" class="form-control" id="telefono_Clie"><br><br>
            </div>
           
            <div class="col-sm-6">
                <label for="direccion_Clie" class="form-label">Direccion:</label><br>
                <input type="text" name="direccion_Clie" class="form-control" id="direccion_Clie"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="estado_Clie" class="form-label">Estado</label><br>
                <select name="estado_Clie" id="estado_Clie" class="form-select">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select><br>
            </div>

            <div class="col-sm-6">
                <label for="direccion_Clie" class="form-label">Seleccione la valoracion fisica que corresponde:</label><br>
                <select name="id_valoracionFisica_FK" id="id_valoracionFisica_FK" class="form-select">
                        @foreach ($valofisica as $valofisica)
                    <option value="{{ $valofisica->id }}">
                        {{ $valofisica->id}}
                        @endforeach
                </select>
            </div>

            <div class="col-sm-6">
            <label for="identificacion_Usuario_FK" class="form-label">Seleccione el email que corresponde:</label><br>
            <select name="identificacion_Usuario_FK" id="identificacion_Usuario_FK" class="form-select">
                    @foreach ($usuario as $usuario)
                        @if($usuario->id_Role_FK === 2)
                        <option value="{{ $usuario->id }}">
                            {{ $usuario->email}}
                        </option>   
                        @endif
                    @endforeach
            </select>
            </div>

            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-outline-success">
                    Guardar
                </button>
            </div>

        </div>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection