<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="card-body">

<div class="row">
    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
            <div class="inner">
                    <h3><?php echo e($data); ?></h3>
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
                <h3><?php echo e($data1); ?></h3>
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
                <h3><?php echo e($data2); ?></h3>
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
                <div class="card-header text-white bg-dark mb-3"><?php echo e(__('Gráfico de mantenimientos ejecutados')); ?></div>
            <canvas id="grafico_mantenimiento" style="padding: 2%;"></canvas>
        </div>
    </div>

    <div class="col-xs-12 col-lg-6">
    <div class="card">
                <div class="card-header text-white bg-dark mb-3"><?php echo e(__('Listado de mantenimientos próximos a vencer')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

        <?php echo csrf_field(); ?>

        <table class="table table-striped table-hover" id="fabricantes" style='text-align: center; vertical-align: middle;'>
            <thead align="center">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">última mod</th>
                </tr>
            </thead>
           
            <tbody>
            <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td style="vertical-align: middle;"><?php echo e($d3->fab_id); ?></td>
                    <td style="vertical-align: middle;"><?php echo e($d3->fab_nombre); ?></td>
                    <td style="vertical-align: middle;"><?php echo e($d3->fab_fecha_registro); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </tbody>
        </table>
                    
                </div>
            </div>
            </div>

</div>
     
</div>

<script>

  const ctx = document.getElementById('grafico_mantenimiento');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: 'Mantenimientos',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

    <link rel="stylesheet" href="/css/admin_custom.css">

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bioequipos\resources\views/home.blade.php ENDPATH**/ ?>