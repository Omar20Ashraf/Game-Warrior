<?php $__env->startSection('content'); ?>

	<!-- Page info section -->
	<?php echo $__env->make('blog-page.page-info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	

	<!-- Page info section -->

	<!-- Page section -->
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="row">

				<!-- game info section -->
					<?php echo $__env->make('blog-page.game-info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
				<!-- game info section -->

				<!-- sidebar -->
					<?php echo $__env->make('blog-page.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<!-- sidebar -->		
			</div>
		</div>
	</section>
	<!-- Page section end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>