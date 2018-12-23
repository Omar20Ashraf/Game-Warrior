<?php $__env->startSection('content'); ?>
	
<h3>Edit Latest News Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<?php echo Form::open(['route'=>['latestnews.update',$products->id],'method'=>'Post','files'=>true]); ?>

		<?php echo e(Form::hidden('_method','PUT')); ?>


			<div class="form-group">
				<?php echo e(Form::label('description','Description')); ?>

				<?php echo e(Form::text('description',$products->description,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('tag_name','Tag Name')); ?>

				<?php echo e(Form::text('tag_name',$products->tag_name,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('tag_color','Tag Color')); ?>

				<?php echo e(Form::text('tag_color',$products->tag_color,array('class'=>'form-control'))); ?>

			</div>

			<?php echo e(Form::submit('Update',array('class'=>'btn btn-default'))); ?>	

		<?php echo Form::close(); ?>


	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>