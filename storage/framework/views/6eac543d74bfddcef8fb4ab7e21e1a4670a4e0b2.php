
<!-- Feature section -->
<section class="feature-section spad">
	<div class="container">
		<div class="row">
			<?php $__empty_1 = true; $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg=
						"<?php echo e(url('images/features',$feature->image)); ?>">
						<span class="cata <?php echo e($feature->button_color); ?>">
							<?php echo e($feature->button); ?>

						</span>
						<div class="fi-content text-white">
							<h5>
								<a href="/index/feature/<?php echo e($feature->id); ?>">
								<?php echo e($feature->title); ?>

								</a>
							</h5>
							<p><?php echo e($feature->par); ?> </p>
							<p class="fi-comment">
								<?php echo e($feature->featureComment->count()); ?> Comment
							</p>
						</div>
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				<h3>No Data</h3>
			<?php endif; ?>
		</div>
	</div>
</section>
	<!-- Feature section end -->