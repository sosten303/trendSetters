<?php require_once("include/mysqli_connect.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>cczambia-Our Service</title>
  <meta name="author" content="sosten" />
  <meta name="keywords" content="constraction, proffesional, tiling, Bricklying," />
  <meta name="description" content="constraction connector is a group of constraction companies." />
  <meta name="copyright" content="cczambia" />
  <meta name="robot" content="all" />
  <meta http-equiv="content-type" content="text/php; charset=utf-8" />
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/ccz.css">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>

<body style="margin: 0px; padding: 0px">

  <div class="nav_wrapper" style="margin: 0px;">
  <div class="row">
    <div class="col-md-12">
     <nav class="main_nav" id="nav">
      <a href="ccz.php">CCZambia</a>
      <a href="ccz-contact.php">Contact</a>
      <a href="work.php">Work</a>
      <a href="ccz-service.php" id="active">Service</a>
      <a href="ccz-about.php">About</a>
      <a href="ccz.php">Home</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
     </a>
    </nav>
</div>
</div>

<div class="row">
  <div class="col-md-12">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">Contactors Group</div>
  <img src="img/razvan.jpg" style="width:100%">
  <div class="text">
    <div class="tex_content">
    <p>CCzambia Contrators Group</p>
  <h1>We Build Nations with Quality Infrastracture</h1>
</div>
</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">Contactors Group</div>
  <img src="img/aleksan.jpg" style="width:100%">
  <div class="text">
    <div class="tex_content">
    <p>CCzambia Contrators Group</p>
  <h1>We Build With Excellency</h1>
</div>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">Contractors Group</div>
  <img src="img/flo.jpg" style="width:100%">
  <div class="text">
    <div class="tex_content">
    <p>CCzambia Contrators Group</p>
  <h1>We Design, Plan and Build</h1>
</div>
  </div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
  </div>
</div>

</div> <!-- End Navigation Bar --> 
<!-- **************************************************************************************************** -->
<!-- ***************************** Service ********************************* -->

<div class="row">
  <div class="col-md-12">
    <div class="service_head">
    <h2>Services</h2>
    <p>We Design, Plan and Build Awesome Infrastructures; Simply put we are leaders in Constraction</p>
  </div>
</div>
</div>
<div class="service_container">
<div class="row"> <!-- main row 1-->
  <div class="col-md-12">
    <div class="row"><!-- sub row -->
    <div class="col-md-4">
      <div class="service_content">
      <i class="fas fa-rocket"></i>
      <p id="service_title">We Design</p>
      <p>Based on Our client needs</p>
    </div>
    </div>
    <div class="col-md-4">
      <div class="service_content">
      <i class="fas fa-scroll"></i>
      <p id="service_title">We Plan</p>
      <p>Based on Our client needs</p>
    </div>
  </div>
    <div class="col-md-4">
      <div class="service_content">
      <i class="fas fa-store-alt"></i>
      <p id="service_title">We Build</p>
      <p>Based on Our client needs</p>
    </div>
  </div>
  </div>
</div>
</div><!--end main row 1-->
</div>

<!-- ************** Contact Us *************** -->
<div class="row">
  <div class="col-md-12">
    <div class="contact_head">
    <h2>Contact Us</h2>
    <p>Do you have any project or looking for one. Its simple just connect with us</p>
  </div>

  <div class="contact_wrapper">
  <div class="row"> <!-- main row -->
    <div class="col-md-12">
     <div class="row"> <!-- Sub row -->

   <div class="col-md-6">
    <div class="contact_form">
      <p id="contact_title">Contact Details</p>
    <form>
      <label for="Name">Name:</label>
      <p></p>
      <i class="fas fa-user"></i><input type="text" name="" id="Name" placeholder="your name" />
      <p></p>
      <label for="Email">Email Address:</label>
      <p></p>
      <i class="fas fa-envelope"></i><input type="text" name="" id="Email" placeholder="your email address" />
      <p></p>
      <label for="Message">Message :</label>
      <p></p>
      <textarea id="Message" placeholder="write your message here"></textarea>
      <p></p>
      <input type="submit" name="submit" value="Send" />
    </form>
  </div>
</div>

      <div class="col-md-6">
        <div class="contact_imge">
        <p id="imge_title">CCzambia Connect</p>
        <img src="img/mandona.jpg">
      </div>
      </div>
</div>
  </div>
</div>
</div>

</div>
</div>
<!-- ************** Footer ********************** -->
<div class="footer-container">
  <div class="row">
    <div class="col-md-12">
      <p id="footer_title">CCzambia</p>
    </div>
  </div>
  <div class="footer_content">
<div class="row"> <!-- main row 1-->
  <div class="col-md-12">
    <div class="row"><!-- sub row -->
    <div class="col-md-4">
      <h2>About Us</h2>
      <p>CCzambia is a group of Constractors</p>
      <p> Social Connection</p>
      <a href="#facebook"><i class="fab fa-facebook"></i> facebook</a>
      <a href="#twitter"><i class="fab fa-twitter"></i> twitter</a>
      <a href="#instagram"><i class="fab fa-instagram"></i> instagram</a>
      <a href="#youtube"><i class="fab fa-youtube"></i> youtube</a>
    </div>
    <div class="col-md-4">
      <h2>Contact Us</h2>
      <p><i class="fas fa-map-marker-alt"></i> Residential Address : Avondale, Lusaka, Zambia</p>
      <p><i class="fas fa-envelope"></i> Email : constractionconnectzambia@gmail.com</p>
      <p><i class="fas fa-mobile"></i> Phone Number : +260979400711</p>
      <p><i class="fab fa-whatsapp"></i> Whats App line : +260979400711</p>
    </div>
    <div class="col-md-4">
      <h2>Be Notified on Projects</h2>
      <div class="footer_form">
      <p>Sign Up to our News Letters</p>
      <form>
        <input type="text" name="" placeholder="your @ email address">
        <input type="submit" name="submit" value="Go">
      </form>
    </div>
    </div>
  </div>
</div>
</div><!--end main row 1-->
</div>
<div class="row">
  <div class="col-md-12">
    <div class="footer_copy"> 
    <p>CCzambia &copy 2019 All Rights Reserved; Designed and developed by sosten nyirenda</p>
  </div>
  </div>
</div>
</div>
<!-- ********************************************************************************************** -->

<!-- toggle navigation -->
<script>
function myFunction() {
  var x = document.getElementById("nav");
  if (x.className === "main_nav") {
    x.className += " responsive";
  } else {
    x.className = "main_nav";
  }
}
</script>




<!-- Java Script for Carousel -->
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
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>