
<!-- Recent game section  -->
<section class="recent-game-section spad set-bg" data-setbg="img/recent-game-bg.png">
	<div class="container">
		<div class="section-title">
			<div class="cata new">new</div>
			<h2>Recent Games</h2>
		</div>
		<div class="row">
			<?php $__empty_1 = true; $__currentLoopData = $recentgames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentgame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg=
							 "<?php echo e(url('images/recentgame',$recentgame->image)); ?>">

							<div class="cata <?php echo e($recentgame->image_button_class); ?>">
								<?php echo e($recentgame->image_button); ?>

							</div>
						</div>
						<div class="rgi-content">
							<a href="index/recentgame/<?php echo e($recentgame->id); ?>">
								<h5><?php echo e($recentgame->title); ?></h5>
							</a>

							<p><?php echo e($recentgame->par); ?> </p>

							<p class="fi-comment">
								<?php echo e($recentgame->recentGamecomment->count()); ?> Comment
							</p>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
									<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				<h3>No Data</h3>
			<?php endif; ?>

		</div>
	</div>
</section>
<!-- Recent game section end -->