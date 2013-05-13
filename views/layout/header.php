<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		
		<!-- Stylesheets -->
		<link rel='stylesheet' type='text/css' href='<?php echo URL . "public/styles/style.css"; ?>' />
		
	<!-- Bootstrap -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/bootstrap.css"; ?>'>
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/bootstrap-responsive.css"; ?>'>
	<!-- jQuery UI -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/plugins/jquery-ui/smoothness/jquery-ui.css"; ?>'>
	<link rel="stylesheet" href='<?php echo URL . "public/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css"; ?>'>
	<!-- PageGuide -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/plugins/pageguide/pageguide.css"; ?>'>
	<!-- Fullcalendar -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/plugins/fullcalendar/fullcalendar.css"; ?>'>
	<link rel="stylesheet" href='<?php echo URL . "public/css/plugins/fullcalendar/fullcalendar.print.css  media='print'"; ?>'>
	<!-- chosen -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/plugins/chosen/chosen.css"; ?>'>
	<!-- select2 -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/plugins/select2/select2.css"; ?>'>
	<!-- icheck -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/plugins/icheck/all.css"; ?>'>
	<!-- Tagsinput -->
	<!-- Elfinder -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/plugins/elfinder/elfinder.min.css"; ?>'>
	<link rel="stylesheet" href='<?php echo URL . "public/css/plugins/elfinder/theme.css"; ?>'>
	<!-- XEditable -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/plugins/xeditable/bootstrap-editable.css"; ?>'>
	<!-- Tags -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/plugins/tagsinput/jquery.tagsinput.css"; ?>'>
	<!-- Theme CSS -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/style__not-minified.css"; ?>'>
	<!-- Color CSS -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/themes__not-minified.css"; ?>'>

	
	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href='<?php echo URL . "public/img/favicon.ico"; ?>'>
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href='<?php echo URL . "public/img/apple-touch-icon-precomposed.png"; ?>'>
	
	<!-- jQuery -->
	<script src='<?php echo URL . "public/js/jquery.min.js"; ?>'></script>
		<?php
	if (isset($this->js)) 
	{
		foreach ($this->js as $js)
		{
			echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
		}
	}
	?>

	</head>
<body  data-layout-topbar="fixed" data-layout-sidebar="fixed" data-mobile-sidebar="false" class="theme-satblue">
<!doctype html>
	
<?php Session::init(); ?>
<?php include("menu_top.php"); ?>		
<?php include("menu_sidebar.php"); ?>		

	
<div id="main">
			<div class="container-fluid">	
	