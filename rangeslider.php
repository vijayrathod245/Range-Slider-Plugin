<?php
/**
 * Plugin Name:       Range Slider
 * Plugin URI:        #
 * Description:       Range Slider.
 * Version:           1.0
 * Requires at least: 5.2
 * Author:            Test
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       #
 * Text Domain:       range-slider
 * Domain Path:       /languages
 */
 
 /*
 * Exit if accessed directly
 */
if (!defined('ABSPATH')) {
    exit;
}
define('RS_TEXTDOMAIN', 'range-slider');
define('RS_DIR', plugin_dir_url( __FILE__ ));

/*
 *Create a class called "Range_Slider" if it doesn't already exist
 */
if ( !class_exists( 'Range_Slider' ) ) {

	Class Range_Slider{
		
		public function __construct() {
			add_action('init', array($this, 'range_slider_call'));
			add_action('admin_enqueue_scripts', array($this, 'range_slider_admin_scripts'));
			register_activation_hook(__FILE__, array( $this, 'activate_add_table'));
			register_activation_hook(__FILE__, array( $this, 'activete_add_data'));
			add_action('wp_enqueue_scripts', array($this, 'range_slider_front_assets'));
			add_shortcode('range_slider', array($this, 'shortcode_function'));
			add_action( "wp_ajax_myaction", array($this, "store_data" ));
			add_action( "wp_ajax_nopriv_myaction", array($this, "store_data" ));
			add_action( "wp_ajax_fixedprice", array($this, "add_data_price" ));
			add_action( "wp_ajax_nopriv_fixedprice", array($this, "add_data_price" ));	

			//add_action( 'add_meta_boxes', 'hcf_register_meta_boxes' );
			//add_action( 'save_post', 'hcf_save_meta_box' );
			add_action( "wp_ajax_viewprice", array($this, "view_price_list" ));
			add_action( "wp_ajax_nopriv_viewprice", array($this, "view_price_list" ));
		}
		public function range_slider_call() {
			add_action( 'admin_menu', array($this, 'range_slider_menu'), 100);
		}
		public function range_slider_menu(){
			add_menu_page( 'Range Slider', 'Range Slider', 'manage_options', 'range-slider', 'Range_Slider', 'dashicons-slides' );	
			add_submenu_page("range-slider", "Set Price", "Set Price", 0, "range-slider-price", "range_slider_submenu");
			/**
			*@return html Display
			*/
			function Range_Slider(){
				include_once('includes/range-slider-function.php');
			}
			function range_slider_submenu(){
				include_once('includes/slider-set-price.php');
			}
		}
		/**
		 *@return style and script in admin site
		 */
		public function range_slider_admin_scripts(){
			wp_enqueue_script( 'jquery-ajax', RS_DIR. 'js/jquery.min.js' , array() );
			wp_enqueue_style( 'custom-style', RS_DIR. '/assets/admin/css/custom.css',array());
			wp_enqueue_script( 'script-custom', RS_DIR. '/assets/admin/js/custom.js',array());
			wp_enqueue_script( 'script-custom' );
			wp_localize_script( 'script-custom', 'ajax_object_admin', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
		}
		function range_slider_front_assets() {
			wp_enqueue_script( 'calslider', RS_DIR. 'assets/front/js/jquery.min.js' , array() );
			wp_enqueue_script( 'price-customjs', RS_DIR. 'assets/front/js/custom.js' , array() );
			wp_enqueue_script( 'minjsbootstrap', RS_DIR. 'assets/front/js/bootstrap.min.js' , array() );
			wp_enqueue_style( 'bootstrap', RS_DIR. 'assets/front/css/bootstrap.min.css' , array() );
			wp_enqueue_style( 'stylecalslider', RS_DIR. 'assets/front/css/custom.css' , array() );
			wp_enqueue_script( 'price-customjs' );
			wp_localize_script( 'price-customjs', 'ajax_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
		}
		/*
		 *@ Add table in database
		*/
		public function activate_add_table() {
			include_once('database/installer.php');
		} 
		public function activete_add_data(){
			//include_once('database/add-data.php');
		}
		function shortcode_function(  ) {
			include_once('includes/range-slider-layout.php');
		}
		function store_data(){
			include_once('includes/data-store.php');
		}	
		function add_data_price(){
			include_once('includes/add-data-price.php');
		}
		function view_price_list(){
			include_once('includes/price-list-view.php');
		}
	}	
}
/*
 * Created new object of the Range_Slider.
 */
new Range_Slider();