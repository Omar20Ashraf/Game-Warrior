<?php $__env->startSection('content'); ?>

<h2>Blog Games Items</h2>
<ul>
	<?php $__empty_1 = true; $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		<li>Title: <?php echo e($game->title); ?></li>
		<li>Par: <?php echo e($game->par); ?></li>
		<li>Button: <?php echo e($game->button); ?></li>
		<li>Button-Color: <?php echo e($game->button_color); ?></li>

		
        <form action="<?php echo e(route('pageinfo.destroy',$game->id)); ?>"  method="POST">
           	<?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
        </form>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
		<h3>No Items has been added</h3>	
	<?php endif; ?>	

</ul>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>