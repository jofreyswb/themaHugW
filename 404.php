 <?php
/**
 * File 404.php
 *
 *Error page
 *
 * @package Site for HUG
 * @since Site for HUG  1.0
 */
?>
<?php get_header(); ?>

<div class="main-heading">
    <h1 class="site-title"><?php the_title(); ?></h1>
</div>

<section>
 <p> <? echo __('<h1>404</h1>','Site for HUG'); ?></p>
 <p><?php echo __('It looks like nothing was found at this location.', 'Site for HUG'); ?></p>
</section>    <!-- end main-heading -->
<?php get_footer(); ?>