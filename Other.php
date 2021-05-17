<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/middle.css">
  <link rel="stylesheet" href="css/anetaretHomePage.css">
  <link rel="stylesheet" href="css/reset.css">
  <title>BagsFAQ</title>
  <style>
    #dd1 {
      padding-top: 10px;
      padding-bottom: 200px;
      margin: 100px;
      padding-left: 1px;

    }

    #example2 {
      border: 2px ridge black;
      padding-top: 10px;
      border-radius: 2em 1em 4em / 0.5em 3em;
      width: 120px;
      height: 170px;
      float: left;
      box-shadow: 5px 10px black;

    }
    
    #example2 ol li a {
      text-decoration: none;
      font-style: italic;
      font-family: Georgia, Serif;
      color: white;

    }

    #expBag {
      float: center;
      border: 20px solid transparent;
      padding: 15px;
      border-image: url(images/hermesLogo.png) 30% round;
      width: 200px;

    }

    #expBag img {
      width: 180px;
      height: 150px;
    }

    div#myDiv1 {
      width: 300px;
      height: 100px;
      background-color: pink;
      border: 1px solid black;
      float: left;
      margin-left: 20px;
      margin-top: -280px;
    }

    div#myDiv {
      -ms-transform: rotate(20deg);
      /* IE 9 */
      -webkit-transform: rotate(20deg);
      transform: rotate(20deg);
      /* Standard syntax */
      width: 300px;
      height: 100px;
      background-color: pink;
      border: 1px solid black;
      float: left;
      margin-left: 20px;
      margin-top: -200px;

    }

    body {
      background-image: url("images/bp.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
      background-color: black;
      height: 200px;
      color: white;




    }
  </style>



  <script>

    function myFunction() {
      var message, x;
      message = document.getElementById("p01");
      message.innerHTML = "";
      x = document.getElementById("demo").value;
      try {
        if (x == "") throw "empty";
        if (isNaN(x)) throw "not a number";
        x = Number(x);
        if (x < 5) throw "too low";
        if (x > 10) throw "too high";
      }
      catch (err) {
        message.innerHTML = "Input is " + err;
      }
    }


    function myFunction1() {
      var y = 100;
      document.getElementById("demo1").innerHTML = y.MAX_VALUE;
    }

    function myFunction2() {
      var num = 5.56789;
      var n = num.toExponential();
      document.getElementById("demo2").innerHTML = n;
    }

    function myFunction3() {
      var num1 = 15;
      var n1 = num1.toString();
      document.getElementById("demo3").innerHTML = n1;
    }



    function myFunction4() {
      var res = "";
      res = res + Number.isNaN(123) + ": 123<br>";
      res = res + Number.isNaN(-1.23) + ": -1.23<br>";
      res = res + Number.isNaN(5 - 2) + ": 5-2<br>";
      res = res + Number.isNaN(0) + ": 0<br>";
      res = res + Number.isNaN('123') + ": '123'<br>";
      res = res + Number.isNaN('Hello') + ": 'Hello'<br>";
      res = res + Number.isNaN('2005/12/12') + ": '2005/12/12'<br>";
      res = res + Number.isNaN('') + ": ''<br>";
      res = res + Number.isNaN(true) + ": true<br>";
      res = res + Number.isNaN(undefined) + ": undefined<br>";
      res = res + Number.isNaN('NaN') + ": 'NaN'<br>";
      res = res + Number.isNaN(NaN) + ": NaN<br>";
      res = res + Number.isNaN(0 / 0) + ": 0 / 0<br>";

      document.getElementById("demo4").innerHTML = res;
    }

    function myFunction5() {
      var str1 = document.getElementById("demo5").innerHTML;
      var res1 = str1.replace("Gucci Bag", "Channel Bag");
      document.getElementById("demo5").innerHTML = res1;
    }


    function myFunction6() {
      var str2 = "The rain in London stays mainly in the plain.";
      var res2 = str2.match(/in/g);
      document.getElementById("demo6").innerHTML = res2;
    }

    function Person(first, last, age, eye) {
      this.firstName = first;
      this.lastName = last;
      this.age = age;
      this.eyeColor = eye;
      this.nationality = "English";
    }

    var myFather = new Person("John", "Doe", 50, "blue");
    var myMother = new Person("Sally", "Rally", 48, "green");

    document.getElementById("demo7").innerHTML = "The nationality of my father is " + myFather.nationality + ". The nationality of my mother is " + myMother.nationality;
// Check browser support
if (typeof(Storage) !== "undefined") 
{
  // Store
  localStorage.setItem("lastname", "Smith");
  // Retrieve
document.getElementById("result").innerHTML = localStorage.getItem("lastname");
} 
else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
// Check browser support
if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("lastname", "John");
  // Retrieve
  document.getElementById("result1").innerHTML = sessionStorage.getItem("lastname");
} else {
  document.getElementById("result1").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  </script>


</head>




  <body style="min-width:1000px">



    <header>
      <div class="">
          <div class="topbar">
              <div class="contactNr">
                  Call Us: xxxxxxxxxxxxxxxxxxxx
              </div>
              <div class="contactEm" onClick="location.href='https://mail.google.com/mail'" style="cursor:pointer;">
                  Email Us: contact@mydomain.com
              </div>
              <div style=" display:inline-block; float:right;">
                  <form name="myForm" class="searchbar" action="https://www.rogova.info/test/feedback.php" onsubmit="return validateForm()">
  
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
                      <a href="Home%20page.html"><img src="images/Bags/Slider-images/Screenshot 2020-12-13 165136.png"
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
                          <li><a class="list"  href="FAQ.php">FAQ</a>
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
  


  <div id="dd1">
    <h3 style="color:pink; font-style:italic;font-family:'Times New Roman';"> Top 5 brands for luxury bags</h3><br>
    <div id="example2">

      <ol>
        <li><a target="_blank" href="https://www.katespade.co.uk/en-gb/handbags/">Kate Spade</a></li><br>
        <li><a target="_blank" href="https://www.michaelkors.com/handbags/view-all-handbags/_/N-283i">Michael Kors</a>
        </li><br>
        <li><a target="_blank"
            href="https://www.lyst.com/shop/chanel-bags/?atc_campaign=FEED+all++-+high+performance+countries&atc_content=All&atc_country=EU&atc_grouping=DSA&atc_medium=cpc&atc_source=google&atc_term=&sem_id=A411882234&atc_label=&gclid=EAIaIQobChMIpuzU8_j37QIVF-J3Ch1sZwMpEAAYASAAEgKU8_D_BwE">Chanel</a>
        </li><br>
        <li><a target="_blank" href="https://www.gucci.com/us/en/ca/women/handbags-c-women-handbags">Gucci</a></li><br>
        <li><a target="_blank"
            href="https://www.hermes.com/us/en/category/women/bags-and-small-leather-goods/bags-and-clutches/#||Category">Hermes</a>
        </li>
      </ol>
    </div>
    <div id="expBag" style="margin-right: 200px;">
      <figure><img src="images/expensive.png" width="100" height="80">
        <figcaption><em> The most expensive bag-from Hermès</em></figcaption>
      </figure>
    </div>
  </div>
  <div id="myDiv1">
    Do you know what is the most common item on a bag?
  </div>
  <div id="myDiv">
    Apparently, it's a purse.
  </div>

  <div class="scaling"></div>

  <p>Please input a number between 5 and 10:</p>

  <input id="demo" type="text">
  <button type="button" onclick="myFunction()">Test Input</button>
  <p id="p01"></p>
  <p>Click the button to display the largest possible number in JavaScript.</p>
  <div><button onclick="myFunction1()">Try it</button></div><br>

  <div>
    <p id="demo1"></p>
  </div>
  <div>
    <p>Click the button to display the exponential notation of a specified number.</p>

    <button onclick="myFunction2()">Try it</button>

    <p id="demo2"></p>
  </div>

  <div>
    <p>Click the button to display the formatted number.</p>

    <button onclick="myFunction3()">Try it</button>

    <p id="demo3"></p>
  </div>


  <div>
    <p>Click the button to check whether a number is NaN.</p>

    <button onclick="myFunction4()">Try it</button>

    <p id="demo4"></p>

    <p><strong>Note:</strong> The Number.isNaN() function is not supported in IE 11 (and earlier versions).</p>

  </div>
  <br>
  <div>

    <p>Click the button to replace "Gucci Bag" with "Channel Bag":</p>

    <p id="demo5">Bought a Gucci Bag!</p>

    <button onclick="myFunction5()">Try it</button>
  </div>
  <br>
  <div>
    <p>Click the button to perfom a global search for the substring "in" in a string, and display the matches.</p>

    <button onclick="myFunction6()">Try it</button>

    <p id="demo6"></p>

  </div><br>
  <div>
    <p id="demo7"></p>
  </div>

  <div id="images1"></div>
      <div id="result"></div>
<div id="result1"></div>
  <!--Footer-->
  
<!--Footer-->

<!--Footer-->
<footer>
    <div style="width:100%;
                height:auto;
                background-color:rgb(34,34,34); ">
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
                <p>
                    <a style="text-decoration: none;
                              color:rgb(124,156,55);
                              font-family:'Niramit','Sorts Mill Goudy','sans serif';
                              font-size:16px;" href="">Read more &#187;
                    </a>
                </p>
            </div>
            <div>
                <h3>LINK BLOCK</h3>
                <ul id="arrow">
                    <li>
                        <a style="text-decoration: none" href=""><span
                                style="color: rgb(102,102,102)">&#187;</span>
                            Metalic Pink Bag
                        </a>
                    </li>
                    <li>
                        <a style="text-decoration: none" href=""><span
                                style="color: rgb(102,102,102)">&#187;</span>
                            Black Leather Bag
                        </a>
                    </li>
                    <li>
                        <a style="text-decoration: none" href=""><span
                                style="color: rgb(102,102,102)">&#187;</span>
                            Modern Pastels Bag
                        </a>
                    </li>
                    <li>
                        <a style="text-decoration: none" href=""><span
                                style="color: rgb(102,102,102)">&#187;</span>
                            Classy Red Bag
                        </a>
                    </li>
                    <li>
                        <a style="text-decoration: none" href=""><span
                                style="color: rgb(102,102,102)">&#187;</span>
                            Snake Print Bag
                        </a>
                    </li>
                    <li>
                        <a style="text-decoration: none" href=""><span
                                style="color: rgb(102,102,102)">&#187;</span>
                            Modern Mustard Bag
                        </a>
                    </li>
                    <li>
                        <a style="text-decoration: none" href="">
                            <span
                                style="color: rgb(102,102,102)">&#187;
                            </span>
                            Chique Black Bag
                        </a>
                    </li>
                    <li>
                        <a style="text-decoration: none" href="">
                            <span
                                style="color: rgb(102,102,102)">&#187;
                            </span>
                            Gen Z Lilac Bag</a></li>
                    <li>
                        <a style="text-decoration: none" href="">
                            <span
                                style="color: rgb(102,102,102)">&#187;
                            </span>
                            Red Leather Bag
                        </a>
                    </li>
                    <li>
                        <a style="text-decoration: none" href="">
                            <span
                                style="color: rgb(102,102,102)">&#187;
                            </span>
                            Satchel Bag
                        </a>
                    </li>
                    <li>
                        <a style="text-decoration: none" href="">
                            <span
                                style="color: rgb(102,102,102)">&#187;
                            </span>
                            Belt Bag</a>
                    </li>
                    <li>
                        <a style="text-decoration: none" href="">
                            <span
                                style="color: rgb(102,102,102)">&#187;
                            </span>
                            Drawstring Bag
                        </a>
                    </li>
                </ul>

            </div>
            <div>
                <h3>FROM THE BLOG</h3>
                <div class="small">
                    <h3>Lifespan of a Bag</h3>
                    <p>We assess the physical, fashion-related and financial attributes that help a purse stand
                        the test of time.</p> <br>
                    <p>
                        <a style="text-decoration: none;
                                  color:rgb(124,156,55)" href="">
                            Read more &#187;
                        </a>
                    </p>
                </div>
                <div class="small">
                    <br>
                    <h3>Lifespan of a Bag</h3>
                    <p>
                        We assess the physical, fashion-related and financial attributes that help a purse stand
                        the test of time.
                    </p>
                    <br>
                    <p>
                        <a style="text-decoration: none;
                                  color:rgb(124,156,55)" href="">
                            Read more &#187;
                        </a>
                    </p>
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
                    <address id="email">Email:
                        <a style="text-decoration:none;color:rgb(124,156,55)"
                            href="">contact@mydomain.com
                        </a>
                    </address>
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
                    <button> 
                        <b>Submit</b> 
                    </button>
                </div>
            </div>
            <br><br><br>
            <hr style=" padding: 0px;
                        background-color: black;
                        margin-bottom: 5px;
                        margin-top: 10px;
                        border: 1px solid black;">
            <p id="thelast">
                <span id="grey">COPYRIGHT &COPY; 2021-All rights reserved-
                    <abbr title="AllRounder">AR</abbr>
                </span>
            </p>
        </div>

    </div>
</div>
</footer>


</body>

</html>
