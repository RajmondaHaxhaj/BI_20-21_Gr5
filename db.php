<?php
/*
$con = mysqli_connect('localhost','root','','bagshop');

if(!$con)
{
  die('please chech connection'.mysqli_connect_error());
}
else{
  echo "ok";
}*/

define('DB_SERVER', 'localhost');

//define('DB_SERVER', 'localhost');
// define('DB_SERVER', 'localhost:1235');

define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'bizInt2021');

/* Attempt to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);

// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "mireosht  ";

?>
