<?php

// Initialize DB Tables
// WP Globals
global $table_prefix, $wpdb;


// Customer Table
$customerTable = $table_prefix . 'range_slider';

// Create Customer Table if not exist
if ($wpdb->get_var("show tables like '$customerTable'") != $customerTable) {

	// Query - Create Table
	$sql = "CREATE TABLE `$customerTable` (";
	$sql .= " `id` int(11) NOT NULL auto_increment, ";
	$sql .= " `number_of_pages` varchar(500) NOT NULL, ";
	$sql .= " `design_style_design_statement` varchar(500) NOT NULL, ";
	$sql .= " `content_for_of_web_pages` varchar(500) NOT NULL, ";
	$sql .= " `result_focused_SEO` varchar(500) NOT NULL, ";
	$sql .= " `responsive_design` varchar(500) NOT NULL, ";
	$sql .= " `database_integration` varchar(500) NOT NULL, ";
	$sql .= " `commerce_functionality` varchar(150) NOT NULL, ";
	$sql .= " `total` varchar(150) NOT NULL, ";
	$sql .= " PRIMARY KEY `customer_id` (`id`) ";
	$sql .= ") ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";

	// Include Upgrade Script
	require_once(ABSPATH . '/wp-admin/includes/upgrade.php');

	// Create Table
	dbDelta($sql);
}
