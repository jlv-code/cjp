<?php

	/**
		@author: jlv
		@file: header.php
		@version: 1.0
	 */

?>

<!DOCTYPE html>
<html lang="es-VE">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="identifier-url" content="http://cdj.com.ve/" />
	<meta name="title" content="Circuito Judicial Penal del Estado Bolivariano de Miranda" />
	<meta name="author" content="jlv Jose Vieitez" />
	<meta name="robots" content="All" />
	<meta name="revisit-after" content="1" />
	<meta name="description" content="Sitio web para la consulta de Audiencias del Circuito Judicial Penal del Estado Bolivariano de Miranda" />
	<meta name="keywords" content="penal, judicial, tribunales, juicios, audiencias" />
	<meta name="copyright" content="Circuito Judicial Penal del Estado Bolivariano de Miranda | <?php echo date('Y') ?>" />

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<?php wp_head() ?>

</head>

<body <?php body_class() ?>>
	<section id="wrap" class="Landing">
		<header id="header" class="Header">
			<div class="Header-inner">
				<div class="Block Head Head--top u-bg-black">
					<div class="Block-inner u-inner">
						<div class="Logo"><img src="<?php echo get_template_directory_uri() ?>/static/images/logo.png"></div>
					</div>
				</div>
				<div class="Block Head Head--middle">
					<img src="<?php echo get_template_directory_uri() ?>/static/images/banner-cjp.jpg">
				</div>
				<div class="Block Head Head--bottom u-bg-yellow u-br-black">
					<div class="Block-inner u-inner">
						<nav class="MainMenu"><?php wp_nav_menu(array('theme_location' => 'main')) ?></nav>
						<!--<div class="Search"><?php //get_search_form() ?></div>-->
					</div>
				</div>
			</div>
		</header>

		<main id="main" class="Main">
			<div class="Main-inner">