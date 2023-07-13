<?php $__env->startSection('title', 'Equipos'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-6">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark mb-3"><?php echo e(__('Registro de equipos biomédicos')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    
    <form action="registrar_equipo" method="post">
    <?php echo csrf_field(); ?>
    
    <h4 class='mb-3' style='text-align: center;'><?php echo e(__('Identificación del equipo')); ?></h4>
    Nombre del equipo: <br>
    <div class="input-group mb-3">
            <input type="text" name="nombre" class="form-control"
                   placeholder="Nombre" required autofocus>
    </div>

    Fabricante: <br>
    <div class="input-group mb-3">
       <select class="custom-select rounded-1" name="fabricante" required>
            <option value="0" selected>Seleccione un fabricante</option>
        <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($d1->fab_id); ?>"><?php echo e($d1->fab_id." - ".$d1->fab_nombre); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($d2->esp_id); ?>"><?php echo e($d2->esp_id." - ".$d2->esp_nombre); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="card-header mb-3"></div>

    <h4 class='mb-3' style='text-align: center;'><?php echo e(__('Descripción del equipo')); ?></h4>

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
            <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($d3->riesgo_id); ?>"><?php echo e($d3->riesgo_id." - ".$d3->riesgo_nombre); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = $data4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($d4->per_id); ?>"><?php echo e($d4->per_id." - ".$d4->per_nombre); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bioequipos\resources\views/equipos.blade.php ENDPATH**/ ?>