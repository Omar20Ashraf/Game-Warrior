<?php $__env->startSection('content'); ?>

	<!-- Page info section -->
	<?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		<section class="page-info-section set-bg" 
				 data-setbg="<?php echo e(url('images/contact/background',$item->image)); ?>">
			<div class="pi-content">
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-6 text-white">
							<h2><?php echo e($item->name); ?></h2>
							<p><?php echo e($item->description); ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
		<h3>No Data</h3>
	<?php endif; ?>	
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section spad contact-page">
		<div class="container">
			
			<div class="row">
				<?php $__empty_1 = true; $__currentLoopData = $personals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
					<div class="col-lg-4 mb-5 mb-lg-0">
						<h4 class="comment-title"><?php echo e($personal->name); ?></h4>
						<p><?php echo e($personal->description); ?></p>
						<div class="row">
							<div class="col-md-9">
								<ul class="contact-info-list">
									<li><div class="cf-left">Address</div><div class="cf-right"><?php echo e($personal->address); ?></div></li>
									<li><div class="cf-left">Phone</div><div class="cf-right"><?php echo e($personal->phone); ?></div></li>
									<li><div class="cf-left">E-mail</div><div class="cf-right"><?php echo e($personal->email); ?></div></li>
								</ul>
							</div>
						</div>
						<div class="social-links">
							<a href="<?php echo e($personal->facebook); ?>" target='_blank'>
								<i class="fa fa-facebook"></i>
							</a>
							<a href="<?php echo e($personal->twitter); ?>">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="<?php echo e($personal->github); ?>" target='_blank'>
								<i class="fa fa-github"></i>
							</a>
							<a href="<?php echo e($personal->linkedin); ?>">
								<i class="fa fa-linkedin"></i>
							</a>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
					<h3>No Data</h3>
				<?php endif; ?>	
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<h4 class="comment-title">Leave a Reply</h4>
						<?php echo Form::open(['route'=>'dosend',
										'method'=>'Post','class'=>'comment-form',
										'files'=>true]); ?>

							<div class="row">
								<div class="form-group col-md-6">
									<?php echo e(Form::text('name',null,array('class'=>'form-control','placeholder'=>'Name'))); ?>

								</div>

								<div class="form-group col-md-6">
									<?php echo e(Form::email('email',null,array('class'=>'form-control','placeholder'=>'E-mail'))); ?>

								</div>

								<div class="form-group col-lg-12">
									<?php echo e(Form::text('subject',null,array('class'=>'form-control','placeholder'=>'Subject'))); ?>


									<?php echo e(Form::textarea('body',null,array('class'=>'form-control','placeholder'=>'Message'))); ?>							

									<?php echo e(Form::submit('Send',array('class'=>'site-btn btn-sm'))); ?>									
								</div>	

							<?php echo Form::close(); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>