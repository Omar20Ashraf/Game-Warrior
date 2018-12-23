<?php $__env->startSection('content'); ?>

	<!-- info section -->
	<?php echo $__env->make('game-page.first', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
	<!-- info section end -->

	<!-- page[games] section -->
	<?php echo $__env->make('game-page.games', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
	<!-- page[games] section end -->

	<!-- review section -->
	<?php echo $__env->make('game-page.review', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
	<!-- review section end -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>