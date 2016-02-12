<?php
//sample use of html_table_class
include_once "html_table_class.php";
include "database_driver.php";
$database=new db_driver("localhost", "root", "","terse_db");
$database->db_query("SELECT postID,title,date FROM post");
$col_names=$database->get_columns();
$col_data=$database->get_rows();

//Format: new html_table($header_values, $row_values);
$my_html_table= new html_table($col_names, $col_data);

//Test:rename columns
$my_html_table->rename_column("postID", "Post Id");
$my_html_table->rename_column("title","Title");
$my_html_table->rename_column("date", "Date Published");

//Test: append_row
$database2=new db_driver("localhost", "root", "","terse_db");
$database2->db_query("SELECT postID,title,date FROM post WHERE postID='Dec282012'");
$result_arr=$database2->get_rows();
//result needs to be a single associative array--possibly problematic
$appended_row=$my_html_table->convert_col_data_to_numerical();
foreach($appended_row[0] as $disp) echo $disp."</br>";
$my_html_table->append_row_data($appended_row[0]);

$my_html_table->create_html_table();
?>
