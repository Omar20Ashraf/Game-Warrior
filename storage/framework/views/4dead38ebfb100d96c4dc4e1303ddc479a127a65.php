<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Game Warrior </title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">	
	<!-- Favicon -->   
	<link href="<?php echo e(asset('img/favicon.ico')); ?>" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<?php echo $__env->make('elements.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldContent('content'); ?>

	<?php echo $__env->make('elements.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
</body>
</html>