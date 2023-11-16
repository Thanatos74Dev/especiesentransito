<?php $__env->startSection('title', 'Despachos'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-6">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark mb-3"><?php echo e(__('Registro de despacho')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    
    <form action="registrar_despacho" method="post">
    <?php echo csrf_field(); ?>
    
    <div class="col-sm-12">
        <div class="form-group">
            Especie: <br>
            <div class="input-group mb-3">
            <select class="custom-select rounded-1" name="placa" required>
                    <option value="0" selected>Seleccione una especie</option>
                <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($d3->esp_id); ?>"><?php echo e($d3->esp_id." - ".$d3->esp_placa); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            Punto de atención: <br>
            <div class="input-group mb-3">
            <select class="custom-select rounded-1" name="punto" required>
                    <option value="0" selected>Seleccione un punto de atención</option>
                <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($d1->pun_id); ?>"><?php echo e($d1->pun_id." - ".$d1->pun_nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            Mensajero: <br>
            <div class="input-group mb-3">
            <select class="custom-select rounded-1" name="mensajero" required>
                    <option value="0" selected>Seleccione un mensajero</option>
                <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($d2->men_id); ?>"><?php echo e($d2->men_id." - ".$d2->men_nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
    Fecha de entrega: <br>
    <div class="input-group">
        
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-clock"></i></span>
        </div>
        <input type="date" class="form-control" name="entrega" placeholder="Fecha de entrega" required>
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


    <!-- MODAL EDICIÓN DE DESPACHO -->
    <form action="actualizar_despacho" method="post">
    <?php echo csrf_field(); ?>

    <div class="modal fade" id="edicion" tabindex="-1" role="dialog" aria-labelledby="estadoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-dark">
            <h5 class="modal-title" id="estadoLabel">Edición de despacho</h5>
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
                    <input type="text" class="form-control" id="id" name="id" required readonly>
                </div>
                </div>

            <div class="input-group mb-3">
                Placa: 
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                    </div>
                    <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa" autofocus required>
                </div>
                </div>

                <div class="input-group mb-3">
                Punto de atención: 
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map"></i></span>
                    </div>
                    <input type="text" class="form-control" id="punto" name="punto" placeholder="Punto de atención" required>
                </div>
                </div>

                <div class="input-group mb-3">
                Mensajero: 
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-users"></i></span>
                    </div>
                    <input type="text" class="form-control" id="mensajero" name="mensajero" placeholder="Mensajero" required>
                </div>
                </div>

                <div class="input-group mb-3">
                Fecha de entrega: 
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control" id="entrega" name="entrega" placeholder="Fecha de entrega" required>
                </div>
                </div>
            </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
            <span class="fas fa-recycle"></span>
                <?php echo e('Actualizar'); ?>

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
                <div class="card-header text-white bg-dark mb-3"><?php echo e(__('Listado de despachos')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

        <?php echo csrf_field(); ?>

        <table class="table table-striped table-hover" id="despachos" style='text-align: center; vertical-align: middle;'>
            <thead align="center">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Placa</th>
                <th scope="col">Punto</th>
                <th scope="col">Mensajero</th>
                <th scope="col">Fecha entrega</th>
                <th scope="col" colspan='2'>Acciones</th>
                <th scope="col">Última mod</th>
                </tr>
            </thead>
           
            <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($d->desp_id); ?></td>
                    <td><?php echo e($d->esp_placa); ?></td>
                    <td><?php echo e($d->pun_nombre); ?></td>
                    <td><?php echo e($d->men_nombre); ?></td>
                    <td><?php echo e($d->desp_fecha_entrega); ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edicion" title="Editar" id="editar"
                        data-id="<?php echo e($d->desp_id); ?>" data-placa="<?php echo e($d->esp_placa); ?>" data-punto="<?php echo e($d->pun_nombre); ?>" data-mensajero="<?php echo e($d->men_nombre); ?>" data-entrega="<?php echo e($d->desp_fecha_entrega); ?>">
                            <span class="fas fa-edit"></span>
                        </button>
                    </td>
                    <?php if($d->desp_estado === 1): ?>
                    <td>
                        <button type="button" class="btn btn-primary bg-red" data-toggle="modal" data-target="#inhabilitacion" title="Inhabilitar" id="inhabilitar"
                        data-id3="<?php echo e($d->desp_id); ?>" data-nombre3="<?php echo e($d->desp_placa); ?>" data-estado3="El despacho se encuentra habilitado">
                            <span class="fas fa-thumbs-down"></span>
                        </button>
                    </td>
                    <?php else: ?>
                    <td>
                        <button type="button" class="btn btn-primary bg-green" data-toggle="modal" data-target="#habilitacion" title="Habilitar" id="habilitar"
                        data-id2="<?php echo e($d->desp_id); ?>" data-nombre2="<?php echo e($d->desp_placa); ?>" data-estado2="El despacho se encuentra inhabilitado">
                            <span class="fas fa-thumbs-up"></span>
                        </button>
                    </td>
                    <?php endif; ?>
                   
                    <td ><?php echo e($d->desp_fecha_registro); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </tbody>
        </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

    <script>
        $('#despachos').DataTable({
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
            var placa = $(this).data('placa');
            var punto = $(this).data('punto');
            var mensajero = $(this).data('mensajero');
            var entrega = $(this).data('entrega');

            $("#id").val(id);
            $("#placa").val(placa);
            $("#punto").val(punto);
            $("#mensajero").val(mensajero);
            $("#entrega").val(entrega);
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\especiesentransito\resources\views/despachos.blade.php ENDPATH**/ ?>