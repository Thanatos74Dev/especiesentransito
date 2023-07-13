@extends('adminlte::page')

@section('title', 'Perfil empresarial')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-6">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark mb-3">{{ __('Registro de empresa') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
    <form action="registrar_empresas" method="post">
    @csrf
    
    <div class="input-group mb-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-building"></i></span>
        </div>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" autofocus required>
    </div>
    </div>

    <div class="input-group mb-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-at"></i></span>
        </div>
        <input type="email" class="form-control" name="correo" placeholder="Correo electrónico" required>
    </div>
    </div>

    <div class="input-group mb-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
        <input type="number" class="form-control" name="telefono" placeholder="Número de contacto" required>
    </div>
    </div>

    <div class="input-group mb-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-home"></i></span>
        </div>
        <input type="text" class="form-control" name="direccion" placeholder="Dirección" required>
    </div>
    </div>

    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary float-right">
        <span class="fas fa-plus"></span> Registrar</button>
    </div>

    </form>
                              
            </div>
        </div>
    </div>

        <div class="col-md-12">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark mb-3">{{ __('Listado de empresas') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        @csrf

        <table class="table table-striped" id="usuarios" style='text-align: center; vertical-align: middle;'>

        <thead>
            <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th colspan="2">Acciones</th>
            <th>Última mod</th></tr>
        </thead>

        <tbody>
        @foreach($data as $d)
        <tr class="odd">
            <td class="dtr-control sorting_1" tabindex="0">{{ $d->emp_id }}</td>
            <td class="dtr-control sorting_1" tabindex="0">{{ $d->emp_nombre }}</td>
            <td class="dtr-control sorting_1" tabindex="0">{{ $d->emp_correo }}</td>
            <td class="dtr-control sorting_1" tabindex="0">{{ $d->emp_telefono }}</td>
            <td class="dtr-control sorting_1" tabindex="0">{{ $d->emp_direccion }}</td>
            <td class="dtr-control sorting_1" tabindex="0">
                        <form action="" method="get">
                            <button name='editar' class="btn btn-block btn-primary" title="Editar">
                            <span class="fas fa-edit"></span>    
                            </button>
                        </form>
            </td>
            <td class="dtr-control sorting_1" tabindex="0">
                        <form action="" method="get">
                            <button type=submit class="btn btn-block btn-primary bg-red" title="Inhabilitar">
                            <span class="fas fa-thumbs-down"></span>
                            </button>
                        </form>
            </td>
            <td>{{ $d->emp_fecha_registro }}</td>
            
        </tr>
        @endforeach

        </tbody>

        </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $('#usuarios').DataTable({
            responsive: true,
            autoWidth: false,

        "language": {
            "lengthMenu": "Mostrar _MENU_ registros de página",
            "zeroRecords": "No se han encontrado registros",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No se han encontrado registros",
            "infoFiltered": "(Filtrando de _MAX_ total de registros)",
            "search": "Busqueda: ",
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
        });  
    </script>
@endsection

