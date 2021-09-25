<?php $__env->startSection('content'); ?>

<p class="fs-5 fw-bold text-start">Listado marcas</p>
<div class="row">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
        <a href="<?php echo e(route('brand.form')); ?>" class="btn btn-primary">Nueva Marca</a>
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
            <th></th>
        </tr>
    </thead>
   <tbody>
       <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
           <td><?php echo e($brand->name); ?></td>           
           <td>
               <a href="<?php echo e(route('brand.form',['id'=>$brand->id])); ?>" class="btn btn-warning">Editar</a>
               <a href="<?php echo e(route('brand.delete', ['id'=>$brand->id])); ?>" class="btn btn-danger">Borrar</a>
           </td>
       </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </tbody> 
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jualf\Desktop\inventory4-master\resources\views/brand/list.blade.php ENDPATH**/ ?>