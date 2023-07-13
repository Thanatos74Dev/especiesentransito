<?php $__env->startSection('title', 'Perfil'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-6">
        <br>
            <div class="card">
                <div class="card-header text-white bg-dark mb-3"><?php echo e(__('Edición de perfil')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    
    <form action="actualizar_usuario" method="post">
    <?php echo csrf_field(); ?>

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="input-group mb-3">
    <strong>Id: </strong>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
        </div>
        <input type="number" class="form-control" name="id" value="<?php echo e($d->id); ?>" disabled>
    </div>
    </div>

    <div class="input-group mb-3">
    <strong>Nombre de usuario: </strong>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        <input type="text" class="form-control" name="nombre" value="<?php echo e($d->name); ?>" autofocus required>
    </div>
    </div>

    <div class="input-group mb-3">
    <strong>Correo electrónico: </strong>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-at"></i></span>
        </div>
        <input type="email" class="form-control" name="correo" value="<?php echo e($d->email); ?>" required>
    </div>
    </div>


    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary float-right">
        <span class="fas fa-recycle"></span> Actualizar</button>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </form>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bioequipos\resources\views/perfil.blade.php ENDPATH**/ ?>