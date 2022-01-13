<?php
wp_enqueue_script( 'jquery-ajax', RS_DIR. 'js/jquery.min.js' , array() );
wp_enqueue_style( 'custom-style', RS_DIR. '/assets/admin/css/custom.css',array());
wp_enqueue_script( 'script-custom', RS_DIR. '/assets/admin/js/custom.js',array());
wp_enqueue_script( 'script-custom' );
wp_localize_script( 'script-custom', 'ajax_object_admin', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );