 <?php
/**
 * File page.php
 *
 *
 *  Template Name:Template for Renovationen
 * @package Site for HUG
 * @since Site for HUG  1.0
 */
?>

<?php get_header(); ?>

<!--<div class="main-heading">
    <h1 class="site-title"><?php the_title(); ?></h1>
</div>-->
<div class="SliderLightHUG">
<!--<?php echo do_shortcode('[layerslider id="1"]'); ?>   -->
<?php layerslider(4) ?>
</div> <!-- end  SliderLightHUG-->
<div class="contentPage">
 <nav class="Varsicherungen-navigation">
        <? wp_nav_menu(array('menu' => 'left-Renovationen', 'menu_class' => 'Varsicherungen-menu')); ?>
    </nav>
<section>
 <div class="postContent">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </div> <!-- end postContent-->
</section>    <!-- end main-heading -->
</div>    <!-- end contentPage -->
 <script  src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/RENOVATIONEN.js"></script>
<?php get_footer(); ?>
