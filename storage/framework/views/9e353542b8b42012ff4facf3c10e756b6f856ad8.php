
<!-- Tournaments section -->
<section class="tournaments-section spad">
	<div class="container">
		<div class="tournament-title">Tournaments</div>
		<div class="row">
			<?php $__empty_1 = true; $__currentLoopData = $tournaments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<div class="col-md-6">
					<div class="tournament-item mb-4 mb-lg-0">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" 
									data-setbg=
								"<?php echo e(url('images/tournaments',$tournament->image)); ?>">
							</div>
							<div class="ti-text">
								<h4><?php echo e($tournament->title); ?></h4>
								<ul>
									<li><span>Tournament Beggins:</span> 
										<?php echo e($tournament->beggins); ?>

									</li>
									<li><span>Tounament Ends:</span>
									 	<?php echo e($tournament->ends); ?>

									</li>
									<li><span>Participants:</span>
										<?php echo e($tournament->participants); ?>

									</li>
									<li><span>Tournament Author:</span>
										 <?php echo e($tournament->author); ?>

									</li>
								</ul>
								<p><span>Prizes:</span>
								 	<?php echo e($tournament->prizes); ?>

								</p>
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
<!-- Tournaments section bg -->