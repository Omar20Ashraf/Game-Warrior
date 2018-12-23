<?php $__env->startSection('content'); ?>
	
<h3>Edit Recent Game Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<?php echo Form::open(['route'=>['recentgame.update',$products->id],
						'method'=>'Post','files'=>true]); ?>		
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
				<?php echo e(Form::label('image_button','Image_Button')); ?>

				<?php echo e(Form::text('image_button',$products->image_button,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('image_button_class','Image-Button-Color')); ?>

				<?php echo e(Form::text('image_button_class',
								$products->image_button_class,array('class'=>'form-control'))); ?>

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