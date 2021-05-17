<?php
require_once('db.php');
session_start();
if(isset($_POST['login']))
{
  if(empty($_POST['username']) || empty($_POST['password']))
  {
    header("location:Sign In.php");
  }
  else
  {
    $query= "Select * from anetaret where User='".$_POST['username']."' and Pass='".$_POST['password']."'";
    $result=mysqli_query($con,$query);
    if(mysqli_fetch_assoc($result))
    {
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

/*session_start();
$conn = mysqli_connect("localhost","root","","bagshop")
  if (isset($POST['login'])) {
      $sql = "Select * from bagshop where name='".$POST['Username']."' and password='".$POST['password']."'";
      $result = myslqi_query($conn,$sql);
      $user= mysqli_fetch_array($result);
      if($user) {
        if (!empty($POST["remeber"])) {
          setcookie("member_login",$_POST["Username"],time()+10*365);
          setcookie("member_password",$_POST["password"],time()+10*365);
        }
        else
        {
          if(isset($_COOKIE["member_login"]))
          {
            setcookie("member_login","");
          }
          if(isset($_COOKIE["member_password"]))
          {
            setcookie("member_password");
          }
        }
        header("locartion: Sing In.php" );

  }
  else {
    $message = "invalid Login";
  }
  */









  ?>
