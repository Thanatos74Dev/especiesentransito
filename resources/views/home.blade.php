@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
<div class="container" style="position: relative;">
<div class="card-body">

<div class="row">
    <div class="col-lg-6 col-8">

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

        <div class="col-lg-6 col-8">

        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $data1 }}</h3>
                <p>Mensajeros registrados</p>
                </div>
                <div class="icon">
                <i class="fas fa-users"></i>
                </div>
                <a href="/mensajeros" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
</div>

<div class="row">
    <div class="col-lg-6 col-8">

        <div class="small-box bg-danger">
            <div class="inner">
                    <h3>{{ $data3 }}</h3>
                <p>Especies disponibles</p>
                </div>
                <div class="icon">
                <i class="fas fa-credit-card"></i>
                </div>
                <a href="/especies" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-6 col-8">

        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $data2 }}</h3>
                <p>Despachos pendientes</p>
                </div>
                <div class="icon">
                <i class="fas fa-truck"></i>
                </div>
                <a href="/despachos" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
</div>

</div>
     
</div>

@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

