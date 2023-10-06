@extends('adminlte::page')

@section('title', 'Equipos')

@section('content')
<div class="container">
<br>
    <div class="row justify-content-center">

    <div class="col-md-8">
    <div class="card card-primary collapsed-card">
    <div class="card-header bg-dark">
    <h3 class="card-title">Registro de equipos biomédicos</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
    </button>
    </div>

    </div>

    <div class="card-body" style="display: none;">
    
    <form action="registrar_equipo" method="post">
    @csrf
    
    <h4 class='mb-3' style='text-align: center;'>{{ __('Identificación del equipo') }}</h4>

    <div class="row">
        <div class="col-sm-6">
            Nombre del equipo: <br>
            <div class="input-group mb-3">
                    <input type="text" name="nombre" class="form-control"
                        placeholder="Nombre" required autofocus>
            </div>
        <div class="form-group">
    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            Fabricante: <br>
            <div class="input-group mb-3">
            <select class="custom-select rounded-1" name="fabricante" required>
                    <option value="0" selected>Seleccione un fabricante</option>
                @foreach($data1 as $d1)
                    <option value="{{ $d1->fab_id }}">{{ $d1->fab_id." - ".$d1->fab_nombre }}</option>
                @endforeach
                </select>
            </div>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            Referencia: <br>
            <div class="input-group mb-3">
                    <input type="text" name="referencia" class="form-control"
                        placeholder="Referencia" required>
            </div>
        <div class="form-group">
    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            Número de serie: <br>
            <div class="input-group mb-3">
                    <input type="text" name="serie" class="form-control"
                        placeholder="Nro de serie" required>
            </div>
        </div>
    </div>
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

    <div class="row">
        <div class="col-sm-6">
            <div class="input-group mb-3">Activo Fijo: <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        <input type="checkbox">
                        </span>
                    </div>
                    <input type="text" class="form-control" name="activo">
                    </div>
                </div>
            <div class="form-group">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            Especialidad: <br>
            <div class="input-group mb-3">
            <select class="custom-select rounded-1" name="especialidad" required>
                    <option value="0" selected>Seleccione una especialidad</option>
                    @foreach($data2 as $d2)
                        <option value="{{ $d2->esp_id }}">{{ $d2->esp_id." - ".$d2->esp_nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    </div>
   

    
    <div class="card-header mb-3"></div>

    <h4 class='mb-3' style='text-align: center;'>{{ __('Descripción del equipo') }}</h4>

    <div class="row">
        <div class="col-sm-6">
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
        <div class="form-group">
    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            Nivel de riesgo: <br>
            <div class="input-group mb-3">
            <select class="custom-select rounded-1" name="riesgo" required>
                    <option value="0" selected>Seleccione un nivel de riesgo</option>
                    @foreach($data3 as $d3)
                        <option value="{{ $d3->riesgo_id }}">{{ $d3->riesgo_id." - ".$d3->riesgo_nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            Nivel de complejidad: <br>
            <div class="input-group mb-3">
            <select class="custom-select rounded-1" name="complejidad" required>
                    <option value="0" selected>Seleccione un nivel de complejidad</option>
                    @foreach($data5 as $d5)
                        <option value="{{ $d5->comp_id }}">{{ $d5->comp_id." - ".$d5->comp_nombre }}</option>
                    @endforeach
                </select>
            </div>
        <div class="form-group">
    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
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

    <!-- MODAL EDICIÓN DE EQUIPOS BIOMÉDICOS -->
    <form action="actualizar_equipo" method="post">
    @csrf

    <div class="modal fade edicion-modal-lg" id="edicion" tabindex="-1" role="dialog" aria-labelledby="estadoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header bg-dark">
            <h5 class="modal-title" id="estadoLabel">Edición de equipo biomédico</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
        <h4 class='mb-3' style='text-align: center;'>{{ __('Identificación del equipo') }}</h4>

        <div class="row">

            <div class="col-sm-4">
                Id del equipo: <br>
                <div class="input-group mb-3">
                        <input type="text" name="id" id="id" class="form-control" required readonly>
                </div>
            <div class="form-group">
            </div>
            </div>
            <div class="col-sm-4">
                Nombre del equipo: <br>
                <div class="input-group mb-3">
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
            <div class="form-group">
            </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                Fabricante: <br>
                <div class="input-group mb-3">
                    <input type="text" name="fabricante" id="fabricante" class="form-control" required>
                </div>
            </div>
    </div>
        </div>

    <div class="row">
   
        <div class="col-sm-4">
            Referencia: <br>
            <div class="input-group mb-3">
                    <input type="text" name="referencia" id="referencia" class="form-control" required>
            </div>
        <div class="form-group">
    </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            Número de serie: <br>
            <div class="input-group mb-3">
                    <input type="text" name="serie" id="serie" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            Propiedad: <br>
            <div class="input-group mb-3">
                    <input type="text" name="propiedad" id="propiedad" class="form-control" required>
            </div>
        </div>
    </div>

    </div>

    <div class="row">

        <div class="col-sm-6">
            <div class="input-group mb-3">Activo Fijo: <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        <input type="checkbox">
                        </span>
                    </div>
                    <input type="text" class="form-control" name="activo">
                    </div>
                </div>
            <div class="form-group">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            Especialidad: <br>
            <div class="input-group mb-3">
            <input type="text" name="especialidad1" id="especialidad1" class="form-control" required readonly>
            <select class="custom-select rounded-1" name="especialidad" required>
                    <option value="0" selected>Seleccione una nueva especialidad</option>
                    @foreach($data2 as $d2)
                        <option value="{{ $d2->esp_id }}">{{ $d2->esp_id." - ".$d2->esp_nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    </div>
   

    
    <div class="card-header mb-3"></div>

    <h4 class='mb-3' style='text-align: center;'>{{ __('Descripción del equipo') }}</h4>

    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            Tipo de equipo: <br>
            <div class="input-group mb-3">
                    <input type="text" name="tipo1" id="tipo1" class="form-control" required readonly>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            Nivel de riesgo: <br>
            <div class="input-group mb-3">
            <input type="text" name="riesgo1" id="riesgo1" class="form-control" required readonly>
            <select class="custom-select rounded-1" name="riesgo" required>
                    <option value="0" selected>Seleccione un nuevo nivel de riesgo</option>
                    @foreach($data3 as $d3)
                        <option value="{{ $d3->riesgo_id }}">{{ $d3->riesgo_id." - ".$d3->riesgo_nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            Nivel de complejidad: <br>
            <div class="input-group mb-3">
            <input type="text" name="complejidad1" id="complejidad1" class="form-control" required readonly>
            <select class="custom-select rounded-1" name="complejidad" required>
                    <option value="0" selected>Seleccione un nuevo nivel de complejidad</option>
                    @foreach($data5 as $d5)
                        <option value="{{ $d5->comp_id }}">{{ $d5->comp_id." - ".$d5->comp_nombre }}</option>
                    @endforeach
                </select>
            </div>
        <div class="form-group">
    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            Periodicidad de los mantenimientos: <br>
            <div class="input-group mb-3">
            <input type="text" name="periodicidad1" id="periodicidad1" class="form-control" required readonly>
            <select class="custom-select rounded-1" name="periodicidad" required>
                    <option value="0" selected>Seleccione un nivel de periodicidad</option>
                    @foreach($data4 as $d4)
                        <option value="{{ $d4->per_id }}">{{ $d4->per_id." - ".$d4->per_nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    </div> 
    </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
            <span class="fas fa-recycle"></span>
                {{ 'Actualizar' }}
            </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
        </div>
    </div>
    </div>
    </form>

    <!-- MODAL HABILITACIÓN DE EQUIPOS BIOMÉDICOS -->
    <form action="habilitacion_equipo" method="post">
    @csrf

    <div class="modal fade" id="habilitacion" tabindex="-1" role="dialog" aria-labelledby="estadoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-dark">
            <h5 class="modal-title" id="estadoLabel">Estado del equipo biomédico</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
       
        <div class="input-group mb-3">
                Id: 
                <div class="input-group">        
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="text" class="form-control" id="id2" name="id2" required readonly>
                </div>
                </div>

            <div class="input-group mb-3">
                Nombre habilitacion_equipo: 
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" id="nombre2" name="nombre2" placeholder="Nombre completo" autofocus required>
                </div>
                </div>

                <div class="input-group mb-3">
                    Estado habilitacion_equipo: 
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-eye"></i></span>
                    </div>
                    <input type="text" class="form-control" id="estado2" name="estado2" placeholder="Estado del habilitacion_equipo" required>
                </div>
                </div>
            </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary bg-green">
            <span class="fas fa-thumbs-up"></span>
                {{ 'Habilitar' }}
            </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
        </div>
    </div>
    </div>
    </form>

    <!-- MODAL INHABILITACIÓN DE EQUIPOS BIOMÉDICOS -->
    <form action="inhabilitacion_equipo" method="post">
    @csrf

    <div class="modal fade" id="inhabilitacion" tabindex="-1" role="dialog" aria-labelledby="estadoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-dark">
            <h5 class="modal-title" id="estadoLabel">Estado del equipo biomédico</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
       
        <div class="input-group mb-3">
            Id: 
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" id="id3" name="id3" required readonly>
                </div>
                </div>

            <div class="input-group mb-3">
                Nombre habilitacion_equipo: 
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" id="nombre3" name="nombre3" placeholder="Nombre completo" autofocus required>
                </div>
                </div>

                <div class="input-group mb-3">
                    Estado habilitacion_equipo: 
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-eye"></i></span>
                    </div>
                    <input type="text" class="form-control" id="estado3" name="estado3" placeholder="Estado del habilitacion_equipo" required>
                </div>
                </div>
            </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary bg-red">
            <span class="fas fa-thumbs-down"></span>
                {{ 'Inhabilitar' }}
            </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
        </div>
    </div>
    </div>
    </form>

    <div class="col-md-12">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark mb-3">{{ __('Listado de equipos biomédicos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        @csrf

        <table class="table table-striped table-hover" id="equipos" style='text-align: center; vertical-align: middle;'>
            <thead align="center">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col" class="d-none d-sm-block">Fabricante</th>
                <th scope="col" colspan='3'>Acciones</th>
                <th scope="col">Última mod</th>
                </tr>
            </thead>
           
            <tbody>
            @foreach($data as $d)
                <tr>
                    <td>{{ $d->equ_id }}</td>
                    <td>{{ $d->equ_nombre }}</td>
                    <td class="d-none d-sm-block">{{ $d->equ_fabricante }}</td>
                    <td>
                        <!-- Ciclos foreach para recorrer los arreglos con los parámetros de las tablas y mostrar el nombre de dicho parámetro -->
                        <?php
                            $nombre_riesgo_actual = "";
                            
                        foreach ($data3 as $riesgos)
                            if($riesgos->riesgo_id === $d->equ_riesgo){
                                $nombre_riesgo_actual = $riesgos->riesgo_nombre;
                            }

                            $nombre_complejidad_actual = "";
                            
                        foreach ($data5 as $complejidades)
                            if($complejidades->comp_id === $d->equ_complejidad){
                                $nombre_complejidad_actual = $complejidades->comp_nombre;
                            }

                            $nombre_periodicidad_actual = "";
                            
                        foreach ($data4 as $periodicidades)
                            if($periodicidades->per_id === $d->equ_periodicidad){
                                $nombre_periodicidad_actual = $periodicidades->per_nombre;
                            }

                            $nombre_fabricante_actual = "";
                            
                        foreach ($data1 as $fabricantes)
                            if($fabricantes->fab_id === $d->equ_fabricante){
                                $nombre_fabricante_actual = $fabricantes->fab_nombre;
                            }

                            $nombre_especialidad_actual = "";
                            
                        foreach ($data2 as $especialdiades)
                            if($especialdiades->esp_id === $d->equ_especialidad){
                                $nombre_especialidad_actual = $especialdiades->esp_nombre;
                            }
                        
                            $nombre_propiedad_actual = "";

                            if($d->equ_propiedad === 1){
                                $nombre_propiedad_actual = "Propio";
                            } else {
                                $nombre_propiedad_actual = "Alquilado";
                            }

                            $nombre_tipo_actual = "";

                            if($d->equ_tipo  === 1){
                                $nombre_tipo_actual = "Fijo";
                            } else {
                                $nombre_tipo_actual = "Móvil";
                            }


                        ?>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edicion" title="Editar" id="editar"
                        data-id="{{ $d->equ_id }}" data-nombre="{{ $d->equ_nombre }}" data-fabricante="{{ $nombre_fabricante_actual }}"
                        data-referencia="{{ $d->equ_referencia }}" data-serie="{{ $d->equ_serie }}" data-propiedad="{{ $nombre_propiedad_actual }}" data-especialidad1="{{ $nombre_especialidad_actual }}"
                        data-tipo1="{{ $nombre_tipo_actual }}" data-riesgo1="{{ $nombre_riesgo_actual }}" data-complejidad1="{{ $nombre_complejidad_actual }}" data-periodicidad1="{{ $nombre_periodicidad_actual }}">
                            <span class="fas fa-edit"></span>
                        </button>
                    </td>
                    @if ($d->equ_estado === 1)
                    <td>
                        <button type="button" class="btn btn-primary bg-red" data-toggle="modal" data-target="#inhabilitacion" title="Inhabilitar" id="inhabilitar"
                        data-id3="{{ $d->equ_id }}" data-nombre3="{{ $d->equ_nombre }}" data-estado3="El equipo biomédico se encuentra habilitado">
                            <span class="fas fa-thumbs-down"></span>
                        </button>
                    </td>
                    @else
                    <td>
                        <button type="button" class="btn btn-primary bg-green" data-toggle="modal" data-target="#habilitacion" title="Habilitar" id="habilitar"
                        data-id2="{{ $d->equ_id }}" data-nombre2="{{ $d->equ_nombre }}" data-estado2="El equipo biomédico se encuentra inhabilitado">
                            <span class="fas fa-thumbs-up"></span>
                        </button>
                    </td>
                    @endif

                    <td>
                        <button type="button" class="btn btn-primary bg-green" data-toggle="modal" data-target="#detallado" title="Detallado" id="detallado"
                        data-id2="{{ $d->equ_id }}">
                            <span class="fas fa-eye"></span>
                        </button>
                    </td>
                   
                    <td >{{ $d->equ_fecha_registro }}</td>
                </tr>
            @endforeach
             </tbody>
        </table>
                    
                </div>
            </div>
        </div>

@endsection

@section('js')
    <script>
        $('#equipos').DataTable({
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

        $(document).on("click", "#editar", function() {
            var id = $(this).data('id');
            var nombre = $(this).data('nombre');
            var fabricante = $(this).data('fabricante');
            var referencia = $(this).data('referencia');
            var serie = $(this).data('serie');
            var especialidad1 = $(this).data('especialidad1');
            var propiedad = $(this).data('propiedad');
            var tipo1 = $(this).data('tipo1');
            var riesgo1 = $(this).data('riesgo1');
            var complejidad1 = $(this).data('complejidad1');
            var periodicidad1 = $(this).data('periodicidad1');

            $("#id").val(id);
            $("#nombre").val(nombre);
            $("#fabricante").val(fabricante);
            $("#referencia").val(referencia);
            $("#serie").val(serie);
            $("#especialidad1").val(especialidad1);
            $("#propiedad").val(propiedad);
            $("#tipo1").val(tipo1);
            $("#riesgo1").val(riesgo1);
            $("#complejidad1").val(complejidad1);
            $("#periodicidad1").val(periodicidad1);
        });

        $(document).on("click", "#habilitar", function() {
            var id2 = $(this).data('id2');
            var nombre2 = $(this).data('nombre2');
            var estado2 = $(this).data('estado2');

            $("#id2").val(id2);
            $("#nombre2").val(nombre2);
            $("#estado2").val(estado2);
        });

        $(document).on("click", "#inhabilitar", function() {
            var id3 = $(this).data('id3');
            var nombre3 = $(this).data('nombre3');
            var estado3 = $(this).data('estado3');

            $("#id3").val(id3);
            $("#nombre3").val(nombre3);
            $("#estado3").val(estado3);
        });
    </script>
@endsection