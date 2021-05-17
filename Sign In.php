
<html>

<head>
    <title>Sign in</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">

    <style>
        body
        {
            margin: 0;
            padding: 0;
            background-image: url(sign.jpg);
            background-size: cover;
            background-origin: content-box;
            background-position: center;
            font-family: 'sans sefir';
        }
        .loginbox
        {
            width: 450px;
            height: 450px;
            background: #e1e1e1e1;
            color: #ffffffff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 90px 60px;
        }
        .avatar
        {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -10%;
            left: calc(50% - 50px);
        }
        h1
        {
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 27px;
        }
        .loginbox p
        {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        .loginbox input
        {
            height: 20px;
            width: 320px;
            margin-bottom: 10px;
            margin: 5px;
            border: none;
        }
        .loginbox
        input[type="text"],
        input[type="password"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            text-align: center;
            outline: none;
            height: 40px;
            font-size: 16px;
            text-decoration-color: black;
        }
        .loginbox
        input[type="submit"]
        {
            height: 40px;
            background: deepskyblue;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }
        .loginbox
        input[type="submit"]:hover
        {
            cursor: pointer;
            background-color: gold;
            color: #000;
            border-radius: 22px;
            font-size: 20px;
            height: 45px;
            transition: .5s
        }
        .loginbox a
        {
            text-decoration: none;
            font-size: 15px;
            line-height: 20px;
            color: black;
        }
        .loginbox a:hover
        {
            cursor: pointer;
            color: darkgreen;
            font-size: 20px;
            transition: .5s;
        }
        .login
        {
            top: 55%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, 45%);
            padding: 90px 10px;
        }
        .create a
        {
            top: 70%;
            left: 50%;
            position: absolute;
            text-align: center;
            font-size: 19px;
            transform: translate(-50%, 10%);
        }
        li
        {
            list-style: none;
            margin: 10px 30px;
            display: inline-block;
            font-size: 20px;
            padding: 20px 20px;
            color: black;
            border: none;
            border-radius: 50%;
            transition: .5s;
        }
        .socialmedia
        {
            position: absolute;
            top: 78%;
            left: 50%;
            transform: translate(-53%, -50%);
        }
        li:hover
        {
            color: #292929;
            border: 2px solid darkblue;
            transition: .5s;
        }
    </style>
</head>
<body>
    <script type="text/javascript">
        function dayandnight()
        {
            var current = new Date();
            var day_night = current.getHours();
            if (day_night > 5 && day_night < 16)
            {
                //Day
                var bodyColor = document.getElementsByTagName("BODY")[0];
                bodyColor.style.backgroundImage = "url('images/wallpaper1.jpg')";
                document.write("Day");
            }
            else
            {
                //Night
                var bodyColor = document.getElementsByTagName("BODY")[0];
                bodyColor.style.backgroundImage = "url('images/wallpaper2.jpg')";
                document.write("Night");
            }
        }
        dayandnight();
    </script>
    <div class="loginbox" style=" margin-top: 50px;   height: 540px;">
        <img src="images/avatarW.png" class="avatar">

        <form action="validate.php" method="post" style="margin-top: 30px;">
            <p>
                Username
            </p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>
                Password
            </p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit"  name="login" value="Login">
        </form>
        <div class="Create">
            <a href="Sign UP.php">
                Create Account...
            </a>
        </div>
    </div>
    <form class="socialmedia">
        <ul style="    margin-top: 90px;">
            <li>
                <a href="https://web.facebook.com">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://twitter.com">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
        </ul>
    </form>
</body>
</html>
