<html>
<head>
	<title><?=(isset($this->title)) ? $this->title : ''; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <title>Student Project Management</title>


	<!-- Stylesheets -->
	<link rel='stylesheet' type='text/css' href='<?php echo URL . "public/styles/style.css"; ?>' />
		
	<!-- Bootstrap -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/bootstrap.css"; ?>'>
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href='<?php echo URL . "public/css/bootstrap-responsive.css"; ?>'>    
<style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php URL ?>js/html5shiv.js"></script>
    <![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href='<?php echo URL . "public/img/favicon.ico"; ?>'>
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href='<?php echo URL . "public/img/apple-touch-icon-precomposed.png"; ?>'>

	</head>

  <body>
  <?php Session::init(); ?>
