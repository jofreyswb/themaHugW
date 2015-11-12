 <?php
/**
 * File page.php
 *
 *
 * Template Name:Template for Varsicherungen
 * @package Site for HUG
 * @since Site for HUG  1.0
 */
?>

<?php get_header(); ?>

<!--<div class="main-heading">
    <h1 class="site-title"><?php the_title(); ?></h1>
</div>-->
<div class="SliderLightHUG">

    <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '310' ); } ?>
</div> <!-- end  SliderLightHUG-->
<div class="contentPage">
 <nav class="Varsicherungen-navigation">
        <? wp_nav_menu(array('menu' => 'left-Versicherungen', 'menu_class' => 'Varsicherungen-menu')); ?>
    </nav>
<section>
 <div class="postContent">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </div> <!-- end postContent-->
</section>    <!-- end main-heading -->
</div>    <!-- end contentPage -->
<script  src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/VERSICHERUNGEN.js"></script>
<?php get_footer(); ?>
