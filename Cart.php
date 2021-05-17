<!DOCTYPE html>
<html>
    <head>
         <title>cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/Cart.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rufina">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">


    <script src="script/cartscript.js"></script>

        
   
 
    </head>
<body onload="fotot()">

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
                    <form class="searchbar" action="">
    
                        <input type="text" placeholder="" name="search">
                        <button type="submit">
                            <span>
                                <i class="fa fa-search" aria-hidden="true"
                                    style="width:2px;
                                           height:2px;
                                           right:7px;
                                           position:relative;">
                                </i>
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
                                style="margin-left:50px;
                                        margin-left: 0px;
                                        width:210px;
                                        height:95px;
                                        position:absolute;
                                        margin-top: 15px;"
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
        
    
    
    
    
    
    
    
    
    
  
    <div class="hiddentext"><h1>There are no items in your cart</h1>
    
        <div id="continueshopping" onClick="location.href='Our-Products.html'">
            <p>Continue shopping<p>
        </div>
    
    </div>
   
   <div class="cartbox" style="width: 100%;">
   <div class="productbox">
       
       
       <div> <img  class="product" src="" style="margin-left: 0;" >
       </div>
   
   
   
   
   
   </div>
   <div class="price" style="    margin-right: 0;
   margin-left: -190px;">
       <div class="pricebox">
           <h1 >
               <em class="name">
               </em>
           </h1>
       <h3>Brand:  
           <span class="brand"></span>
       </h3>
       <h1>
           <span class="cmimi"></span>USD
       </h1>
       </div>
       <div class="productbutton">
           <button onClick="decrement()">-</button>
           <div>
               <form >
                   <input  type="text"  class="textbox" value="1" >
               </form>
           </div>
           <button  onClick="increment()">+</button>
       </div>
   
   
   
       <script>
            var n = 1;
         
function increment(){

   
   
    if(n>=0){n++
   
    document.getElementsByClassName("textbox")[0].value=n;
    
    var x = document.getElementsByClassName("cmimi2")[0].textContent;
      document.getElementsByClassName("cmimi1")[0].innerHTML=x*n;     
    }

  
    
    
}
           
function decrement(){


  
   if(n>0){--n
   
   document.getElementsByClassName("textbox")[0].value=n;
    
    var x = document.getElementsByClassName("cmimi2")[0].textContent;
      document.getElementsByClassName("cmimi1")[0].innerHTML=x*n;  
   }

  
  
}
           
           
           
       </script>
   
   </div>
    <div class="info">
        <div class="priceinfo">
            <h3>Çmimi:  $<span class="cmimi1"></span>
                <span class="cmimi2" style="display:none;">800</span>,00USD
            </h3> 
            <br>

<p>USA between 5-10 days from shipping date;
<br>
CANADA between 10-20 days from shipping date;
<br>
EUROPE between 10-20 days from shipping date;
<br>
AUSTRALIA between 10-20 days from shipping date;
<br>
ALL OTHERS: between 10-30 days from shipping date; .</p>
<i> For orders shipped outside of the Kosovo,
    customers are responsible for paying all import duties and taxes.</i>
        
        
        
        </div>
        
        
        
        
        
      <div id="checkout" onClick="location.href='Our-Products.php#3'" style="background-color: darkgray;border-radius: 50px;"><p>Checkout<p></div>
        <div id="continue" onClick="location.href='Our-Products.php'"><p>Continue shopping<p></div>
   
   </div>
 

   
   
   
   
   </div>
   
   
   
   
   
   
       
     
       
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
