
<!-- Review section -->
<section class="review-section spad set-bg" data-setbg="img/review-bg.png">
	<div class="container">
			<div class="section-title">
				<div class="cata new">new</div>
				<h2>Recent Reviews</h2>
			</div>
			<div class="row">

				
					<?php echo $__env->make('review.review', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				
			</div>
	</div>
</section>
<!-- Review section end -->