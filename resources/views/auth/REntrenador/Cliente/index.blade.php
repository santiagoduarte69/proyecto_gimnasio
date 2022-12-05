@extends('auth.tema.appEntrenador')

@section('title', "Listado de Cliente")

@section('contenido')
<header>
    <style>
        #btn-modal {
            display: none;
        }

        .container-modal {
            width: 100%;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: rgba(144, 148, 150, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 100;
        }

        #btn-modal:checked~.container-modal {
            display: flex;
        }

        .content-modal {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 4px;
        }

        .content-modal h2 {
            margin-bottom: 15px;
        }

        .content-modal p {
            padding: 15px 0px;
            border-top: 1px solid #dbdbdb;
            border-bottom: 1px solid #dbdbdb;
        }

        .content-modal .btn-cerrar {
            width: 100%;
            margin-top: 15px;
            display: flex;
            justify-content: flex-end;
        }

        .content-modal .btn-cerrar label {
            padding: 7px 10px;
            background-color: #5488a3;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            transition: all 300ms ease;
        }

        .content-modal .btn-cerrar label:hover {
            background-color: #185E83;
        }

        .cerrar-modal {
            width: 100%;
            height: 100vh;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        @media screen and (max-width:800px) {
            .content-modal {
                width: 90%;
            }
        }
    </style>
</header>
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
                Valoracion Fisica
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
            <td style="background-color: yellow;">
                <div class="boton-modal">
                    <label for="btn-modal">
                        Ver valoracion fisica
                    </label>
                </div>
            </td>
        </tr>
        <input type="checkbox" id="btn-modal">
        <div class="container-modal">
            <div class="content-modal">
                <h2>Esta es la valoracion del cliente: {{$cliente->nombre_Clie }} {{$cliente->apellido_Clie}}</h2>
                <p>Peso: {{ $cliente->valoracion_fisica->peso}}</p>
                <p>Estatura: {{ $cliente->valoracion_fisica->estatura}}</p>
                <p>Descripcion Medidas: {{ $cliente->valoracion_fisica->descripcion_Medidas }}</p>
                <p>Ims: {{ $cliente->valoracion_fisica->imc}}</p>
                <div class="btn-cerrar">
                    <label for="btn-modal">Cerrar</label>
                </div>
            </div>
            <label for="btn-modal" class="cerrar-modal"></label>
        </div>
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