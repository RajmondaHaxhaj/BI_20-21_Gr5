<?php
require_once('db.php');
session_start();
if(isset($_POST['login']))
{
  if(empty($_POST['username']) || empty($_POST['password']))
  { echo "fill the gaps";
    header("location:Sign In.php");
  }
  else
  {
    $query= "Select * from anetaret where User='".$_POST['username']."' and Pass='".$_POST['password']."'";
    $result=mysqli_query($con,$query);
    if(mysqli_fetch_assoc($result))
    {  setcookie('username',$_POST['username'],time()+60*5);
      $_SESSION['user']=$_POST['username'];
      header("location: Home Page.php");
    }
    else {
      header("location:Sign In.php");
    }
  }
}
else
{
  echo "notsss working";
}
?>
