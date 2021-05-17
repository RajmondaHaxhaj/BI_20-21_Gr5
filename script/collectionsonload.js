   
      
      function collectionsonload(){
      

var x = location.hash;

if(x == "#Zara")
{
  document.getElementsByClassName("Mango")[0].style.display = "none";
   document.getElementById("Mango").style.display="none";
   
    document.getElementsByClassName("Hotic")[0].style.display = "none";
   document.getElementById("Hotic").style.display="none";
   
       document.getElementsByClassName("Stradivarius")[0].style.display = "none";
   document.getElementById("Stradivarius").style.display="none";

}
   
 else if(x == "#Mango")
{
  document.getElementsByClassName("Zara")[0].style.display = "none";
   document.getElementById("Zara").style.display="none";
   
    document.getElementsByClassName("Hotic")[0].style.display = "none";
   document.getElementById("Hotic").style.display="none";
   
       document.getElementsByClassName("Stradivarius")[0].style.display = "none";
   document.getElementById("Stradivarius").style.display="none";

}
 else  if(x == "#Stradivarius")
{
  document.getElementsByClassName("Zara")[0].style.display = "none";
   document.getElementById("Zara").style.display="none";
   
    document.getElementsByClassName("Hotic")[0].style.display = "none";
   document.getElementById("Hotic").style.display="none";
   
       document.getElementsByClassName("Mango")[0].style.display = "none";
   document.getElementById("Mango").style.display="none";

}

   if(x == "#Hotic")
{
  document.getElementsByClassName("Zara")[0].style.display = "none";
   document.getElementById("Zara").style.display="none";
   
    document.getElementsByClassName("Stradivarius")[0].style.display = "none";
   document.getElementById("Stradivarius").style.display="none";
   
       document.getElementsByClassName("Mango")[0].style.display = "none";
   document.getElementById("Mango").style.display="none";

}


      }


