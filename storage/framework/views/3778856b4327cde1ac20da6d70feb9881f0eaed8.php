	<!-- Review section -->
	<section class="review-section review-dark spad set-bg" data-setbg="img/review-bg-2.jpg">
		<div class="container">
			<div class="section-title text-white">
				<div class="cata new">new</div>
				<h2>Recent Reviews</h2>
			</div>
			<div class="row text-white">

				
				
					<?php echo $__env->make('review.review', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				
			</div>
		</div>
	</section>
	<!-- Review section end -->
