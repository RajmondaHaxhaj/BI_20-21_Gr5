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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <title>BagsFAQ</title>
<style>
@font-face {
  font-family: myFont;
  src: url(fonts/PlayfairDisplay-VariableFont_wght.ttf);
}
#fontTitle{
font-family:myFont;
}
#div1, #div2 {
  float: left;
  width: 150px;
  height: 100px;
  margin: 10px;
  padding: 10px;
  border: 1px solid black;
}

#dd1{
padding:100px;
margin:100px;
padding-left:1px;
padding-top:100px;
}

#note{
width:150px;
height:80px;
background-color:#D83C2D;
color:white;
text-align:left;
position:relative;
left:-450px;
top:150px;
border:1px dashed black;
-webkit-transform:translate(30px,20px);
-ms-transform:translate(30px,20px);
transform:translate(30px,20px);
}

.scaling{
padding: 50px;
  background-color:#D0312D;
  transition: transform .2s;
  width: 40px;
  height: 40px;
  margin: 0 auto;

}
  .scaling:hover{
-ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5);
}        
   
.scalingX{
  margin: 50px;
  width: 200px;
  height: 50px;
  background-color: purple;
  border: 1px solid black;
color:white;
padding:10px;
 
}
.scalingX:hover{
 -ms-transform: scaleX(2); /* IE 9 */
-webkit-transform: scaleX(2); 
  transform: scaleX(2); /* Standard syntax */

}

.scalingY{
  margin: 50px;
  width: 200px;
  height: 50px;
  background-color: blue;
  border: 1px solid black;
color:white;
padding:10px;
 
}
.scalingY:hover{
 -ms-transform: scaleY(0.5); /* IE 9 */
-webkit-transform: scaleY(0.5); 
  transform: scaleY(0.5); /* Standard syntax */

}


.rotateH{
  margin: 50px;
  width: 200px;
  height: 50px;
  background-color: green;
  border: 1px solid black;
color:white;
padding:10px; 
}
.rotateH:hover{
 -ms- transform: rotateX(150deg); /* IE 9 */
-webkit- transform: rotateX(150deg);
 transform: rotateX(150deg);
}

.rotateV{
  margin: 50px;
  width: 200px;
  height: 50px;
  background-color: orange;
  border: 1px solid black;
color:white;
padding:10px; 
}
.rotateV:hover{
 -ms- transform: rotateY(150deg); /* IE 9 */
-webkit- transform: rotateY(150deg);
 transform: rotateY(150deg);
}

.skewing{
  margin: 50px;
  width: 200px;
  height: 50px;
  background-color: yellow;
  border: 1px solid black;
color:white;
padding:10px;
 
}
.skewing:hover{
 -ms-transform: skew(20deg); /* IE 9 */
-webkit-transform: skew(20deg); 
  transform: skew(20deg); /* Standard syntax */

}


#anime{
  width: 50px;
  height: 50px;
  -webkit-border-radius:50px;
-ms-border-radius:50px;
border-radius:50px;
  background-image:radial-gradient(circle,white,green,blue);
  animation: mymove 5s infinite;
  position:relative;
left:300px;

padding:10px;
margin:50px;
}

@keyframes mymove {
  0%   {top: 0px;}
  25%  {top: 0px; left:100px;}
  75%  {top: 0px;left:100px}
  100% {top: 0x;}
}


#rainbow{
  width: 100px;
  height: 100px;
  background-color: red;
  animation-name: example;
  animation-duration: 4s;
}

@keyframes example {
  0%   {background-color: red;}
  25%  {background-color: yellow;}
  50%  {background-color: blue;}
  100% {background-color: green;}
}


#worker{
color:red;
}


.item1 {
  grid-area: myArea;
}

.grid-container {
  display: grid;
  grid-template-areas: 'myArea myArea myArea myArea myArea';
  grid-gap: 10px;
  background-color: #C8A2C8;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(0, 0, 0, 0.8);
  text-align: center;
color:white;
  padding: 10px 0;
  font-size: 30px;
}


#example1 {
  background-image: url(images/img_flwr.gif), url(images/paper.gif);
  background-position: right bottom, left top;
  background-repeat: no-repeat, repeat;
  padding-bottom: 80px;
  width: 100%;
  height: 80px;
  text-shadow: 2px 2px darkgray;
}
.withoutwrdwrapp{
  width: 150px;
  border: 1px solid black;
  word-wrap: break-word;
  padding:0;
  margin: 0;
}
.wrdwrapp{
  width: 150px;
  border: 1px solid black;
  padding:0;
  margin: 0;
}


</style>    



 <script>

function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}

var numri1;      var numri2;
      numri1=parseInt(window.prompt("Enter your first number: ","0"));
      numri2=parseInt(window.prompt("Enter your second number: ","0"));
      var rezultati=numri1+numri2;
      window.alert("Shuma e numrave "+numri1+" dhe "+numri2+" eshte "+rezultati+".");



</script>
     
       
     </head>
     <body style="min-width:1000px">


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
       
       
  <!-- Drag and Drop-->
<div id="dd1">
<p id="fontTitle"style="color:navy;"><em><strong>Try dragging the picture around these boxes!</strong></em></p>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
  <img src="images/drop.jpg" draggable="true" ondragstart="drag(event)" id="drag1" width="150" height="100">
</div>

<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

<div id="note">Note: The drag and drop moves the picture from its former position.</div>
</div>
<div class="scaling">Hover for some zooming.</div>
<div class="scalingX">Hover to scale it horizontally.</div>
<div class="scalingY">Hover to scale it vertically.</div>
<div class="rotateH">Hover to rotate it horizontally.</div>
<div class="rotateV">Hover to rotate it vertically.</div>
<div class="skewing">Hover to skew it.</div>    
<div id="anime"></div>  
<div id="rainbow"></div><br><br>
<div class="grid-container">
  <div class="item1">Most famous bag female model.</div>
  <div class="item2">Gigi Hadid</div>
  <div class="item3">Kendall Jenner</div>  
  <div class="item4">Lily Aldridge</div>
  <div class="item5">Karlie Kloss</div>
  <div class="item6">Bella Hadid</div>
</div>
<br><br>


<div id="example1">
  Multiple background images example 
</div>
<div class="withoutwrdwrapp">
This div contains a very long word: thisisaveryveryveryveryveryverylongword.
</div>
<div class="wrdwrapp">
This div contains a very long word: thisisaveryveryveryveryveryverylongword.
</div>
      
      <div style="width: 100%; height:fit-content">
  <video style="width:50% ; margin-left:  5%;" id="flip" controls>
    <source src="images/video.mp4" type="video/mp4">

  </video>
  <video style="width:50% ; margin-left:  5%;" id="flip" controls>
    <source src="images/video2.mp4" type="video/mp4">

  </video>
</div>
<!--       <div>
          <audio controls style="margin-top:5%;outline:none;">
          <source src="images/audio1.ogg" type="audio/ogg">
          <source src="images/audio1.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
        <audio controls style="margin-top:5%; margin-left: 20%;outline:none;">
          <source src="images/audio2.ogg" type="audio/ogg">
          <source src="images/audio2.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div> -->
      <div>
    
    <audio controls style="margin-top:5%;outline:none;">
      <source src="images/audio1.ogg" type="audio/ogg">
      <source src="images/audio1.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
    <audio controls style="margin-top:5%; margin-left: 20%;outline:none;">
      <source src="images/audio2.ogg" type="audio/ogg">
      <source src="images/audio2.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
  </div>

      <br><br>
  <div>
    <table border=1 align=center style="border-collapse: collapse;text-align: center;padding: 15px; width: 560px;">
      <th colspan=14 style="background-color:green">Bags</th>
      <tr style="background-color:green;">
        <th colspan=4>Brand</th>
        <th colspan=4>Name</th>
        <th colspan=4>Price</th>
        <th colspan=4>Photo</th>
      </tr>
      <tr>
        <td colspan=4>Zara</th>
        <td colspan=4>Pleated bucket bag</th>
        <td colspan=4>45.00$</th>
        <td colspan=4><img src="images/zara.jpg" alt="" border=3 height=100 width=100></img></td>
      </tr>
      <tr>
        <td colspan=4>Mango</td>
        <td colspan=4>Accordion fold bag</td>
        <td colspan=4>59.00$</th>
        <td colspan=4><img src="images/mango.jpg" alt="" border=3 height=100 width=100></img></td>
      </tr>
      <tr>
        <td colspan=4>Stradivarius</td>
        <td colspan=4>Faux-patent-finish shoulder bag</td>
        <td colspan=4>15.00$</th>
        <td colspan=4><img src="images/stradivarius.jpg" alt="" border=3 height=100 width=100></img></td>
      </tr>
      <tr>
        <td colspan=4>Hotic</td>
        <td colspan=4>Genuine Leather</td>
        <td colspan=4>20.00$</th>
        <td colspan=4><img src="images/hotic.jpg" alt="" border=3 height=100 width=100></img></td>
      </tr>

    </table>
    <br><br><br>
  </div>

    <p>Count numbers: <output id="result1"></output>
    </p>
<button onclick="startWorker()">
    Start Worker
</button> 
<button onclick="stopWorker()">
    Stop Worker
</button>
<br><br>

<p>Click the button to search a string for the character "e".</p>

<button onclick="myFunctionE()">
    Try it
</button>

<p id="demo9"></p>
<br>
<p>Click the button to search a string for the character "e".</p>
<button onclick="myFunctionT()">
    Try it
</button>

<p id="demo10">
</p>
<br>
<p>
    Click the button to do a case-insensitive search of the word "science" in a string.
</p>
<button onclick="myFunctionI()">
    Try it
</button>
<p id="demo11">
</p>
<br>


<!--Footer-->
  <footer>
    <div style="width:100%;height:auto;background-color:rgb(34,34,34); ">
      <div id="wrapper">
        <div>
          <h3>ABOUT US</h3>
          <br>
          <img src="images/Bags/Slider-images/footer-bag.png" alt="About|US" style="outline-style: dotted;">
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
            <li><a style="text-decoration: none" href=""><span style="color: rgb(102,102,102)">&#187;</span>
                Metalic Pink Bag</a></li>
            <li><a style="text-decoration: none" href=""><span style="color: rgb(102,102,102)">&#187;</span>
                Black Leather Bag</a></li>
            <li><a style="text-decoration: none" href=""><span style="color: rgb(102,102,102)">&#187;</span>
                Modern Pastels Bag</a></li>
            <li><a style="text-decoration: none" href=""><span style="color: rgb(102,102,102)">&#187;</span>
                Classy Red Bag</a></li>
            <li><a style="text-decoration: none" href=""><span style="color: rgb(102,102,102)">&#187;</span>
                Snake Print Bag</a></li>
            <li><a style="text-decoration: none" href=""><span style="color: rgb(102,102,102)">&#187;</span>
                Modern Mustard Bag</a></li>
            <li><a style="text-decoration: none" href=""><span style="color: rgb(102,102,102)">&#187;</span>
                Chique Black Bag</a></li>
            <li><a style="text-decoration: none" href=""><span style="color: rgb(102,102,102)">&#187;</span>
                Gen Z Lilac Bag</a></li>
            <li><a style="text-decoration: none" href=""><span style="color: rgb(102,102,102)">&#187;</span>
                Red Leather Bag</a></li>
            <li><a style="text-decoration: none" href=""><span style="color: rgb(102,102,102)">&#187;</span>
                Satchel Bag</a></li>
            <li><a style="text-decoration: none" href=""><span style="color: rgb(102,102,102)">&#187;</span>
                Belt Bag</a></li>
            <li><a style="text-decoration: none" href=""><span style="color: rgb(102,102,102)">&#187;</span>
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
        <p id="thelast"><span id="grey">COPYRIGHT &COPY; 2021-All rights reserved-
            <abbr title="AllRounder">AR</abbr></span></p>
      </div>

    </div>
    </div>
  </footer>
<script>
    function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
function validateForm() {
  var x = document.forms["myForm"]["search"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
    var work1;

function startWorker() {
  if(typeof(Worker) !== "undefined") {
    if(typeof(work1) == "undefined") {
      work1 = new Worker("demo_workers.js");
    }
    work1.onmessage = function(event) {
      document.getElementById("result1").innerHTML = event.data;
    };
  } else {
    document.getElementById("result1").innerHTML = "Sorry, your browser does not support Web Workers...";
  }
}
function stopWorker() { 
  work1.terminate();
  work1 = undefined;
}

function myFunctionE() {
  var str = "The best things in life are free";
  var patt = new RegExp("e");
  var res = patt.exec(str);
  document.getElementById("demo9").innerHTML = res;
}
    function myFunctionT() 
    {
  var str = "The best things in life are free";
  var patt = new RegExp("e");
  var res = patt.test(str);
  document.getElementById("demo10").innerHTML = res;
}


function myFunctionI() 
    {
  var str = "Computer Science";
  var patt1 = /science/i;
  var result = str.match(patt1);
  document.getElementById("demo11").innerHTML = result;
}
</script>    

</body>

</html>
