<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business_Idea
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

		<!-- ** Plugins Needed for the Project ** -->
	  <!-- Bootstrap -->
	  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/bootstrap/bootstrap.min.css">
	  <!-- slick slider -->
	  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/slick/slick.css">
	  <!-- themefy-icon -->
	  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/themify-icons/themify-icons.css">
	  <!-- venobox css -->
	  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/venobox/venobox.css">
	  <!-- card slider -->
	  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/themelib/plugins/card-slider/css/style.css">

	  <!-- Main Stylesheet -->
	  <link href="<?php bloginfo('stylesheet_directory'); ?>/themelib/css/style.css" rel="stylesheet">
	  
	  <!--Favicon-->
	  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/favicon.ico" type="image/x-icon">
	  <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="navigation fixed-top" style="margin-top: 15px;">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/themelib/images/logo.png" alt="Egen"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.html">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.html">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portfolio.html">Portfolio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="team.html">Team</a>
            <a class="dropdown-item" href="team-single.html">Team Details</a>
            <a class="dropdown-item" href="career.html">Career</a>
            <a class="dropdown-item" href="career-single.html">Career Details</a>
            <a class="dropdown-item" href="blog-single.html">Blog Details</a>
            <a class="dropdown-item" href="pricing.html">Pricing</a></a>
            <a class="dropdown-item" href="faqs.html">FAQ's</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
    </div> -->

    <?php 

    wp_nav_menu(
		array(
		'theme_location'  => 'header',
		'menu'			  => 'header',
		'menu_class'	  => 'navbar-nav ml-auto',
		'container'	 	  => 'div',
		'container_class' => 'collapse navbar-collapse text-center',
		'container_id'    => 'navigation',
		)
		);

    ?>
  </nav>
</header>

