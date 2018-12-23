	

	<!-- sidebar -->
	<div class="col-lg-4 col-md-7 sidebar pt-5 pt-lg-0">
		<!-- widget -->

		<?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<div class="widget-item">
				<div class="feature-item set-bg" 
					 data-setbg="<?php echo e(url('images/blog/sidebar',$item->image)); ?>">
					<span class="cata <?php echo e($item->button_color); ?>">
						<?php echo e($item->button); ?>

					</span>
					<div class="fi-content text-white">
						<h5>
							<a href="/blog/sidebar/<?php echo e($item->id); ?>"><?php echo e($item->name); ?></a>
						</h5>
						<p><?php echo e($item->par); ?></p>
						<p class="fi-comment">
							<?php echo e($item->blogSidebarComment->count()); ?> comment
						</p>
					</div>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<h3>No Data</h3>
		<?php endif; ?>	
	</div>