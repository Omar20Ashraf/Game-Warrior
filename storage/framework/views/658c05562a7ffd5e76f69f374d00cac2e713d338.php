
<!-- Page section -->
<section class="page-section review-page spad">
	<div class="container">
		<div class="row">
			<?php $__empty_1 = true; $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg=
						"<?php echo e(url('images/game/games',$game->image)); ?>">
							<div class="score yellow"><?php echo e($game->review); ?></div>
						</div>
						<div class="review-text">
							<a href="/game/games/<?php echo e($game->id); ?>">
								<h4><?php echo e($game->name); ?></h4>
							</a>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<p><?php echo e($game->par); ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				<h3>No Data</h3>
			<?php endif; ?>		
			</div>
			<div class="text-center pt-4">
				<button class="site-btn btn-sm">Load More</button>
			</div>
		</div>
</section>
<!-- Page section end -->