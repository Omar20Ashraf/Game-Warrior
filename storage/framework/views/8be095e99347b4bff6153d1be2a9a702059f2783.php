<?php $__env->startSection('content'); ?>
	
<h3>Edit Recent Review Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<?php echo Form::open(['route'=>['recentreview.update',$products->id],'method'=>'Post','files'=>true]); ?>

		<?php echo e(Form::hidden('_method','PUT')); ?>


			<div class="form-group">
				<?php echo e(Form::label('title','Title')); ?>

				<?php echo e(Form::text('title',$products->title,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('par','Par')); ?>

				<?php echo e(Form::text('par',$products->par,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('evalution','Evalution')); ?>

				<?php echo e(Form::text('evalution',$products->evalution,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('evalution_color','Evalution Color')); ?>

				<?php echo e(Form::text('evalution_color',$products->evalution_color,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('image','Image')); ?>

				<?php echo e(Form::file('image',['class'=>'form-control'])); ?>

			</div>

			<?php echo e(Form::submit('Update',array('class'=>'btn btn-default'))); ?>	

		<?php echo Form::close(); ?>


	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>