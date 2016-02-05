<?php

//more for testing than anything else
function get_hard_data()
{
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
return $dense_array=[$header_values, $row_values];                   //End of Some test values
}
 ?>
