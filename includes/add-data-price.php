<?php
global $wpdb;
$number_of_pages_admin = $_POST['number_of_pages_admin'];
$wpdb->insert('wp_fixed_price', array(
'number_of_pages_admin' => $number_of_pages_admin
), array('%s'));
die();
return true;