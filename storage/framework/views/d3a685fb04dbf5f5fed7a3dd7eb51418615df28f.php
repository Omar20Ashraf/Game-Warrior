<?php $__env->startSection('content'); ?>
	
<h3>Edit Tournaments Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<?php echo Form::open(['route'=>['tournament.update',$products->id],
						'method'=>'Post','files'=>true]); ?>		
			<?php echo e(Form::hidden('_method','PUT')); ?>


			<div class="form-group">
				<?php echo e(Form::label('title','Title')); ?>

				<?php echo e(Form::text('title',$products->title,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('beggins','Tournament Beggins')); ?>

				<?php echo e(Form::date('beggins',$products->beggins,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('ends','Tournament Ends')); ?>

				<?php echo e(Form::date('ends',$products->ends,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('participants','Participants')); ?>

				<?php echo e(Form::text('participants',$products->participants,array('class'=>'form-control'))); ?>

			</div>			

			<div class="form-group">
				<?php echo e(Form::label('author','Author')); ?>

				<?php echo e(Form::text('author',$products->author,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('prizes','Prizes')); ?>

				<?php echo e(Form::text('prizes',$products->prizes,array('class'=>'form-control'))); ?>

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