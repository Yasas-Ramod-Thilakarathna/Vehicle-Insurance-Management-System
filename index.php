<?php include('header.php'); ?>

<html>
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/homepage.css">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images\1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images\2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images\3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
	
 	<class="imgs">20px 290px;" height="100px" alt="Img 8" alt="Img 8" />		
<img src="images\2.png" width="100px" style="vertical-align:middle;margin:10px 80px/> 
<img src="images\1.png" width="100px" style="vertical-align:middle;margin:10px 100px 2px 20px;" height="100px" alt="Img 8" alt="Img 8" />
<img src="images\3.png" width="100px" style="vertical-align:middle;margin:10px 80px 2px 20px;" height="100px" alt="Img 8" alt="Img 8" />
<img src="images\4.png" width="100px" style="vertical-align:middle;margin:10px 80px 2px 20px;" height="100px" alt="Img 8" alt="Img 8" />
<br>
		<button class="button button1"  style= "margin: 0px 10px 10px 270px">Rider Insurance</button>
<button class="button button2"   style= "margin: 0px 20px 1px 75px">Tuk Insurance</button>
<button class="button button3"  style= "margin: 0px 10px 10px 50px">Car Insurance</button>
<button class="button button4"   style= "margin: 0px 10px 10px 36px">Commercial Insurance</button>
		  
</class>
 
 </html>
 <!-- Footer main -->
 <?php include('footer.php'); ?>