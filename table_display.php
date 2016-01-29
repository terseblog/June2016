<?php
include "head.html";
include "html_factory.php";
/*A section for testing code*/

//Setting the column header names, turn this into a constuctor that uses  $arg_list = func_get_args();
$test_header = ["Name", "Age", "Occupation", "Location"];
//Setting column values according to names, each $test_row_values[$i]... is a row
$test_row_values [0] =[$test_header[0] => "John Smith",
                   $test_header[1] => "27",
                   $test_header[2] => "Developer",
                   $test_header[3] => "Denver, CO"];
$test_row_values [1] =[$test_header[0] => "Jane Winch",
                  $test_header[1] => "54",
                  $test_header[2] => "Secretary",
                  $test_header[3] => "Denver, CO"];
$test_row_values [2] =[$test_header[0] => "Bill Waulk",
                   $test_header[1] => "47",
                   $test_header[2] => "DBA",
                   $test_header[3] => "Colorado Springs, CO"];
$test_row_values [3] =[$test_header[0] => "Nahseem Joulad",
                  $test_header[1] => "32",
                  $test_header[2] => "UI Developer",
                  $test_header[3] => "Boulder, CO"];
$my_names="";
//rename those headers --will be helpful later
$my_names=["Employee", "Age", "Role", "Office"];
//only if I want to rename them
if($my_names){
  $col_name_map=rename_cols($test_header,$my_names);
}

//displaying what is in the two arrays above
create_html_table($test_header, $test_row_values, $col_name_map);

/* End Test Code*/


















include "foot.html";
 ?>
