<?php $__env->startSection('content'); ?>

	<!-- Hero section -->
	<?php echo $__env->make('index-page.hero', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
	<!-- Hero section end -->

	<!-- Feature section -->
	<?php echo $__env->make('index-page.feature', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- Feature section end -->

	<!-- Recent game section  -->
	<?php echo $__env->make('index-page.recent-game', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- Recent game section end -->

	<!-- Tournaments section -->
	<?php echo $__env->make('index-page.tournaments', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- Tournaments section bg -->

	<!-- Review section -->
	<?php echo $__env->make('index-page.recent-reviews', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- Review section end -->


<?php $__env->stopSection(); ?>   

<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>