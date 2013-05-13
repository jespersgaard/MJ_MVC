<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>FLAT - Login</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/bootstrap-responsive.min.css">
	<!-- icheck -->
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo URL ?>/public/css/themes.css">


	<!-- jQuery -->
	<script src="<?php echo URL ?>/public/js/jquery.min.js"></script>
	
	<!-- Nice Scroll -->
	<script src="<?php echo URL ?>/public/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- Validation -->
	<script src="<?php echo URL ?>/public/js/plugins/validation/jquery.validate.min.js"></script>
	<script src="<?php echo URL ?>/public/js/plugins/validation/additional-methods.min.js"></script>
	<!-- icheck -->
	<script src="<?php echo URL ?>/public/js/plugins/icheck/jquery.icheck.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo URL ?>/public/js/bootstrap.min.js"></script>
	<script src="<?php echo URL ?>/public/js/eakroko.js"></script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
	

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo URL ?>/public/img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo URL ?>/public/img/apple-touch-icon-precomposed.png" />

</head>



<body class='error'>
	<div class="wrapper">
		<div class="code"><span>404</span><i class="icon-warning-sign"></i></div>
		<div class="desc"><?php echo $this->msg; ?></div>

		<div class="buttons">
			<div class="pull-right"><a href="<?php echo URL ?>Index" class="btn"><i class="icon-arrow-left"></i> Back</a></div>
		</div>
	</div>
