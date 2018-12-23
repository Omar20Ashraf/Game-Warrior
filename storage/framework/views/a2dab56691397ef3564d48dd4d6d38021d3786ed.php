<?php $__env->startSection('content'); ?>
	
<h3>Add Contact us Background Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<?php echo Form::open(['route'=>'personalinfo.store','method'=>'Post',
						'files'=>true]); ?>


			<div class="form-group">
				<?php echo e(Form::label('name','Name')); ?>

				<?php echo e(Form::text('name',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('description','Description')); ?>

				<?php echo e(Form::text('description',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('address','Address')); ?>

				<?php echo e(Form::text('address',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('phone','Phone')); ?>

				<?php echo e(Form::text('phone',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('email','E-mail')); ?>

				<?php echo e(Form::text('email',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('facebook','Facebook Link')); ?>

				<?php echo e(Form::text('facebook',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('twitter','Twitter Link')); ?>

				<?php echo e(Form::text('twitter',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('linkedin','Linkedin Link')); ?>

				<?php echo e(Form::text('linkedin',null,array('class'=>'form-control'))); ?>

			</div>			

			<div class="form-group">
				<?php echo e(Form::label('github','Github Link')); ?>

				<?php echo e(Form::text('github',null,array('class'=>'form-control'))); ?>

			</div>

			<?php echo e(Form::submit('Create',array('class'=>'btn btn-default'))); ?>	

		<?php echo Form::close(); ?>


	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>