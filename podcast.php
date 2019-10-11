<?php require_once("include/mysqli_connect.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Podcast</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/podcast.css">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
   <!-- navigation bar -->
    <!-- heading -->
<div class="row">
  <div class="col-md-12">
    <div class="heading-wrapper-background">
      <div class="heading-bg-color">
       		<!-- main navbar -->
       <div class="row">
       	 <div class="col-md-12">
       	   <div class="main-navbar">
       	   	 <div class="main-navbar-background">
       	  	     <a href="index.php" id="logo-name">TREND<span id="logo">setters</span></a>
       	    	   <a href="index.php">Home</a>

                   <!-- dropdown article btn -->
               <div class="dropdown-article">
                  <button class="dropbtn"><a href="expert-articles.php?Page=1" id="dropdown-article"> Articles</a></button>
                   <div class="dropdown-content-article">
                       <a href="#"> <img src="img/jakob.jpg"><span id="dropdown-content"> Technology</span></a>
                       <a href="#"> <img src="img/alesia.jpg"><span id="dropdown-content">  Web Development</span></a>
                       <a href="#"> <img src="img/hands.jpg"><span id="dropdown-content"> Spiritual Guidance</span></a>
                       <a href="#"> <img src="img/flo.jpg"><span id="dropdown-content"> Career Guidance</span></a>
                       <a href="#"> <img src="img/business.jpg"><span id="dropdown-content">  Business Skills</span></a>
                       <a href="#"> <img src="img/li.jpg"><span id="dropdown-content">  Enterprenurship Skills</span></a>
                       <a href="#"> <img src="img/tim.jpg"><span id="dropdown-content">  Counselling</span></a>
                   </div>
               </div>

                <!-- dropdown btn -->
               <div class="dropdown-expert">
                    <button class="dropbtn"><a href="AboutAuthors.php?Page=1" id="dropdown-expert"> Expert</a><!-- <small>&#9947</small> -->
                     <!-- <i class="fa fa-caret-down"></i> -->
                    </button>
                 <div class="dropdown-content-expert">
                    <a href="#"> <img src="img/13.jpg"> Benny Musonda</a>
                    <a href="#"> <img src="img/14.jpg"> Thomas Mwale</a>
                    <a href="#"> <img src="img/13.jpg"> Solomon Tembo</a>
                    <a href="expert-home.php"> <img src="img/jbm.jpg"> John Banda</a>
                    <a href="#"> <img src="img/06.jpg"> Dr. Aaron Mujajati</a>
                    <a href="#"> <img src="img/09.jpg"> Dr. Nellie Kangwa</a>
                    <a href="#"> <img src="img/13.jpg"> Rev. Walter Mwambazi</a>
                    <a href="#"> more</a>
                 </div>
            </div>


       	          	<a href="#">Forum</a>
       		          <a href="expert-podcast.php">Podcast</a>
                    <a href="portfolio.php?Page=1">Portfolio</a>
                      <!-- dropdown btn -->
               <div class="dropdown">
                    <button class="dropbtn"><a href="aboutUs.php" id="dropdown-expert"> About</a><!-- <small>&#9947</small> -->
                     <!-- <i class="fa fa-caret-down"></i> -->
                    </button>
                <div class="dropdown-content">
                    <a href="aboutUs.php"> About Us</a>
                    <a href="clients.php?Page=1" id="active-btn"> Clients</a>
                    <a href="#"> Experience</a>
                    <a href="services.php?Page=1"> Services</a>
                    <a href="#"> Training</a>
                    <a href="events.php?Page=1"> Events</a>
                 </div>
            </div>
                    <a href="contact.php">Contact</a>
                    <a href="login.php"><i class="fas fa-lock-open"></i> Login</a>
                    <a href="AboutAuthors.php?Page=1" id="HireExpert-btn">Hire Expert</a>
       	
  </div>
    </div>
       	  <!-- toggle navbar -->
       	  <div class="row">
       	  	<div class="col-md-2">
       	  		 		<!-- toggle link -->
               <div class="wrapper active-element">
                  <header class="main-header">
                     <nav>
                        <div class="main-nav-list active-element">
                           <ul>
                    	        <li><h4 id="toggle-header">Address</h4></li>
                              <li><p>Zanimuone,</p></li>
                              <li><p>Plot Number 1234,</p></li>
                              <li><p>Great north rd,</p></li>
                              <li><p>Lusaka, Zambia.</p></li>
                              <li><p><i class="fas fa-map-marker-alt"></i> Site map</p></li>
                          </ul>
                       </div>
                    </nav>
                </header>
             </div>
       	  </div>
       <div class="col-md-2">
       	  		 		<!-- toggle link -->
       <div class="wrapper active-element">
         <header class="main-header">
            <nav>
                <div class="main-nav-list active-element">
                    <ul>
                        <li><h4 id="toggle-header">About Us</h4></li>
                        <li><a href="#">Our Experts</a></li>
                        <li><a href="about-new.php">Who We Are</a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
</div>
    <div class="col-md-2">
       	  		 		<!-- toggle link -->
       <div class="wrapper active-element">
        <header class="main-header">
            <nav>
                <div class="main-nav-list active-element">
                    <ul>
                        <li><h4 id="toggle-header">Our Services</h4></li>
                        <li><a href="#">Enterprenual skills</a></li>
                        <!-- <li><a href="#">Web Development</a></li> -->
                        <li><a href="#">Software Engeering</a></li>
                        <li><a href="#">Career Guidance</a></li>
                        <li><a href="#">Business Couching</a></li>
                        <li><a href="#">Healthy Counselling</a></li>
                        <li><a href="#">Marriage Counselling</a></li>
                        <!-- <li><a href="#">Psycho-social Counselling</a></li> -->
                    </ul>
                </div>
            </nav>
        </header>
    </div>
</div> 
   <div class="col-md-2">
       	  		 		<!-- toggle link -->
       <div class="active-element">
          <div class="main-nav-list active-element">
                <ul>
                   <li><h4 id="toggle-header">Lets talk</h4></li>
                   <li><a href="#">Addictions</a></li>
                   <li><a href="#">Building Career</a></li>
                   <li><a href="#">Relationships</a></li>
                   <li><a href="#">Enterprenurship</a></li>
                   <li><a href="#">Your Health</a></li>
                 </ul>
            </div>
        </div>
    </div>
<div class="col-md-4">
              <!-- toggle link -->
   <div class="wrapper active-element">
     <header class="main-header">
        <nav>
           <div class="masthead active-element">
                    <!-- <h1><a href="#0">Address</a></h1> -->
                <div id="menu-toggle" class="menu-toggle active-element">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
            </div>
                <div class="main-nav-list active-element">
                    <ul>
                        <li><h4 id="toggle-header">Connect</h4></li>
                        <li><a href="#"><i class="fas fa-mobile"></i> Contact Us</a></li>
                        <div class="inline">
                        <li><a href="#"><i class="fas fa-envelope"></i> info@titandizane.com</a></li>
                        <li><a href="#"><i class="fas fa-globe-africa"></i> www.titandizane.com</a></li>
                        <li><a href="#"><i class="fab fa-facebook" id="facebook-color"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter" id="twitter-color"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g" id="instagram-color"></i></a></li>
                        <a href="#"><i class="fab fa-youtube" id="youtube-color"></i></a>
                        </div>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
</div> <!-- end toggle list -->
</div>
       	</div>
       </div>
       	 <div class="heading-wrapper">
       	 <div class="row">
       	  <div class="col-md-6">
       	  	<div class="heading-wrapper-content">
      
       		   <p>Inspiration Tuesday brought to you by John Banda</p>
             <p id="live_broadcast"><i class="fas fa-microphone"></i> Live Broadcast every tuesday on Hot fm @1:00 PM (CAT)</p>
             <a href="#"><i class="fab fa-facebook"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-itunes"></i></a>

             
       		 </div>

       	 
      
       </div>

       	<div class="col-md-6">

   <div class="podcast-head">
      <h1>EPISODE 64: How To Start Business Without Capital - With Coach Benny Musonda</h1>
          <div class="podcast-head-content">
          <p><i class="far fa-clock"></i> 5:14 /</p>
          <p><i class="far fa-calendar"></i> 26 August, 2019 /</p>
          <p><i class="far fa-file"></i> 4.39M </p>
        </div>
          <p>Business is the thing that each one of us must think of. One would say, I have a Business Idea but
          how to source out capital is the major drow back. Here is how...</p>
        </div>
       	</div>
      
       </div>

       <div class="row">
         <div class="col-md-12">
          <div class="podcast_player">
            <audio controls="next"></audio>
          </div>
         </div>
       </div>
     </div>
      </div>
     </div>
    </div>
   </div>
  </div> <!-- end-navigation bar -->
     <!-- ************************************************************************************************************ -->
     <div class="row">
       <div class="col-md-12">
        <div class="pod_intro_head">
         <h1>Podcast</h1>
         <p>from our various Experts</p>
       </div>
       </div>
     </div>

     
     <div class="pod_bg_img">
      <div class="pod_container">
     <div class="row">
       <div class="col-md-3">
         <!-- <h2>Recent videos</h2> -->
       </div>
       <div class="col-md-5">
        <div class="pod_intro_content">
        <h2><i class="fas fa-video"></i> Video</h2>
         <!-- <p>hot</p> -->
         <h3>Episode 01: How to manage your finances</h3>
          <p id="profession"> &raquo With John Banda - Business Coach</p>
         <video controls poster="img/priscilla.jpg">
             <source src="PodcastVideo/01.mp4" type="video/mp4">
             <source src="movie.ogg" type="video/ogg">
             Your browser does not support the video tag.
           </video>

           <div class="pod_details">
            <p><i class="far fa-clock"></i> 12:09 /</p>
            <p><i class="far fa-calendar"></i> 12 August, 2019 /</p>
            <p><i class="far fa-file"></i> 10M </p>
            <p id="download"> Download</p>
          </div>

            <p>Business is the thing that each one of us must think of. One would say, I have a Business Idea but
               how to source out capital is the major drow back. Here is how...</p>
       </div>
       </div>
       <div class="col-md-3">
        <p></p>
        <h2>Audio</h2>
        <p>Business is the thing that each one of us must think of. One would say, I have a Business Idea but
               how to source out capital is the major drow back. Here is how...</p>

        <audio controls>
         <source src="horse.ogg" type="audio/ogg">
         <source src="horse.mp3" type="audio/mpeg">
         Your browser does not support the audio element.
       </audio>
       <div class="audio_details">
         <p><i class="fas fa-microphone"></i> Listen</p>
         <p><i class="far fa-file"></i> download</p>
       </div>
       </div>
     </div>
   </div>
     </div>
     
     <!-- *********************** Contact Us ******************************************** -->
<div class="row">
  <div class="col-md-12">
    <div class="contact-head">
       <h4>Contact</h4>
       <p>Give Us Your Feedback</p>
    </div>
  </div>
</div>
<!-- *************************** Google Map *********************************************** -->
<!-- <div class="row">
  <div class="col-md-12">
    <div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15390.734371374303!2d28.27920287767815!3d-15.33942087433378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff1c7dd96be27b38!2sChazanga+HC!5e0!3m2!1sen!2szm!4v1560100529926!5m2!1sen!2szm" width="1300" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>
 -->
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6">
         <div class="contact-form">
            <form>
               <label>Name:</label>
               <i class="fas fa-user"></i><input type="text" name="">
               <label>Email:</label>
               <i class="fas fa-envelope"></i><input type="text" name="">
               <label>Message:</label>
              <!-- <i class="fas fa-pen" id="textarea"></i> --><textarea placeholder="Your message..."></textarea>
              <p></p>
              <button type="submit">Feed back</button>
        </form>
       </div>
      </div>
      <div class="col-md-6">
        <div class="address-wrapper">
          <div class="row">
            <div class="col-md-6">
               <h4><i class="fas fa-map-marker-alt"></i> Address</h4>
               <p>1234 Zanimuone East,</p>
               <p>Off Great North Road,</p>
               <p>Lusaka, Zambia</p>
               <h4><i class="fas fa-envelope"></i> Email</h4>
               <p>info@themovement.com</p>
               <h4><i class="fas fa-globe-africa"></i> Website</h4>
               <p>www.trendsetters.org</p>
            </div>
            <div class="col-md-6">
              <h4><i class="fas fa-mobile"></i> Telephone</h4>
              <p>+211009453536</p>
              <h4><i class="fas fa-mobile"></i> Mobile</h4>
              <p>+260979874525</p>
              <h4><i class="fas fa-users"></i> Social Media</h4>
              <div class="address-social">
              <a href="#"><i class="fab fa-facebook-f"></i></a> 
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-google-plus-g"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ********************************************************************************************* -->

       <!-- footer -->
       <div class="row">
        <div class="col-md-12">
          <div class="footer-wrapper">
          <div class="row"> <!-- 1st row of col-md-12-->
        <div class="col-md-2">
         <div class="footer-address">
          <p>Address</p>
          <p>Zanimuone,</p>
          <p>Plot Number 1234,</p>
          <p>Great north rd,</p>
          <p>Lusaka, Zambia.</p>
          <p><i class="fas fa-map-marker-alt"></i> Site map</p>
          <div class="footer-logo">
          <a href="new.php">Trend<span id="logo">setters</span></a>
        </div>
        </div>
       </div>
        <div class="col-md-2">
          <div class="footer-content">
          <p>About</p>
          <a href="#">Our Experts</a>
          <a href="about-new.php">About us</a>
        </div>
        </div>
        <div class="col-md-3">
          <div class="footer-content">
          <p>Services</p>
          <a href="#">Business Couching</a>
          <a href="#">Enterprenual skills</a>
          <a href="#">Web Development</a>
          <a href="#">Software Engeering</a>
          <a href="#">Career Guidance</a>
          <a href="#">Healthy Counselling</a>
          <a href="#">Marriage Counselling</a>
          <a href="#">Psycho-social Counselling</a>
         </div>
        </div>
        <div class="col-md-2">
       <div class="footer-content">
          <p>Lets talk</p>
          <a href="#">Addictions</a>
          <a href="#">Building Career</a>
          <a href="#">Relationships</a>
          <a href="#">Enterprenurship</a>
          <a href="#">Your Health</a>
        </div>
        </div>
          <div class="col-md-3">
          <div class="footer-content">
          <p>Connect</p>
          <a href="#"><i class="fas fa-mobile"></i> Contact Us</a>
          <a href="#"><i class="fas fa-envelope"></i> info@trendsetters.com</a>
          <a href="#"><i class="fas fa-globe-africa"></i> www.trendsetters.com</a>
          <p id="mail-comment">Sign up to our mailing list and recieve Articles, Motivational audios , videos & more from our experts</p>
          <input type="text" placeholder="Your email address"><button type="submit" id="footer-mail-btn">Go</button>
        </div>
          <div class="footer-social">
               <a href="#"><i class="fab fa-facebook" id="facebook-color"></i></a>
               <a href="#"><i class="fab fa-twitter" id="twitter-color"></i></a>
             <a href="#"><i class="fab fa-linkedin-in"></i></a>
             <a href="#"><i class="fab fa-google-plus-g" id="instagram-color"></i></a>
             <a href="#"><i class="fab fa-pinterest" id="pinterest-color"></i></a>
             <a href="#"><i class="fab fa-youtube" id="youtube-color"></i></a>
             <a href="#"><i class="fab fa-instagram" id="instagram-color"></i></a>
         </div>
       </div>
     </div>
   </div>
<div class="row">      <!-- 2nd row of col-md-12-->
  <div class="col-md-12">
    <div class="footer-copy">
      <a href="#">Privacy policy</a>
      <a href="#">Terms & conditions |</a>
        <p>&copy Trendsetters 2019 - Designed and developed by sosten nyirenda</p>
        </div>
  </div>
</div>

 </div>
      </div>
      <!-- *************************************************************************************************** -->
      <!-- Jquery.js for podcast carousel -->
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
  <!-- ************************************************************************************************* -->

 <!-- script for overay Talk to Expert -->
<script>
function openExpert() {
  document.getElementById("myExpert").style.width = "100%";
}

function closeExpert() {
  document.getElementById("myExpert").style.width = "0%";
}
</script>

      <!-- javascript for navbar toggle -->
       <script type="text/javascript">
    
var menuToggle = document.querySelector("#menu-toggle");
var activeElements = document.querySelectorAll(".active-element");
var toggledMenu = menuToggle.addEventListener("click", function(){
     // forEach is not supported in IE11
  // activeElements.forEach(function(e){
  //     e.classList.toggle("active");
  // });
     for(var activated = 0; activated < activeElements.length; activated++){
          activeElements[activated].classList.toggle("active");
     }
})

$(window).on("load", function() {
    $(".loading").fadeOut(500);
});
    </script>


</body>
</html>