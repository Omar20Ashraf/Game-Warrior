
<!-- Page info section -->
<?php $__empty_1 = true; $__currentLoopData = $firsts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $first): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	<section class="page-info-section set-bg" data-setbg=
			"<?php echo e(url('images/game/first',$first->image)); ?>">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2><?php echo e($first->title); ?></h2>
						<p><?php echo e($first->par); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	<h3>No Data</h3>
<?php endif; ?>	
<!-- Page info section -->