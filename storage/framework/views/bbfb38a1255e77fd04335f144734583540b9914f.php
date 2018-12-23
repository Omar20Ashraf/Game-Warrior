

			
<!-- Page info section -->

	<div class="col-lg-8">
		<div class="row">
			<?php $__empty_1 = true; $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<div class="col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg=
								"<?php echo e(url('images/blog/games',$game->image)); ?>">
							<div class="cata <?php echo e($game->button_color); ?>">
								<?php echo e($game->button); ?>

							</div>
						</div>
						<div class="rgi-content">
							<a href="/blog/games/<?php echo e($game->id); ?>">
								<h5><?php echo e($game->name); ?></h5>
							</a>	
							<p><?php echo e($game->par); ?></p>
							<p class="comment">
								<?php echo e($game->blogGamesComment->count()); ?> comment
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

		<div class="site-pagination">
			<span class="active">01.</span>
			<a href="#">02.</a>
			<a href="#">03.</a>
		</div>
	</div>