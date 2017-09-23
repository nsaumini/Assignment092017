<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php get_home_url(); ?>">
						<img class="img-responsive pull-left" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="Grab">
						<span class="text-uppercase h1"><strong>&nbsp;JET</strong></span>
					</a>
				</div>

				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right text-center">
						<li><a href="<?php get_home_url(); ?>" class="hvr-underline-from-center">GrabLimo</a></li>
						<li><a href="<?php get_home_url(); ?>" class="hvr-underline-from-center">GrabCruise</a></li>
						<li><a href="<?php get_home_url(); ?>" class="hvr-underline-from-center">GrabCopter</a></li>
      				</ul>
    			</div>
			</div>
		</nav>
	</header>
