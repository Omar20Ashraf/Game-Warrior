
<!-- Hero section -->
<section class="hero-section">
	<div class="hero-slider owl-carousel">
		<?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<div class="hs-item set-bg" data-setbg=
				 "<?php echo e(url('images/heroes',$product->image)); ?>">
				<div class="hs-text">
					<div class="container">
						<h2><?php echo e($product->title); ?></h2>
						<p><?php echo e($product->par); ?></p>
						<a href="#" class="site-btn">Read More</a>
					</div>
				</div>
			</div>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<h3>No Data</h3>
		<?php endif; ?>		

	</div>
</section>
<!-- Hero section end -->

	