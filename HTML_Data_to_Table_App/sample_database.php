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
$my_html_table->rename_column("postID", "Post Id");
$my_html_table->rename_column("title","Title");
$my_html_table->rename_column("date", "Date Published");
$my_html_table->create_html_table();
?>
