<!DOCTYPE html>

<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php the_title() ?></title>

	<!-- stylesheet -->
	<link rel="stylesheet" type="css" href="<?php bloginfo('stylesheet_url'); ?>" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- favicon -->
	<link rel="icon" href="<?php echo home_url('/'); ?>favicon.ico" />

	<?php wp_head(); ?>

</head>

<?php global $body_class; ?>
<body <?php body_class((isset($body_class)) ? $body_class : null); ?>>

	<div class="container">