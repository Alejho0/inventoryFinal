<?php $__env->startSection('content'); ?>

<p class="fs-5 fw-bold text-start">Listado productos</p>

<div class="row">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
        <a href="<?php echo e(route('product.form')); ?>" class="btn btn-primary">Nuevo Producto</a>
    </div>
</div>
<?php if(Session::has('message')): ?>
<p class="alert alert-success">
    <?php echo e(Session::get('message')); ?>

</p>
<?php endif; ?>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Cost</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Brand</th>
            <th>Categories</th>
            <th></th>
        </tr>
    </thead>
   <tbody>
       <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
           <td><?php echo e($product->name); ?></td>
           <td><?php echo e($product->cost); ?></td>
           <td><?php echo e($product->price); ?></td>
           <td><?php echo e($product->quantity); ?></td>
           <td><?php echo e($product->brand->name); ?></td>
           <td><?php echo e($product->categori->name); ?></td>
           <td>
               <a href="<?php echo e(route('product.form',['id'=>$product->id])); ?>" class="btn btn-warning">Editar</a>
               <a href="<?php echo e(route('product.delete', ['id'=>$product->id])); ?>" class="btn btn-danger">Borrar</a>
           </td>
       </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </tbody> 
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jualf\Desktop\inventory4-master\resources\views/product/list.blade.php ENDPATH**/ ?>