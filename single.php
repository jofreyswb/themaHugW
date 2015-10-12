 <?php
/**
 * File single.php
 *
 *  posts page
 *
 * @package Site for HUG
 * @since Site for HUG  1.0
 */
?>
<?php get_header();?>
<div class="main-heading">
    <h1><?php the_title(); ?></h1>
</div>

<section class="simplePage">
    <div class="postContent">
    <?php while (have_posts()): the_post();?>

             <?php if( has_post_thumbnail() ) :?>
                <div class="image-section">
                <?php the_post_thumbnail(); ?>
                </div>
             <?php endif; ?>
             
       <div class="theContent">
       <?php the_content();?>
       </div>
    <?php endwhile; ?>
    </div> <!-- end postContent-->
</section>
<?php get_footer(); ?>