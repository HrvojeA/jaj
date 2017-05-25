<?php
add_action( 'wp_enqueue_scripts', 'allegiant_child_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_register_script('jquery-min-js','https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js');
    wp_enqueue_script( 'jquery-min-js' );

}

add_image_size( 'client-image', 250, 210 );


// Our custom post type function
function create_posttype() {

    register_post_type( 'clients',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Clients' ),
                'singular_name' => __( 'Client' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'clients'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

// Our custom post type function
function create_posttype_priceplan() {

    register_post_type( 'price_plans',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Price plans' ),
                'singular_name' => __( 'Price plan' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'price_plans'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_priceplan' );

?>