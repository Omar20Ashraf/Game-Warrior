<?php $__env->startSection('content'); ?>
<head>
	<link rel="stylesheet" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<h2>Tournaments Items</h2>
<table class="table" id="customers">
	<thead>
		<tr>
			<th>Id</th>
			<th >Name</th>
			<th >Beggins</th>
			<th >Ends</th>
			<th >Participants</th>
			<th>Author</th>
			<th>Prizes</th>
			<th >Action</th>

		</tr>
	</thead>
	<tbody>
		<?php $__empty_1 = true; $__currentLoopData = $tournaments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<tr>
				<td><?php echo e($tournament->id); ?></td>
				<td><?php echo e($tournament->title); ?></td>
				<td><?php echo e($tournament->beggins); ?></td>
				<td><?php echo e($tournament->ends); ?></td>
				<td><?php echo e($tournament->participants); ?></td>
				<td><?php echo e($tournament->author); ?></td>
				<td><?php echo e($tournament->prizes); ?></td>

				<td>
					<a href="<?php echo e(route('tournament.edit',$tournament->id)); ?>" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>				
					
			        <form action="<?php echo e(route('tournament.destroy',
			        	  $tournament->id)); ?>"  method="POST">
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