@extends('adminlte::page')

@section('title', 'Fabricantes')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-6">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark mb-3">{{ __('Registro de fabricante') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
    <form action="registrar_fabricantes" method="post">
    @csrf
    
    <div class="input-group mb-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre completo" autofocus required>
    </div>
    </div>

    <div class="input-group mb-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-bookmark"></i></span>
        </div>
        <input type="text" class="form-control" name="url" placeholder="Url del sitio web" autofocus required>
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

        
        <div class="col-md-12">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark mb-3">{{ __('Listado de fabricantes') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        @csrf

        <table class="table table-striped table-hover" id="fabricantes" style='text-align: center; vertical-align: middle;'>
            <thead align="center">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Url</th>
                    <th colspan="2">Acciones</th>
                    <th>Última mod</th>
                </tr>
            </thead>
           
            <tbody>
            @foreach($data as $d)
                <tr>
                    <td style="vertical-align: middle;">{{ $d->fab_id }}</td>
                    <td style="vertical-align: middle;">{{ $d->fab_nombre }}</td>
                    <td align="justify" class="d-none d-sm-block">{{ $d->fab_url }}</td>
                    <td style="vertical-align: middle;">
                        <form action="" method="get">
                            <button name='editar' class="btn btn-block btn-primary" title="Editar">
                            <span class="fas fa-edit"></span>    
                            </button>
                        </form>
                    </td>
                    <td style="vertical-align: middle;">
                        <form action="" method="get">
                            <button type=submit class="btn btn-block btn-primary bg-red" title="Inhabilitar">
                            <span class="fas fa-thumbs-down"></span>
                            </button>
                        </form>
                    </td>
                    <td style="vertical-align: middle;">{{ $d->fab_fecha_registro }}</td>
                </tr>
            @endforeach
             </tbody>
        </table>
                    
                </div>
            </div>
        </div>

    </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $('#fabricantes').DataTable({
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
