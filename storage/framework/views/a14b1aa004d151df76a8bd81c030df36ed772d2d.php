<?php $__env->startSection('content'); ?>


<head>
	<link rel="stylesheet" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<h2>Recent Review Items</h2>
<table class="table" id="customers">
	<thead>
		<tr>
			<th>Id</th>
			<th >Name</th>
			<th >Description</th>
			<th >Evalution</th>
			<th >Evalution Color</th>
			<th >Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $__empty_1 = true; $__currentLoopData = $recentreviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentreview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<tr>
				<td><?php echo e($recentreview->id); ?></td>	
				<td><?php echo e($recentreview->title); ?></td>
				<td><?php echo e($recentreview->par); ?></td>
				<td><?php echo e($recentreview->evalution); ?></td>
				<td><?php echo e($recentreview->evalution_color); ?></td>
				<td>
					<a href="<?php echo e(route('recentreview.edit',$recentreview->id)); ?>" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>	
					
			        <form action="<?php echo e(route('recentreview.destroy',$recentreview->id)); ?>"  method="POST">
			           	<?php echo e(csrf_field()); ?>

			            <?php echo e(method_field('DELETE')); ?>

			            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
			        </form>
		        </td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<h3>No Items has been added</h3>	
		<?php endif; ?>	

	</tbody>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>