<?php
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0)) { 
header("Location: login.php"); 
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta lang="eng">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/welcome.css">
	<title>welcome</title>
</head>
<body>
     
      <!-- main navbar -->

       <!-- heading -->
       <div class="row">
        <div class="col-md-12">
        <div class="heading-wrapper-background">
          <!-- main navbar -->
       <div class="row">
        <div class="col-md-12">
          <div class="main-navbar">
            <div class="main-navbar-background">
            <a href="new.php">TREND<span id="logo">setters</span></a>
          <a href="new.php">Home</a>
          <a href="articles.php">LetsTalk Articles</a>
          <a href="peoples-concerns.php">Peoples Concerns</a>
          <a href="#">Expert Response</a>
          <a href="#">Forum</a>
          <a href="#">Podcast</a>
          <a href="login-final.php">Login</a>
          <a href="signup-finall.php">Sign Up</a>
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
               
                                 <!-- 
                                     <a href="#"><i class="fab fa-linkedin-in"></i></a>
             
                                    <a href="#"><i class="fab fa-pinterest" id="pinterest-color"></i></a>
                               <a href="#"><i class="fab fa-instagram" id="instagram-color"></i></a> -->
         
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
      <div class="col-md-9">


        <h1></h1>
        <?php 

      if (isset($_POST['fname'])){
       echo "{$_POST['fname']}";
   }

       echo '<h1>Successefully Registered'; echo '</h1>';
      
      ?>

      <p>Now you can have acess to the following:</p>
      <a href="login-final.php">Back to the main menu</a>
        <!-- <div class="login-wrapper">
          <div class="login-header">
              <h2>Login</h2>
              <p>Don't have an account ?</p>
              <a href="signup-finall.php">Register now</a>
         </div>
<form action="login-final.php" method="post">
	<label>Email</label>
	<input type="text" name="email"><i class="fas fa-user" id="user"></i>
	<label>Password</label>
	<input type="password" name="password"><i class="fas fa-lock" id="lock"></i>
	<br>
	<button type="submit" name="submit">Login</button>
	<a href="#">Forgot password ?</a>

	<div class="login-social">
	<h2>Login with social network</h2>
	<a href="#" id="facebook-color"> <i class="fab fa-facebook-f" id="facebook-color"></i><span id="login-facebook">Login with facebook</span></a>
	<a href="#" id="twitter-color"> <i class="fab fa-twitter" id="twitter-color"></i><span id="login-twitter">Login with twitter</span></a>
	<a href="#" id="google-plus-color"> <i class="fab fa-google-plus-g" id="google-plus-color"></i><span id="login-google-plus"> Login with google plus</span></a>
	</div>
</form>

</div> -->
       </div>

        <div class="col-md-3">
          <div class="aside-navbar">
            <a href="#"><i class="fas fa-users"></i> About Us</a>
            <a href="#"><i class="fas fa-mobile"></i> Contact Us</a>
            <a href="#"><i class="fas fa-user-tie"></i> Experts</a>
            <a href="#"><i class="fas fa-tools"></i> Services</a>
            <a href="#"><i class="fas fa-question"></i> FAQ</a>
            <a href="#"><i class="fas fa-search"></i> Search</a>
         </div>

          <!-- social -->
             <div class="heading-social">
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
     </div>
      </div>
     </div>
<!-- ********************
</body>
</html>