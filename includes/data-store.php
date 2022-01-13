<?php
global $wpdb;
$number_of_pages = $_POST['number_of_pages'];
$design_style_design_statement = $_POST['design_style_design_statement'];
$content_for_of_web_pages = $_POST['content_for_of_web_pages'];
$result_focused_SEO = $_POST['result_focused_SEO'];
$responsive_design = $_POST['responsive_design'];
$database_integration = $_POST['database_integration'];
$commerce_functionality = $_POST['commerce_functionality'];
$total = $_POST['total'];
$wpdb->insert('wp_range_slider', array(
'number_of_pages' => $number_of_pages,
'design_style_design_statement' => $design_style_design_statement,
'content_for_of_web_pages' => $content_for_of_web_pages,
'result_focused_SEO' => $result_focused_SEO,
'responsive_design' => $responsive_design,
'database_integration' => $database_integration,
'commerce_functionality' => $commerce_functionality,
'total' => $total
), array('%s'));
die();
return true;