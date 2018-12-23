<?php $__env->startSection('content'); ?>


<head>
	<link rel="stylesheet" href="<?php echo e(asset('css/table.css')); ?>">
</head>
<h2>Contact us Items</h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>Id</th>
			<th >Name</th>
			<th >Description</th>
			<th >Address</th>
			<th >Phone</th>
			<th >E-mail</th>
			<th >Facebook Link</th>
			<th >Twitter Link</th>
			<th >Linkedin Link</th>
			<th >Github Link</th>
			<th >Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<tr>
				<td><?php echo e($item->id); ?></td>
				<td><?php echo e($item->name); ?></td>
				<td><?php echo e($item->description); ?></td>
				<td><?php echo e($item->address); ?></td>
				<td><?php echo e($item->phone); ?></td>
				<td><?php echo e($item->email); ?></td>
				<td><?php echo e($item->facebook); ?></td>
				<td><?php echo e($item->twitter); ?></td>
				<td><?php echo e($item->linkedin); ?></td>
				<td><?php echo e($item->github); ?></td>
				<td>
					<a href="<?php echo e(route('personalinfo.edit',$item->id)); ?>"
					   class="btn btn-default" style="margin-bottom: 15px;">Edit
					</a>
					
			        <form action="<?php echo e(route('personalinfo.destroy',$item->id)); ?>"method="POST">
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