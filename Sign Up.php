<html>
    <head>
    <title>Sign up</title>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
        <style>
            body {
                margin :0;
                padding:0;
                background-image: url(sign1.png);
                background-size: cover;
                background-position: center ;
                font-family: sans-serif;
                 }
        
            .loginbox{
                width: 450px;
                height: 450px;
                background: #e1e1e1e1;
                color: #ffffffff;
                top:50%;
                left:50%;
                position:absolute;
                transform: translate(-50% , -50%);
                box-sizing: border-box;
                padding: 90px 60px;
                     }  
            
            .avatar {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                position: absolute;
                top:-10%;
                left:calc(50% - 50px);
                    }
        
            #create {
                margin: 0;
                padding: 0 0 20px ;
                text-align: center;
                font-size: 27px;
                }
            
            .loginbox p {            
                margin: 0;
                padding: 0;
                font-weight: bold;
                   }
            
            .loginbox input {
                height: 20px;
                width:320px;
                margin-bottom: 10px;
             
                   }
            
            .loginbox input[type="text"],input[type="password"]
                 {
                border: none;
                border-bottom: 1px solid #fff ;
                background: transparent;
                outline: none;
                height: 40px;
                color: black;
                font-size: 16px;
                text-decoration-color: black;
                
                  }
            
            .loginbox input[type="submit"]
            {
                border:none;
                outline: none;
                height: 40px;
                background: deepskyblue;
                color: #fff;
                font-size: 18px;
                border-radius: 20px;
            }
            
            .loginbox input[type="submit"]:hover
            {
                cursor: pointer;
                background-color:palegreen;
                font-size: 20px;
                border-radius: 18px;
                height: 43px;
                transition: .5s;
                color: #000;
            }
            
            .loginbox a
            {
                text-decoration: none;
                font-size: 15px;
                line-height: 20px;
                color: black;
                height: 540px;
            
            }
            
            .loginbox a:hover
            {
              color: #ffc107;
            }
            
            .login
            {
               top:90%;
                left:50%;
                position:absolute;
                transform: translate(-50% , 45%);   
            }
            h2
        
            {
                position: relative;
                top: 100px;
            }
                 </style>
             
                    
    </head>
    <body>
            <script type="text/javascript">
                     
                     
                   function dayandnight(){
     var current = new Date();
            var day_night = current.getHours();
                      if (day_night > 5 && day_night < 16){
                       //Day
                       var bodyColor = document.getElementsByTagName("BODY")[0];
         bodyColor.style.backgroundImage = "url('images/back.png')";
         document.write("Day");
                      }
                      else{
                       //Night
                       var bodyColor = document.getElementsByTagName("BODY")[0];
         bodyColor.style.backgroundImage = "url('images/wallpaper2.jpg')";
         
         document.write("Night");
                      }
                  }
                dayandnight();
                     
                 </script>
    <div class="loginbox">
        <img src="images/avatar.png" class="avatar">
        
    <h1 id="create" >Create Account</h1>
        <form >
             <p>Email</p>
            <input type="text"  placeholder="Enter Email">
            
            <p>Username</p>
            <input type="text" placeholder="Enter Username">
            
            <p>Password</p>
            <input type="password" placeholder="Enter Password">
            
            <input type="submit"  value="Sign Up">
          
            <div class="login">Already a member? <a href="Sign In.php">Login</a></div>
            <p>
                <!-- read from file-->
            <?php
extract($_REQUEST);
$file=fopen("file.txt","r");
echo fread($file,filesize("file.txt"))."<br>";
fclose($file);                    
?> 
     <?php
   function exception_handler($exception) {
      echo "Fushat janë obligative " , $exception->getMessage(), "\n";
   }
    
   set_exception_handler('exception_handler');
   throw new Exception('për tu plotësuar');
   
   echo "Not Executed\n";
?>
   
   </p>
        </form>
      </div>  
    </body>
</html>
<?php
extract($_REQUEST);
$file=fopen("form-save.txt","a");
fwrite($file,"Emri :");
fwrite($file,$username."\n");
fwrite($file,"Email :");
fwrite($file,$email."\n");
fwrite($file,"Password :");
fwrite($file,$password."\n");
fclose($file);
?> 
