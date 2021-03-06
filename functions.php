<?php
/* add fonts */
function enqueue_styles() {
    wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
    wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
    wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

/* add script */
function enqueue_scripts () {
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

/* remove_filter( 'the_content', 'wpautop' ); */
add_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/* sideBar */
function theme_widgets_init() {

    register_sidebar( array(
        'name' => __( '2 bottom sidebar','WebSite3D'),
        'id' => 'top-sidebar',
        'description'   => __( 'Add you widger', 'WebSite3D' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( '1 bottom sidebar','WebSite3D'),
        'id' => 'bottom-sidebar',
        'description'   => __( 'Add you widger', 'WebSite3D' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

        register_sidebar( array(
        'name' => __( '3 bottom sidebar','WebSite3D'),
        'id' => 'left-sidebar',
        'description'   => __( 'Add you widger', 'WebSite3D' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

        register_sidebar( array(
        'name' => __( '4 bottom sidebar','WebSite3D'),
        'id' => 'right-sidebar',
        'description'   => __( 'Add you widger', 'WebSite3D' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );
/* sideBar */
?>