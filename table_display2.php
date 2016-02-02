<?php
//real implementation of html_table class
include "head.html";
include "html_factory.php";
include "html_table_class.php";

/*NOTE: a section for making static assignments to test the code*/
$header_values=["Name","Age","Occupation","Location"];
$row_values [0] =[$header_values[0] => "John Smith",
                   $header_values[1] => "27",
                   $header_values[2] => "JS Developer",
                   $header_values[3] => "Denver, CO"];
$row_values [1] =[$header_values[0] => "Jane Winch",
                  $header_values[1] => "54",
                  $header_values[2] => "Secretary",
                  $header_values[3] => "Denver, CO"];
$row_values [2] =[$header_values[0] => "Bill Waulk",
                   $header_values[1] => "47",
                   $header_values[2] => "DBA",
                   $header_values[3] => "Colorado Springs, CO"];
$row_values [3] =[$header_values[0] => "Nahseem Joulad",
                  $header_values[1] => "32",
                  $header_values[2] => "UI Developer",
                  $header_values[3] => "Boulder, CO"];
                  //End of Some test values

$html_table_obj= new html_table($header_values, $row_values);
$html_table_obj->create_html_table();
?>
