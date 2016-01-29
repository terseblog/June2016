<?php
/* This file is to prevent the mix of
* PHP and HTML that is so hard to read,
* but is necessary in many cases
*/
function create_html_table($header_names_arr, $row_values_arr, $name_map){
//create the table html
//need to add an array of CSS values
  echo "<table border=1>";

  //lay down the header row
  echo "<tr>";
  //header names are stored here; display them
 for($i=0; $i<sizeof($header_names_arr); $i++){
    echo "<th>".$name_map[$header_names_arr[$i]]."</th>";

 }
 //done with the header row
 echo "</tr>";
 //now will add rows to the table the header names are keys to the second dimension of $row_values_arr
 add_rows_to_table($header_names_arr, $row_values_arr);
 //close this table
 echo "</table>";
}

//need to convert this from associative to numeric
function add_rows_to_table($header_names_arr, $row_values_arr){
/*need to add IDs to TDs so that odd and even rows can be separate*/
//For each numerical index in $row_values_arr[$i]...
for($i=0; $i<sizeof($row_values_arr); $i++){
  $row_num=$i+1;//for adding row id's, but I did not want to start with 0
  echo "<tr id=\"row{$row_num}\">";//Oh, BTW we need a new row for each numerical index in $row_values_arr since each one represents a row
      //...access the associative key in the $row_values_arr using the names in $header_names_arr as the keys
      for($j=0; $j<sizeof($header_names_arr); $j++){
        $cell_num=$j+1; //for making an id for each cell, but I did not want to start with 0
        echo "<td id=\"row{$row_num}cell{$cell_num}\">".$row_values_arr[$i][$header_names_arr[$j]]."</td>";
      }
  echo "</tr>";//end the row after each iteration of this outer for loop
  }

}

function rename_cols($header_names_arr, $new_names){

  for ($i=0; $i<sizeof($header_names_arr); $i++){
    $name_map[$header_names_arr[$i]]=$new_names[$i];
  }
  return $name_map;
}


?>
