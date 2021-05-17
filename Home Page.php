
<?php


if(isset($_COOKIE['username']))
{
  echo "Welcome to our page ".$_COOKIE['username'];
}

session_start();
if (isset($_SESSION['num']))
 {
    $_SESSION['num'] += 1;
}
 else {
    $_SESSION['num'] = 1;
}
if($_SESSION['num']>=10)
{
  session_destroy();
}

$msg = "Ju keni vizituar faqen tone " . $_SESSION['num'];
$msg .= " here brenda ketij sesioni!";
?>
<html>

<head>
    <title>AllRounder</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/anetaretHomePage.css">
    <link rel="stylesheet" href="css/middle.css">


</head>


<body style="pointer-events:none; min-width: 1000px">
<!--  Header -->
   <!-- header -->
  <header>
    <div class="">
      <div class="topbar">
        <div class="contactNr">
          Call Us: xxxxxxxxxxxxxxxxxxxx
        </div>
        <div class="contactEm" onClick="location.href='https://mail.google.com/mail'" style="cursor:pointer;">
          Email Us: contact@mydomain.com
        </div>
        <?php
        echo ($msg);
        ?>
        <div style=" display:inline-block; float:right;">
          <form class="searchbar" action="">

            <input type="text" placeholder="" name="search">
            <button type="submit">
              <span>
                <i class="fa fa-search" aria-hidden="true"
                  style="width:2px;height:2px;right:7px;position:relative;"></i>
              </span>
            </button>

          </form>
        </div>
      </div>
  </header>
  <nav style="display:inline">
    <div class="menu">
      <div class="logo">
        <a href="Home%20page.php"><img src="images/Bags/Slider-images/Screenshot 2020-12-13 165136.png"
            style="margin-left:50px;margin-left: 0px;width:210px;height:95px;position:absolute;margin-top: 15px;"
            alt="logo">
      </div>

      <div class="main-nav">


        <ul>
          <li><a class="list" href="Home Page.php" id="active">HOMEPAGE </a></li>
        </ul>



        <ul>
          <li>
            <a class="list" href="Our-Products.php">OUR BRANDS</a>
            <div class="dropdown-content">
              <a href="Our-Products.php#Zara">ZARA</a>
              <a href="Our-Products.php#Mango">Mango</a>
              <a href="Our-Products.php#Stradivarius">Stradivarius</a>
              <a href="Our-Products.php#Hotic">Hotic</a>
            </div>


          </li>
        </ul>






        <ul>
          <li><a class="list" href="About Us.php">ABOUT US</a>
            <div class="dropdown-content">
              <a href="Privacy Policy.php">Privacy Policy</a>
              <a href="Terms Of Service.php">Terms of Service</a>
              <a href="Refund Policy.php">Refund Policy</a>
            </div>
          </li>
        </ul>



        <ul>
          <li><a class="list" href="Sign In.php" target="_blank">LOGIN</a>
            <div class="dropdown-content">
              <a href="Sign In.php" target="_blank">Signin</a>
              <a href="Sign Up.php" target="_blank">Signup</a>
            </div>
          </li>
        </ul>


        <ul>
          <li><a class="list" href="FAQ.php">FAQ</a>
            <div class="dropdown-content">
              <a href="Fun.php">Click for Fun</a>
              <a href="Info.php">Click for Info</a>
              <a href="Other.php">Other..</a>
            </div>
          </li>
        </ul>



        <ul>
          <li>
            <a class="list" href="Cart.php"><i class="fas fa-shopping-cart fa-1x"></i></a>
          </li>
        </ul>



  </nav>
  </div>

  </div>


  </div>

<!--  Slideshow -->
    <div class="slideshow-container">
        <div class="slideshow">
            <img src="images/Bags/Slider-images/4.jpg" alt="slideshow" style="width:100%;height:500px">
        </div>
        <div class="slideshow">
            <img src="images/Bags/Slider-images/5.jpg" alt="slideshow" style="width:100%;height:500px">
        </div>
        <div class="slideshow">
            <img src="images/Bags/Slider-images/6.jpg" alt="slideshow" style="width:100%;height:500px">
        </div>
        <div class="slideshow">
            <img src="images/Bags/Slider-images/7.jpg" alt="slideshow" style="width:100%;height:500px">
        </div>

        <button class="prev klik" type="button" onclick="plusSlides(-1)" style="margin-top: 180px;">
            <img src="images\shigjetam.png" alt="slideshow"
                style="width:15px; height:25px;padding-right:5px;padding-top:2px;cursor: pointer;">
        </button>

        <button class="next klik" type="button" onclick="plusSlides(1)" style="margin-top: 180px;">
            <img src="images\shigjetad.png" alt="slideshow"
                style="width:15px; height:25x;padding-left:5px;padding-top:2px;cursor: pointer;">
        </button>
    </div>


    <div class="trandiv">

        <div class="letter">
            <h1 id="newsletter"><?php
                    $array = array( ' A woman should be two things:', ' <em>Classy</em> and <em>Fabulous</em>.'); $string = implode(' ', $array);

                    echo $string;
                   ?></h1>

        </div>

        <div class="vija"></div>
<!-- Middle -->

<<?php

                class Title{
                public $title;
                function __construct($aTitle){
                $this->title = $aTitle;
                             }

                function getTitle(){
                return $this->title;
                               }
                function setTitle($title) {
                if(strlen($title)  >= 4){
                $this->title = $title;
                            }
                else {
                $this->title = "Pa titull";
                     }
                                  }
                                  }

                $title1 = new Title("Zara");
                $title2 = new Title("Mango");
                $title3 = new Title("Stradivarius");
                $title4 = new Title("Hotic");
                            ?>
        <div class="boxlarge">

            <div class="box">
                <div class="top">
                    <a href="Our-Products.php#Zara"><?php echo $title1->getTitle(); ?><img src="images/Bags/Zara/29_955resized.jpg"
                            style="width:225px; height:140px" alt="Zara"></a>
                </div>
                <div class="bot">
                    <h2 class="brand">Zara</h2>
                    <p class="description">
                        Zara SA, stylized as ZARA, is a Spanish apparel retailer based in Arteixo (A Coruña) in Galicia
                        (Spain).The company specializes in fast fashion, and products
                        <span class="hiddentext">include clothing, accessories, shoes, swimwear, beauty, and perfumes.
                            It is the largest company in the Inditex group, the world's largest apparel retailer. Zara
                            as of 2017 manages up to 20 clothing collections a year.

                        </span>
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="top">
                    <a href="Our-Products.php#Mango"><?php echo $title2->getTitle(); ?><img src="images/Bags/Mango/15_99euroResized.jpg"
                            style="width:100%;height:100%" alt="Mango"></a>
                </div>
                <div class="bot">
                    <h2 class="brand">Mango</h2>
                    <p class="description">
                        Punto Fa, S.L., trading as Mango, is a Spanish clothing design and manufacturing company,
                        founded in Barcelona, (Spain) by brothers Isak Andic and Nahman Andic.
                        Mango has <span class="hiddentext">Women's, Men's and Kids' collection. Mango has over 16,000
                            employees, 1,850 of whom work at the Hangar Design Centre and at its headquarters in Palau
                            Solità i Plegamans (Barcelona).
                        </span></p>
                </div>
            </div>



            <div class="box">
                <div class="top">
                    <a href="Our-Products.php#Stradivarius"><?php echo $title3->getTitle(); ?><img src="images/Bags/Stradivarius/12_9Resized.jpg"
                            style="width:100%;height:100%" alt="Stradivarius"></a>
                </div>
                <div class="bot">
                    <h2 class="brand">Stradivarius</h2>
                    <p class="description">
                        Stradivarius is a women's clothing fashion brand from Spain owned by the Inditex group.
                        Stradivarius was developed in 1994 as a family owned business with an innovative concept
                        <span class="hiddentext">in fashion in Barcelona, Spain. However, Stradivarius joined the
                            Inditex group in 1999 and, currently, the brand is present in 62 countries with 925 stores
                            all over the world.
                        </span>
                    </p>
                </div>
            </div>



            <div class="box">
                <div class="top">
                    <a href="Our-Products.php#Hotic"><?php echo $title4->getTitle(); ?><img src="images/Bags/HOTIC/39Resized.jpg" style="width:100%;height:100%"
                            alt="Hotic"></a>
                </div>
                <div class="bot">
                    <h2 class="brand">Hotic</h2>
                    <p class="description">
                        Hotic is a luxury fashion house based in Florence, Italy. Its product lines include handbags,
                        ready-to-wear, shoes and accessories, makeup, fragrances, and home decoration.
                        <span class="hiddentext">

                            Hotic was founded in 1921 in Florence, Tuscany. Hotic became a worldwide-known brand, an
                            icon of the Italian Dolce Vita. Following family feuds during the 1980s. </span>
                    </p>
                </div>
            </div>

        </div>

        <div class="vija"></div>



        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("slideshow");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>

    </div>



    <div style="width:100%;background-color:white;position:absolute;">

<!-- Anetaret -->
        <div class="anetaret">


            <div class="ceo">
                <p style="margin-top:50px;font-size:20px;    font-weight: bold;">Students
                    <small><a href="#" style="float: right; font-weight:400;   color: rgb(124, 156, 55);">View More
                            »</a></small>
                </p>
            </div>
            <div class="mentor">
                <p style="margin-top:50px;font-size:20px;    font-weight: bold;">Professor and Assistant
                    <small><a href="#" style="float: right;font-weight:400;    color: rgb(124, 156, 55);">View More
                            »</a></small>
                </p>
            </div>

            <div class="majtas">

                <div class="ceo1">
                    <div class="fotoceo"><img src="images/arlinda.png" style="width:48px;height:48px;" alt="arlinda">
                    </div>
                    <div class="shkrimiceo">
                        <h2 class="shkronjatceo">Arlinda Osmani</h2>
                        <p class="shkrim">Studies Computer science at University of Prishtina,
                            Went to Gjimnazi "Aleksander Xhuvani" Podujeve,
                            Lives in Podujeve.</p>
                    </div>
                </div>

                <div class="ceo2">
                    <div class="fotoceo"><img src="images/dafina.png" style="width:48px;height:48px;" alt="dafina">
                    </div>
                    <div class="shkrimiceo">
                        <h2 class="shkronjatceo">Dafina Muhaxheri</h2>
                        <p class="shkrim">Studies Computer science at University of Prishtina,
                            Went to Gjimnazi "Skenderbeu" Kaçanik,
                            Lives in Kaçanik.</p>
                    </div>
                </div>

                <div class="ceo3">
                    <div class="fotoceo"><img src="images/albana.png" style="width:48px;height:48px;" alt="albana">
                    </div>
                    <div class="shkrimiceo">
                        <h2 class="shkronjatceo">Albana Rexhepi</h2>
                        <p class="shkrim">Studies Computer science at University of Prishtina,
                            Went to highschool "Aleksander Xhuvani" Podujeve,
                            Lives in Podujeve.</p>
                    </div>
                </div>


            </div>
            <div class="djathtas">
                <div class="mentor1"><img src="images/imgM.png" style="width:225px;height:225px;" alt="profesori"></div>
                <div class="mentor2"><img src="images/imgM.png" style="width:225px;height:225px;" alt="asistenti"></div>
                <div class="shkrimimentor1">
                    <p style="padding-top: 15px;"><span style="color:black;font-weight:900">Name:</span>Ermir Rogova
                        <br>
                        <a href="#" style="    color: rgb(124, 156, 55); ">View Profile »</a>
                    <p>
                </div>
                <div class="shkrimimentor2">
                    <p style="padding-top: 15px;"><span style="color:black;font-weight:900">Name:</span>Korab Rrmoku
                        <br>
                        <a href="#" style="    color: rgb(124, 156, 55);">View Profile »</a>
                    <p>
                </div>
            </div>
        </div>


 <!--  Footer -->
        <footer>
            <div style="width:100%;height:auto;background-color:rgb(34,34,34); ">
                <div id="wrapper">
                    <div>
                        <h3>ABOUT US</h3>
                        <br>
                        <img src="images/Bags/Slider-images/footer-bag.png" alt="About|US"
                            style="outline-style: dotted;">
                        <br>
                        <p>In 1852, Francis Wolle, a schoolteacher, invented the first machine to mass-produce paper
                            bags.
                            Wolle and his brother patented the machine and founded the Union Paper Bag Company.</p>
                        <br>
                        <p><a style="text-decoration: none;color:rgb(124,156,55);font-family:'Niramit','Sorts Mill Goudy','sans serif';
     font-size:16px;" href="">Read more &#187;</a></p>
                    </div>
                    <div>
                        <h3>LINK BLOCK</h3>
                        <ul id="arrow">
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Metalic Pink Bag</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Black Leather Bag</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Modern Pastels Bag</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Classy Red Bag</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Snake Print Bag</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Modern Mustard Bag</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Chique Black Bag</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Gen Z Lilac Bag</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Red Leather Bag</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Satchel Bag</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Belt Bag</a></li>
                            <li><a style="text-decoration: none" href=""><span
                                        style="color: rgb(102,102,102)">&#187;</span>
                                    Drawstring Bag</a></li>
                        </ul>

                    </div>
                    <div>
                        <h3>FROM THE BLOG</h3>
                        <div class="small">
                            <h3>Lifespan of a Bag</h3>
                            <p>We assess the physical, fashion-related and financial attributes that help a purse stand
                                the test of time.</p> <br>
                            <p><a style="text-decoration: none;color:rgb(124,156,55)" href="">Read more &#187;</a></p>
                        </div>
                        <div class="small">
                            <br>
                            <h3>Lifespan of a Bag</h3>
                            <p>We assess the physical, fashion-related and financial attributes that help a purse stand
                                the test of time.</p>
                            <br>
                            <p><a style="text-decoration: none;color:rgb(124,156,55)" href="">Read more &#187;</a></p>
                        </div>
                        <!-- game -->
                    </div>
                    <div>
                        <h3>CONTACT US</h3>
                        <div class="small">
                            <p>TEL: xxxx xxxxxxxx</p>
                            <br>
                            <p>Fax: xxxxxxxx</p>
                            <br>
                            <address id="email">Email:<a style="text-decoration:none;color:rgb(124,156,55)"
                                    href="">contact@mydomain.com</a></address>
                                    <!-- date and time -  built-in function-->
                             <?php
                            $date = date('d-m-y h:i:s');
                            echo $date; ?>
                        </div>

                        <div class="small">
                            <h3>NEWSLETTER</h3>
                            <br>
                            <label class="form" for="name"></label>
                            <input type="text" id="name" name="name" placeholder="  Name">
                            <br><br>
                            <label class="form" for="email"></label>
                            <input type="text" id="email" name="email" placeholder="  Email">
                            <br> <br>
                            <button> <b>Submit</b> </button>
                        </div>
                    </div>
                    <br><br><br>
                    <hr style="padding: 0px;
                background-color: black;
                margin-bottom: 5px;
                margin-top: 10px;
                border: 1px solid black;">
                    <p id="thelast"><span id="grey">COPYRIGHT &COPY; <?php
                    $topic = "-2021";
                    //Zevendeson vizat me hapesira
                    $stringu_i_ri = str_replace('-', ' ', $topic);
                    echo $stringu_i_ri;
                    ?> -All rights reserved-
                            <abbr title="AllRounder">AR</abbr></span></p>
                </div>

            </div>
    </div>
    </footer>
    <script type="text/javascript">
        function pointer() {
            document.getElementsByTagName("BODY")[0].style.pointerEvents = "auto";
        } pointer();

    </script>
</body>


</html>
