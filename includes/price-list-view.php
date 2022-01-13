<?php

global $wpdb;
$number_of_pages_admin = $_POST['number_of_pages_admin'];
//$response = array();

// Fetch all records
if ($number_of_pages_admin == 1) {
    $response = $wpdb->get_results("SELECT * FROM wp_range_slider ORDER BY id DESC LIMIT 1");
}
