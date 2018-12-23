
<!-- Page Preloder -->
<div id="preloder">
	<div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
	<div class="container">
		<!-- logo -->
		<a class="site-logo" href="<?php echo e(route('index')); ?>">
			<img src="<?php echo e(url('img/logo.png')); ?>" alt="">
		</a>

        <!-- Right Side Of Navbar -->
        <div class="user-panel">
            <!-- Authentication Links -->
            <?php if(Auth::guest()): ?>
                <a href="<?php echo e(route('login')); ?>">Login</a>
                /
                <a href="<?php echo e(route('register')); ?>">Register</a>
            <?php else: ?>

                    <span>
                        <?php echo e(Auth::user()->name); ?> 
                        <span class="caret"></span>
                    </span>
                    /
                    <a href="<?php echo e(url('/logout')); ?>">Logout</a>
            <?php endif; ?>
        </div>		

		<!-- responsive -->
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<!-- site menu -->
		<nav class="main-menu">
			<ul>
				<li><a href="<?php echo e(route('index')); ?>">Home</a></li>
				<li><a href="<?php echo e(route('games')); ?>">Games</a></li>
				<li><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
				<li><a href="<?php echo e(route('forums')); ?>">Forums</a></li>
				<li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
			</ul>
		</nav>
	</div>
</header>
<!-- Header section end -->

<!-- game info section -->
	<?php echo $__env->make('pages.latest_news', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
<!-- game info section -->


