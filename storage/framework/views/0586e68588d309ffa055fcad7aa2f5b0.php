<?php $__env->startSection('title', 'Tipos mantenimientos'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-6">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark mb-3"><?php echo e(__('Registro de tipo de mantenimiento')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    
    <form action="registrar_tipos_mantenimientos" method="post">
    <?php echo csrf_field(); ?>
    
    <div class="input-group mb-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" autofocus required>
    </div>
    </div>

    <div class="input-group mb-3">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-comment"></i></span>
        </div>
        <textarea class="form-control" name="descripcion" cols="20" rows="3" placeholder="Descripción del mantenimiento" required></textarea>
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
                <div class="card-header text-white bg-dark mb-3"><?php echo e(__('Listado de tipos de mantenimientos')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

        <?php echo csrf_field(); ?>

        <table class="table table-striped table-hover" id="tipo_mantenimientos" style='text-align: center; vertical-align: middle;'>
            <thead align="center">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col" class="d-none d-sm-block">Descripción</th>
                <th scope="col" colspan='2'>Acciones</th>
                <th scope="col" class="d-none d-md-block">Última mod</th>
                </tr>
            </thead>
           
            <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td style="vertical-align: middle;"><?php echo e($d->tipo_man_id); ?></td>
                    <td style="vertical-align: middle;"><?php echo e($d->tipo_man_nombre); ?></td>
                    <td align="justify" class="d-none d-sm-block"><?php echo e($d->tipo_man_descripcion); ?></td>
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
                    <td style="vertical-align: middle;" class="d-none d-md-block"><?php echo e($d->tipo_man_fecha_registro); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </tbody>
        </table>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script>
        $('#tipo_mantenimientos').DataTable({
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bioequipos\resources\views/tipo_mantenimientos.blade.php ENDPATH**/ ?>