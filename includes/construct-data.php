<?php
add_action('init', array($this, 'range_slider_call'));
add_action('admin_enqueue_scripts', array($this, 'range_slider_admin_scripts'));
register_activation_hook(__FILE__, array($this, 'activate_add_table'));
register_activation_hook(__FILE__, array($this, 'activete_add_data'));
add_action('wp_enqueue_scripts', array($this, 'range_slider_front_assets'));
add_shortcode('range_slider', array($this, 'shortcode_function'));
add_action("wp_ajax_myaction", array($this, "store_data"));
add_action("wp_ajax_nopriv_myaction", array($this, "store_data"));
add_action("wp_ajax_fixedprice", array($this, "add_data_price"));
add_action("wp_ajax_nopriv_fixedprice", array($this, "add_data_price"));

//add_action( 'add_meta_boxes', 'hcf_register_meta_boxes' );
//add_action( 'save_post', 'hcf_save_meta_box' );
add_action("wp_ajax_viewprice", array($this, "view_price_list"));
add_action("wp_ajax_nopriv_viewprice", array($this, "view_price_list"));
