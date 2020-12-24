<?php 
// error_reporting(0);

$con = new mysqli("localhost","root","","db_psb");
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// mysql_connect("localhost","root","root") or die(mysqli_error()) ;
// mysql_select_db("db_psb") or die(mysqli_error());

 ?>