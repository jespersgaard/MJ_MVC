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

<body class='login'>
	<div class="wrapper">
		<h1><a href="Index"><img src="<?php echo URL ?>/public/img/logo-big.png" alt="" class='retina-ready' width="59" height="49">SPM</a></h1>
		<p><h3>Student Project Management</h3>
		<div class="login-body">
			<h2>SIGN IN</h2>
			<form action="login/run" method='post' class='form-validate' id="test">
				<div class="control-group">
					<div class="email controls">
						<input type="text" name='login' placeholder="Username" class='input-block-level' data-rule-required="true" data-rule-email="false">
					</div>
				</div>
				<div class="control-group">
					<div class="pw controls">
						<input type="password" name="password" placeholder="Password" class='input-block-level' data-rule-required="true">
					</div>
				</div>
				<div class="submit">
					<div class="remember">
						<input type="checkbox" name="remember" class='icheck-me' data-skin="square" data-color="blue" id="remember"> <label for="remember">Remember me</label>
					</div>
					<input type="submit" value="Sign me in" class='btn btn-primary'>
				</div>
			</form>
			<div class="forget">
				<a href="#"><span>Forgot password?</span></a>
			</div>
		</div>
	</div>
</body>
</html>
