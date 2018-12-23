<?php $__env->startSection('content'); ?>
	
<h3>Add Latest News Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<?php echo Form::open(['route'=>'latestnews.store','method'=>'Post','files'=>true]); ?>


			<div class="form-group">
				<?php echo e(Form::label('description','Description')); ?>

				<?php echo e(Form::text('description',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('tag_name','Tag Name')); ?>

				<?php echo e(Form::text('tag_name',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('tag_color','Tag Color')); ?>

				<?php echo e(Form::text('tag_color',null,array('class'=>'form-control'))); ?>

			</div>

			<?php echo e(Form::submit('Create',array('class'=>'btn btn-default'))); ?>	

		<?php echo Form::close(); ?>


	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>