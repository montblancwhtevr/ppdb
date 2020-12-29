<?php 
// error_reporting(0);

$con = new mysqli("us-cdbr-east-02.cleardb.com","b0913b73f745dd","94a69260","heroku_6fe8f74d47736e0");
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// mysql_connect("localhost","root","root") or die(mysqli_error()) ;
// mysql_select_db("db_psb") or die(mysqli_error());
