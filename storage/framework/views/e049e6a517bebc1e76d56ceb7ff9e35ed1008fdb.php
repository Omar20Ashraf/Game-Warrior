	
	<?php $__empty_1 = true; $__currentLoopData = $recentreviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentreview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		<div class="col-lg-3 col-md-6">
			<div class="review-item">
				<div class="review-cover set-bg" data-setbg=
				"<?php echo e(url('images/recentreview',$recentreview->image)); ?>">
					<div class="score <?php echo e($recentreview->evalution_color); ?>">
						<?php echo e($recentreview->evalution); ?>

					</div>
				</div>
				<div class="review-text">
					<a href="index/recentreview/<?php echo e($recentreview->id); ?>">
						<h5><?php echo e($recentreview->title); ?></h5>
					</a>	
					<p><?php echo e($recentreview->par); ?></p>
				</div>
			</div>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
		<h3>No Data</h3>
	<?php endif; ?>	