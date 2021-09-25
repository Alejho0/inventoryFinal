
<?php $__env->startSection('title',$areas->id ? 'Actualizar Categoria' : 'Nuevo Categoria'); ?>
<?php $__env->startSection('header',$areas->id ? 'Actualizar Categoria' : 'Nuevo Categoria'); ?>
<?php $__env->startSection('content'); ?>


<form action="<?php echo e(route('areas.save')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($areas->id); ?>"> 
    <div class="row mb-3">
        <label for="id" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="id" value="<?php echo e(@old('id') ? @old('id'):$areas->id); ?>">
        </div>
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-danger">
            <?php echo e($message); ?>

        </p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="<?php echo e(@old('name') ? @old('name'):$areas->name); ?>">
        </div>
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-danger">
            <?php echo e($message); ?>

        </p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <

    <div class="row mb-3">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="/areas" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jualf\Desktop\inventory4-master\resources\views/areas/form.blade.php ENDPATH**/ ?>