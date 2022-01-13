<?php
wp_enqueue_script( 'calslider', RS_DIR. 'assets/front/js/jquery.min.js' , array() );
wp_enqueue_script( 'price-customjs', RS_DIR. 'assets/front/js/custom.js' , array() );
wp_enqueue_script( 'minjsbootstrap', RS_DIR. 'assets/front/js/bootstrap.min.js' , array() );
wp_enqueue_style( 'bootstrap', RS_DIR. 'assets/front/css/bootstrap.min.css' , array() );
wp_enqueue_style( 'stylecalslider', RS_DIR. 'assets/front/css/custom.css' , array() );
wp_enqueue_script( 'price-customjs' );
wp_localize_script( 'price-customjs', 'ajax_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );