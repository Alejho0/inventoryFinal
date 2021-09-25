<?php $__env->startSection('title',$product->id ? 'Actualizar Producto' : 'Nuevo producto'); ?>
<?php $__env->startSection('header',$product->id ? 'Actualizar Producto' : 'Nuevo producto'); ?>
<?php $__env->startSection('content'); ?>


<form action="<?php echo e(route('product.save')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($product->id); ?>"> 
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="<?php echo e(@old('name') ? @old('name'):$product->name); ?>">
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
        <label for="cost" class="col-sm-2 col-form-label">Cost</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="cost" value="<?php echo e(@old('cost') ? @old('cost'):$product->cost); ?>">
        </div>
        <?php $__errorArgs = ['cost'];
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
        <label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="price" value="<?php echo e(@old('price') ? @old('price'):$product->price); ?>">
        </div>
        <?php $__errorArgs = ['price'];
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
        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="quantity" value="<?php echo e(@old('quantity') ? @old('quantity'):$product->quantity); ?>">
        </div>
        <?php $__errorArgs = ['quantity'];
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
        <label for="brand" class="col-sm-2 col-form-label">Brand</label>
        <div class="col-sm-10">
          <select name="brand" class="form-select">
              <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value = "<?php echo e($brand->id); ?>"<?php echo e($product->brand_id == $brand->id ? "selected":""); ?>><?php echo e($brand->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <?php $__errorArgs = ['brand'];
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
        <label for="categori" class="col-sm-2 col-form-label">Categories</label>
        <div class="col-sm-10">
          <select name="categori" class="form-select">
              <?php $__currentLoopData = $categori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value = "<?php echo e($category->id); ?>"<?php echo e($product->category_id == $category->id ? "selected":""); ?>><?php echo e($category->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <?php $__errorArgs = ['categori'];
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
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="/products" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jualf\Desktop\inventory4-master\resources\views/product/form.blade.php ENDPATH**/ ?>