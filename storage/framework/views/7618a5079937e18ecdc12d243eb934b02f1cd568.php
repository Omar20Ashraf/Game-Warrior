	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Latest News</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<?php $__currentLoopData = App\LatestNews::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="nt-item">
					<span class="<?php echo e($item->tag_color); ?>"><?php echo e($item->tag_name); ?></span>
					<?php echo e($item->description); ?>

				 </div>
				 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->

	