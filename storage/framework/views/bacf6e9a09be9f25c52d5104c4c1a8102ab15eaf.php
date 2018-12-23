<?php $__env->startSection('content'); ?>
	
<h3>Add Feature Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<?php echo Form::open(['route'=>'tournament.store','method'=>'Post',
						'files'=>true]); ?>		

			<div class="form-group">
				<?php echo e(Form::label('title','Title')); ?>

				<?php echo e(Form::text('title',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('beggins','Tournament Beggins')); ?>

				<?php echo e(Form::date('beggins',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('ends','Tournament Ends')); ?>

				<?php echo e(Form::date('ends',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('participants','Participants')); ?>

				<?php echo e(Form::text('participants',null,array('class'=>'form-control'))); ?>

			</div>			

			<div class="form-group">
				<?php echo e(Form::label('author','Author')); ?>

				<?php echo e(Form::text('author',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('prizes','Prizes')); ?>

				<?php echo e(Form::text('prizes',null,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('image','Image')); ?>

				<?php echo e(Form::file('image',['class'=>'form-control'])); ?>

			</div>

			<?php echo e(Form::submit('Create',array('class'=>'btn btn-default'))); ?>	

		<?php echo Form::close(); ?>


	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>