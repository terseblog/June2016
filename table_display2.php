<?php
//sample use of html_table_class
include "html_table_class.php";
include "data_retrieval.php";
$test_data=get_hard_data();
//Format: new html_table($header_values, $row_values);
$my_html_table= new html_table($test_data[0], $test_data[1]);
$my_html_table->create_html_table();
?>
