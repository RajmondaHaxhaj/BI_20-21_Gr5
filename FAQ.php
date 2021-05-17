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
                
                 .HCWHY
                 {
                     padding: 49px;
                     text-align: center;
                     color: whitesmoke;
                 }
                 .FAQSB 
                 {
                     position: absolute;
                     top: 275px;
                     left: 50%;
                     transform: translate(-50%, -50%);
                     background: #2f3640;
                     height: 40px;
                     border-radius: 40px;
                     padding: 10px;
                 }
                 .FAQSB:hover > .FAQSB-txt 
                 {
                     width: 340px;
                     padding: 0 6px;
                 }
                 .FAQSB:hover > .FAQSB-btn 
                 {
                     background: grey;
                     color: black;
                 }
                 .FAQSB-btn
                 {
                     float: right;
                     width: 40px;
                     height: 40px;
                     border-radius: 50%;
                     background: #2f3640;
                     display: flex;
                     justify-content: center;
                     align-items: center;
                     transition: 0.4s;
                     color: white;
                     cursor: pointer;
                 }
                 .FAQSB-btn > i 
                 {
                     font-size: 30px;
                 }
                 .FAQSB-txt 
                 {
                     border: none;
                     background: none;
                     outline: none;
                     float: left;
                     padding: 0;
                     color: white;
                     font-size: 16px;
                     transition: 0.4s;
                     line-height: 40px;
                     width: 0px;
                 }
                 #canva
                 {
                     background: black;
                     position: absolute;
                     z-index: -1;
                 }
                 a:link
                 {
                     text-decoration: none;
                 }
                 .Question
                 {
                     display: block;
                 }
                 .Question i
                 {
                     padding-right: 10px;
                 }
                 .Question a
                 {
                     border-top: solid 0.5px lightgray;
                     border-bottom: solid 1px lightgray;
                     font-weight: 700;
                     color: black;
                     cursor: pointer;
                     padding: 12px;
                 }
                 .Question a:hover
                 {
                     background-color: lightgray;
                 }
                 #A_bags
                 {
                     display: none;
                     padding-left: 37px;
                 }
                 #A_general
                 {
                     display: none;
                     padding-left: 37px;
                 }
                 #AA_bags1
                 {
                     display: none;
                     padding-left: 37px;
                 }#AA_general1
                 {
                     display: none;
                     padding-left: 37px;
                 }
                 #AA_general2
                 {
                     display: none;
                     padding-left: 37px;
                 }#AA_bags3
                 {
                     display: none;
                     padding-left: 37px;
                 }
                 #AA_bags2
                 {
                     display: none;
                     padding-left: 37px;
                 }
                 #AA_general3
                 {
                     display: none;
                     padding-left: 37px;
                 }
                 .QA
                 {
                     margin: 30px;
                 }
                 .Question p
                 {
                     padding: 10px;
                 }
                 @media only screen and (max-width: 1000px)
                 {
                     .FAQSB
                     {
                         left: 500px;
                     }
                     .FAQSB:hover > .FAQSB-btn
                     {
                         position: absolute;
                         top: 10px;
                         left: 320px;
                     }
                 }
                 </style>
                  <style type="text/css">
                    #canva{
                        
                            padding: 5px 20px;
                            
                            height: 500px;
                            width: 100%;
                            text-align: center;
                
                            background: -webkit-gradient(
                                linear, left, top, right bottom, 
                                color-stop(12%, black),
                                color-stop(24%, darkgreen),
                                color-stop(36%, green),
                                color-stop(48%,lime),
                                color-stop(60%, Green),
                                color-stop(72%, darkgreen),
                                color-stop(84%, black),
                            );
                            background: linear-gradient(
                                135deg, black 12%, darkgreen 24%, green 36%, lime 48%,
                                green 60%, darkgreen 72%, black 84%
                            );
                             }
                            #radial{
                                background: -webkit-radial-gradient(bottom left, darkgreen, green, lime);
                                background: radial-gradient(bottom left, darkgreen, green, lime);
                            }
                                         
                     
                    </style>
                
                 <script src="https://code.jquery.com/jquery-latest.js"></script>
                 <script>
                     $(function()
                     {
                         $('#Q_bags').click(function()
                         {
                             $('#A_bags').toggle();
                             $(this).find('i').toggleClass('fa-plus-circle fa-minus-circle');
                             event.preventDefault();
                         });
                     });
                     $(function()
                     {
                         $('#Q_general').click(function()
                         {
                             $('#A_general').toggle();
                             $(this).find('i').toggleClass('fa-plus-circle fa-minus-circle');
                             event.preventDefault();
                         });
                     });
                     $(function()
                     {
                         $('#A_bags1').click(function()
                         {
                             $('#AA_bags1').toggle();
                             $(this).find('i').toggleClass('fa-plus-circle fa-minus-circle');
                             event.preventDefault();
                         });
                     });
                     $(function()
                     {
                         $('#A_bags2').click(function()
                         {
                             $('#AA_bags2').toggle();
                             $(this).find('i').toggleClass('fa-plus-circle fa-minus-circle');
                             event.preventDefault();
                         });
                     });
                     $(function()
                     {
                         $('#A_bags3').click(function()
                         {
                             $('#AA_bags3').toggle();
                             $(this).find('i').toggleClass('fa-plus-circle fa-minus-circle');
                             event.preventDefault();
                         });
                     });
                     $(function()
                     {
                         $('#A_general1').click(function()
                         {
                             $('#AA_general1').toggle();
                             $(this).find('i').toggleClass('fa-plus-circle fa-minus-circle');
                             event.preventDefault();
                         });
                     });
                     $(function()
                     {
                         $('#A_general2').click(function()
                         {
                             $('#AA_general2').toggle();
                             $(this).find('i').toggleClass('fa-plus-circle fa-minus-circle');
                             event.preventDefault();
                         });
                     });
                     $(function()
                     {
                         $('#A_general3').click(function()
                         {
                             $('#AA_general3').toggle();
                             $(this).find('i').toggleClass('fa-plus-circle fa-minus-circle');
                             event.preventDefault();
                         });
                     });
                     window.addEventListener("resize", resizeCanvas, false);
      
                     function resizeCanvas(e) 
                     {
                         var myCanvas = document.getElementById("canva");
                         if(document.documentElement.clientWidth>1000)
                         myCanvas.width = document.documentElement.clientWidth;
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
         
           
        
                     <canvas id="canva" style="min-width:1000px ; max-height:250px"></canvas>
                     <h1 class="HCWHY">How can we help you ?</h1>
                     <div class="FAQSB">
                         <input type="text"  class="FAQSB-txt" placeholder="Describe your issue"/>
                         <a class="FAQSB-btn">
                             <i class="fa fa-wrench" aria-hidden="true"></i>
                         </a>
                     </div>
                     <div>
                         <p class="HCWHY">you can also browse the topics below to find what you are looking for</p>
                     </div>
                     <div class="QA">
                         <div class="Question">
                                 <a class="Question" id="Q_bags" href="#"><i class="fas fa-plus-circle"></i> GENERAL</a>
                                     <div id="A_bags">
                                         <div class="Question">
                                             <a id="A_bags1" class="Question" href="#"><i class="fas fa-plus-circle"></i> How do i activate my account?</a>
                                                 <div class="Question" id="AA_bags1">
                                                     <p>The instructions to activate your account will be sent to your email once you have submitted the registration form. If you did not receive this email, your email service provider’s mailing software may be blocking it. You can try checking your junk / spam folder or contact us at help@timepiecestore.com</p>
                                                 </div>
                                         </div>
                                         <div class="Question">
                                             <a  id="A_bags2" class="Question" href="#"><i class="fas fa-plus-circle"></i> How can i change my shipping address?</a>
                                                 <div class="Question" id="AA_bags2">
                                                     <p>By default, the last used shipping address will be saved into to your Timepiece Store account. When you are checking out your order, the default shipping address will be displayed and you have the option to amend it if you need to.</p>
                                                 </div>
                                         </div>
                                         <div class="Question">
                                             <a  id="A_bags3" class="Question" href="#"><i class="fas fa-plus-circle"></i> How long will it take for my order to arrive after i make payment?</a>
                                                 <div class="Question" id="AA_bags3">
                                                     <p>Members who ship their orders within Kosovo should expect to receive their orders within five (5) to ten (10) working days upon payment verification depending on the volume of orders received.
                                                         <br><br>
                                                         If you experience delays in receiving your order, contact us immediately and we will help to confirm the status of your order.</p>
                                                 </div>
                                         </div>
                                     </div>
                         </div>
                         <div class="Question">
                                 <a class="Question" id="Q_general" href="#"><i class="fas fa-plus-circle"></i> PAYMENT</a>
                                 <div id="A_general">
                                     <div class="Question">
                                         <a id="A_general1" class="Question" href="#"><i class="fas fa-plus-circle"></i> What are the payment methods available?</a>
                                             <div class="Question" id="AA_general1">
                                                 <p>At the moment, we only accept Credit/Debit cards and Paypal payments.</p>
                                             </div>
                                     </div>
                                     <div class="Question">
                                         <a id="A_general2" class="Question" href="#"><i class="fas fa-plus-circle"></i> Can i pay using paypal without a paypal account?</a>
                                             <div class="Question" id="AA_general2">
                                                 <p>Yes! It is commonly misunderstood that a Paypal account is needed in order to make payments through Paypal. The truth is you DO NOT need one, although we strongly recommend you sign up to enjoy the added ease of use.
                                                     <br><br>
                                                     Without a Paypal account, all you need is any Debit/Credit card stated below that is supported by Paypal.
                                                     <br><br>
                                                     By using Paypal, we can process & deliver your orders to you in a shorter time. Paypal is the easiest & most secure way to make payment online. No account needed.
                                                     <br><br>
                                                     For more details, go to the Paypal page to see how Paypal works for you.</p>
                                             </div>
                                     </div>
                                     <div class="Question">
                                         <a id="A_general3" class="Question" href="#"><i class="fas fa-plus-circle"></i> How do i cancel my orders before i make a payment?</a>
                                             <div class="Question" id="AA_general3">
                                                 <p>After logging into your account, go to your Shopping Cart. Here, you will be able to make payment or cancel your order. <br><br>Note: We cannot give refunds once payment is verified.</p>
                                             </div>
                                     </div>
                                 </div>
                         </div>
                     </div>
                 <br><br><br>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.273795553194!2d21.15913821450856!3d42.655553024383444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee896b552d7%3A0x31bf5e925cb705a3!2sThe%20Faculty%20of%20Mathematics%20and%20Natural%20Sciences!5e0!3m2!1sen!2s!4v1609364388740!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
