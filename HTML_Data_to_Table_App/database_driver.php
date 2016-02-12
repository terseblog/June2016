<?php
class db_driver
{
  var $mysql_host=""; //string
  var $mysql_user=""; //string
  var $mysql_password=""; //string
  var $mysql_database=""; //string
  var $col_names="";//returns column names as a 1D array, to be referenced separately as needed
  var $col_values="";/*returns column names as a 2D array. A numerical array of
                     associatve arrays such that a single col value has the
                     index $col_values[n][$col_names[n]]*/

  function __construct($host, $user, $password, $database)
  {
    $this->mysql_host=$host;
    $this->mysql_user=$user;
    $this->mysql_password=$password;
    $this->mysql_database=$database;
  }

  function get_columns()
  {
    return $array=$this->col_names;
  }

  function get_rows()
  {
    return $array=$this->col_values;
  }

  function db_query($query_string)
  {
    $mysqli = new mysqli("$this->mysql_host", "$this->mysql_user", "$this->mysql_password", "$this->mysql_database");

/* check connection */
      if (mysqli_connect_errno()) {
          echo "Database connection failed: \n".mysqli_connect_error();
          exit();
      }


      if(!$result = $mysqli->query($query_string))	{echo "Query failed."; exit();}

      //returns an array of
      $field_obj=$result->fetch_fields();
        for($j=0; $j<sizeof($field_obj); $j++)
        {
            $this->col_names[$j]=$field_obj[$j]->name;
        }

//fetch_array returns one row at a time, so we need to do this
      $i=0;//each $i is a row
      while($row = $result->fetch_array(MYSQL_ASSOC))
      {
        //each $k is a column value
        for($k=0; $k<sizeof($this->col_names); $k++)
        {
         $this->col_values[$i][$this->col_names[$k]]=$row[$this->col_names[$k]];
        }

       $i++;
      }

  }
}
 ?>
