<?php require_once("include/mysqli_connect.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>cczambia-Our Work</title>
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
	<link rel="stylesheet" type="text/css" href="css/work.css">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- ********************* Jssor js ************************************** -->
    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script src="js/jssor.js" type="text/javascript"></script>
</head>

<body style="margin: 0px; padding: 0px">

  <div class="nav_wrapper" style="margin: 0px;">
  <div class="row">
    <div class="col-md-12">
     <nav class="main_nav" id="nav">
      <a href="ccz.php">CCZambia</a>
      <a href="ccz-contact.php">Contact</a>
      <a href="work.php" id="active">Work</a>
      <a href="ccz-service.php">Service</a>
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
  <div class="numbertext">Contractors Group</div>
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
  <div class="numbertext">Contactors Group</div>
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

<!-- *************** Our Work ********************* -->
<div class="row">
  <div class="col-md-12">
  <div class="work_head">
    <h2>Our Work</h2>
    <p>Awesome Work that Speaks for itself</p>
  </div>
</div>
</div>

<div class="work_wrapper">
<div class="row">
<div class="col-md-12">
<div id="jssor_1" class="jssor_position">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" class="img_spin">
            <img src="img/spin.svg" />
        </div>
        <div data-u="slides" class="aside_content_slide">
            <div>
                <img data-u="image" src="img/mandona.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/mandona.jpg" />
                    <span class="ti">Aluminium</span><br />
                    <span class="ti">Architecture</span><br />
                    <span class="d">We fit Alumium door and window flames</span>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/smile.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/smile.jpg" />
                    <span class="ti">Blick-Laying</span><br />
                    <span class="d">We Build Quality buildings</span>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/024.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/024-s96x48.jpg" />
                    <span class="ti">Celling</span><br />
                    <span class="d">We fix celling board</span>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/025.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/025-s96x48.jpg" />
                    <span class="ti">Door fitting</span><br />
                    <span class="d">We fit any type of doors from Smart, Aluminum to Ordinary Wooden Doors</span>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/026.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/026-s96x48.jpg" />
                    <span class="ti">Electrical wiring</span><br />
                    <span class="d">Domestic and Industrial Wiring </span>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/027.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/027-s96x48.jpg" />
                    <span class="ti">Fibrication in Metals</span><br />
                    <span class="d">We maintain metal materials</span>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/021.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/021-s96x48.jpg" />
                    <span class="ti">Galvanising</span><br />
                    <span class="d">maintaing iron sheets</span>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/mandona.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/028-s96x48.jpg" />
                    <span class="ti">Housing security fence</span><br />
                    <span class="d">Barbed and Electrical wire fence</span>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/029.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/029-s96x48.jpg" />
                    <span class="ti">Irrigatory farming maintaince</span><br />
                    <span class="d">maintaining machinary and Dipping poors </span>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/030.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/030-s96x48.jpg" />
                    <span class="ti">Joinary</span><br />
                    <span class="d">Putting together dismantled materials into a usable thing</span>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/031.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/031-s96x48.jpg" />
                    <span class="ti">Land Scapping</span><br />
                    <span class="d">Leveling land to right dimensions</span>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/razvan.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/razvan.jpg" />
                    <span class="ti">Mantaince of Various Materials</span><br />
                    <span class="d">Improving the life span of materials</span>
                </div>
            </div>
        </div>

        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort121" class="jssort121_edit" style="position:absolute;left:0px;top:0px;width:268px;height:380px;overflow:hidden;cursor:default;" data-autocenter="2" data-scale-left="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:268px;height:68px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb111" style="position:absolute;bottom:12px;right:12px;" data-scale="0.5">
            <div data-u="prototype" class="i" style="width:24px;height:24px;font-size:12px;line-height:24px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;">
                    <circle class="b" cx="8000" cy="8000" r="3000"></circle>
                </svg>
                <div data-u="numbertemplate" class="n"></div>
            </div>
        </div>
    </div>
  </div>
  </div>
  </div> <!-- End Work Wrapper -->

    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->

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