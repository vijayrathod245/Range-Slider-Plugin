<?php

	$labels = array( 
        'name' => _x('Set Price', 'post type general name'), 
        'singular_name' => _x('SetPrice Item', 'post type singular name'), 
        'add_new' => _x('Add New', 'setprice item'), 
        'add_new_item' => __('Add New SetPrice Item'), 
        'edit_item' => __('Edit SetPrice Item'), 
        'new_item' => __('New SetPrice Item'), 
        'view_item' => __('View SetPrice Item'), 
        'search_items' => __('Search SetPrice'), 
        'not_found' => __('Nothing found'), 
        'not_found_in_trash' => __('Nothing found in Trash'), 
        'parent_item_colon' => '' 
    );   

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true, 
        //'menu_icon' => get_stylesheet_directory_uri() . '/article16.png', 
        'rewrite' => array( 'slug' => 'setprice', 'with_front'=> false ), 
        'capability_type' => 'post', 
        'hierarchical' => true,
        'has_archive' => true,  
        'menu_position' => null, 
        'supports' => array('title') 
    );   

    register_post_type( 'setprice' , $args ); 