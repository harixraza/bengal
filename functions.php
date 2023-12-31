<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */
function enqueue_output_css() {
    wp_enqueue_style('output', get_stylesheet_directory_uri() . '/dist/output.css');
    wp_enqueue_style('customcss', get_stylesheet_directory_uri() . '/dist/custom.css');
}
add_action('wp_enqueue_scripts', 'enqueue_output_css');
function register_custom_menus() {
    register_nav_menus(
        array(
            'footer-menu' => __('Footer Menu'),
            'footer-shop' => __('Footer Shop'),
            'footer-service' => __('Footer Service'),
        )
    );
}
add_action('init', 'register_custom_menus');


