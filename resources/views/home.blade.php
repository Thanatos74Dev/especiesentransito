@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')

<div class="card-body">

<div class="row">
    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
            <div class="inner">
                    <h3>{{ $data }}</h3>
                <p>Usuarios registrados</p>
                </div>
                <div class="icon">
                <i class="fas fa-user-circle"></i>
                </div>
                <a href="/usuarios" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $data1 }}</h3>
                <p>Equipos biomédicos</p>
                </div>
                <div class="icon">
                <i class="fas fa-medkit"></i>
                </div>
                <a href="/equipos" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $data2 }}</h3>
                <p>Proveedores</p>
                </div>
                <div class="icon">
                <i class="fas fa-users"></i>
                </div>
                <a href="/proveedores" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">
            <div class="inner">
                <h3>65</h3>
                <p>Mantenimientos pendientes</p>
                </div>
                <div class="icon">
                <i class="fas fa-briefcase"></i>
            </div>
            <a href="/mantenimientos" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
        </div>

    </div>

</div>

<div class="row">
    <div class="col-xs-12 col-lg-6">

    <div class="card">
                <div class="card-header text-white bg-dark mb-3">{{ __('Gráfico de mantenimientos ejecutados') }}</div>
            <canvas id="grafico_mantenimiento" style="padding: 2%;"></canvas>
        </div>
    </div>

    <div class="col-xs-12 col-lg-6">
    <div class="card">
                <div class="card-header text-white bg-dark mb-3">{{ __('Listado de mantenimientos próximos a vencer') }}</div>

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
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">última mod</th>
                </tr>
            </thead>
           
            <tbody>
            @foreach($data3 as $d3)
                <tr>
                    <td style="vertical-align: middle;">{{ $d3->fab_id }}</td>
                    <td style="vertical-align: middle;">{{ $d3->fab_nombre }}</td>
                    <td style="vertical-align: middle;">{{ $d3->fab_fecha_registro }}</td>
                </tr>
            @endforeach
             </tbody>
        </table>
                    
                </div>
            </div>
            </div>

</div>
     
</div>

@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

