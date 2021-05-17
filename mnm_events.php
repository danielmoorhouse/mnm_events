<?php 

/**
 * Plugin Name:     Mr & Mrs Events
 * Description:     Categorise and display Events.
 * Version:         1.0.0
 * Author:          Mr & Mrs 
 */
defined('ABSPATH') or die('Ooops...you\re not meant to be here!');

//Our custom post type function
function create_posttype_mnm_events() {
    register_post_type( 'events',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' )
            ),
            'public' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			//'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'rewrite' => array('slug' => 'events'),
            'show_in_rest' => true
 
        )
    );
}
add_action( 'init', 'create_posttype_mnm_events' );
