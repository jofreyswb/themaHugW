 <?php
/**
 * File header.php
 *
 * header of the site
 *
 * @package Site for HUG
 * @since Site for HUG  1.0
 */
?>
<!DOCTYPE HTML>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">



	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    <!--[if lt IE 9]>

<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>

<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">


    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel='stylesheet' id='main-style'  href='<?php echo get_stylesheet_uri(); ?>' type='text/css' media='all' />


    <!--Scripts CSS -->
    <link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favicon2.png">

<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
<!--<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/reset.css" type="text/css" />  -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css" type="text/css" />
<!-- Menu -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/menu.css">
<!-- Menu -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/footer.css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/header.css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/content.css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<?/*<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css" rel="stylesheet" type="text/css">*/?>
<script  src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/menu.js"></script>


    <!--Scripts CSS -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="wrapper">
    <!-- LOGO-->
<!--        <?php if ( get_header_image() ) : ?>
    	<div id="site-header">
    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    		   <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

                </a>
    	</div>
    	<?php endif; ?>-->
 <a href="#head" title="Up" id="UpButton" class="UpButtonn"><div class=""></div> </a>

 <!--<a href="#head" title="�����"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/UpButoon.png" alt="" id="UpButton" class="UpButtonn"/> </a>
-->
<div class="header" id="header">
<div class="inHeader">
    	<div id="site-header">
    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    		   <!--	<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
    			-->
                <img class="headerlogo" id="headerlogo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logokurt2.png "   alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/>
    		</a>
    	</div>

    <!-- LOGO-->
<!-- main menu -->
<nav class="main-nav">
    <div class="current " id="current">&equiv;</div>
   <? wp_nav_menu(array('menu' => 'top', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu')); ?>
   <!--  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
-->
</nav>
<!-- end main menu -->
</div><!-- end inHeader -->
</div><!-- end header -->