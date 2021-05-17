<?php
$dbhost="localhost";
$dbuser='root';
$dbpass='';
$db='bizInt2021';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if (!$conn) {
  die('joooo'.mysqli_connect_error());
}
/*  echo "lidhja me sukses";
*/
/*$sql = 'CREATE Database bizInt2021';
//$sql = 'DROP Database bizint';

$retval = mysqli_query($conn, $sql);

if(!$retval)
{
    die('Nuk ka mundesi te krijohet DB'.mysqli_connect_error());
}
echo "Baza e te dhenave BizInt eshte krijuar me sukses!\n";*/


  $sql = "INSERT INTO anetaret(Id,user,pass,Data_reg)
  VALUES('123','Anda','Gashi','NOW()')";

  $sql = "INSERT INTO anetaret(Id,user,pass,Data_reg)
  VALUES('124','erza','Gashi','NOW()')";

  $sql = "INSERT INTO anetaret(Id,user,pass,Data_reg)
  VALUES('125','armend','berisha','NOW()')";

  $sql = "INSERT INTO anetaret(Id,user,pass,Data_reg)
  VALUES('126','jona','berisha','NOW()')";*/

    $retval = mysqli_query($conn,$sql);
    if(!$retval)
    {
      die('joo'.mysqli_connect_error());
    }
    echo "entered";
    mysqli_close($conn);

 ?>
