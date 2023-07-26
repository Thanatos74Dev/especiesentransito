@extends('adminlte::page')

@section('title', 'Equipos')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-6">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark mb-3">{{ __('Registro de equipos biomédicos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
    <form action="registrar_equipo" method="post">
    @csrf
    
    <h4 class='mb-3' style='text-align: center;'>{{ __('Identificación del equipo') }}</h4>
    Nombre del equipo: <br>
    <div class="input-group mb-3">
            <input type="text" name="nombre" class="form-control"
                   placeholder="Nombre" required autofocus>
    </div>

    Fabricante: <br>
    <div class="input-group mb-3">
       <select class="custom-select rounded-1" name="fabricante" required>
            <option value="0" selected>Seleccione un fabricante</option>
        @foreach($data1 as $d1)
            <option value="{{ $d1->fab_id }}">{{ $d1->fab_id." - ".$d1->fab_nombre }}</option>
        @endforeach
        </select>
    </div>

    Referencia: <br>
    <div class="input-group mb-3">
            <input type="text" name="referencia" class="form-control"
                   placeholder="Referencia" required>
    </div>

    Número de serie: <br>
    <div class="input-group mb-3">
            <input type="text" name="serie" class="form-control"
                   placeholder="Nro de serie" required>
    </div>

    <div class="input-group mb-3">

        Propeidad del equipo: &nbsp;&nbsp;&nbsp;&nbsp;
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="propio" name="propiedad" value="1" checked=""> 
                <label class="form-check-label">Propio</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="alquilado" name="propiedad" value="2">
                <label class="form-check-label">Alquilado</label>
            </div>
        </div>
    
    </div>

    <div class="input-group mb-3">Activo Fijo: <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                <input type="checkbox">
                </span>
            </div>
            <input type="text" class="form-control">
        </div>
    </div>

    Especialidad: <br>
    <div class="input-group mb-3">
       <select class="custom-select rounded-1" name="especialidad" required>
            <option value="0" selected>Seleccione una especialidad</option>
            @foreach($data2 as $d2)
                <option value="{{ $d2->esp_id }}">{{ $d2->esp_id." - ".$d2->esp_nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="card-header mb-3"></div>

    <h4 class='mb-3' style='text-align: center;'>{{ __('Descripción del equipo') }}</h4>

    <div class="input-group mb-3">

        Tipo de equipo: &nbsp;&nbsp;&nbsp;&nbsp;
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="fijo" name="tipo" value="1" checked=""> 
                <label class="form-check-label">Fijo</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="movil" name="tipo" value="2">
                <label class="form-check-label">Móvil</label>
            </div>
        </div>

    </div>

       Nivel de riesgo: <br>
    <div class="input-group mb-3">
       <select class="custom-select rounded-1" name="riesgo" required>
            <option value="0" selected>Seleccione un nivel de riesgo</option>
            @foreach($data3 as $d3)
                <option value="{{ $d3->riesgo_id }}">{{ $d3->riesgo_id." - ".$d3->riesgo_nombre }}</option>
            @endforeach
        </select>
    </div>

    Nivel de complejidad: <br>
    <div class="input-group mb-3">
       <select class="custom-select rounded-1" name="complejidad" required>
            <option value="0" selected>Seleccione un nivel de complejidad</option>
            <option>Value 2</option>
            <option>Value 3</option>
        </select>
    </div>

    Periodicidad de los mantenimientos: <br>
    <div class="input-group mb-3">
       <select class="custom-select rounded-1" name="periodicidad" required>
            <option value="0" selected>Seleccione un nivel de periodicidad</option>
            @foreach($data4 as $d4)
                <option value="{{ $d4->per_id }}">{{ $d4->per_id." - ".$d4->per_nombre }}</option>
            @endforeach
        </select>
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
    </div>

    </div>
</div>
@endsection