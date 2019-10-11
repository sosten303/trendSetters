<?php require_once("include/mysqli_connect.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/functions.php"); ?>



<!DOCTYPE html>
<html>
<head>
	<title>Individual Service</title>
	<meta charset="utf-8">
	<meta lang="eng">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/IndividualService.css">
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
                  <button class="dropbtn"><a href="expert-articles.php?Page=0" id="dropdown-article"> Articles</a></button>
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
                    <button class="dropbtn"><a href="#" id="dropdown-expert"> Expert</a><!-- <small>&#9947</small> -->
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
                    <a href="expert-portfolio.php">Portfolio</a>
                      <!-- dropdown btn -->
               <div class="dropdown">
                    <button class="dropbtn"><a href="aboutUs.php" id="dropdown-expert"> About</a><!-- <small>&#9947</small> -->
                     <!-- <i class="fa fa-caret-down"></i> -->
                    </button>
                 <div class="dropdown-content">
                    <a href="aboutUs.php"> About Me</a>
                    <a href="clients.php"> Clients</a>
                    <a href="#"> Experience</a>
                    <a href="services.php"> Services</a>
                    <a href="#"> Training</a>
                    <a href="events.php"> Events</a>
                 </div>
            </div>
                    <a href="contact.php">Contact</a>
       		          <!-- <a href="login-final.php">Login</a>
       		          <a href="signup-finall.php">Sign Up</a> -->
       	
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
<!-- ******************************************************* -->
<!-- Expert navbar -->
 <div class="row">
   <div class="col-md-3">
     <div class="dashboard">
     <a href="expert-dash-board.php"><i class="fas fa-list"></i>Dashboard</a>
     <a href="authorPost.php?Page=1"><i class="fas fa-list"></i>Articles</a>
     <a href="viewprofile.php"><i class="fas fa-users-cog"></i>Expert Profiles</a>
     <a href="individualProfile.php"><i class="fas fa-user"></i>View Profile</a>
     <a href="updateProfile.php"><i class="fas fa-user"></i>Update Profile</a>
      <?php
        $ExpertId = $_SESSION["User_Id"]; 
        $QuerytTotal = "SELECT COUNT(article.id) FROM article INNER JOIN expert_bio ON article.expert_id = expert_bio.id
        WHERE expert_bio.id = '$ExpertId'";
        $Excute = mysqli_query ($dbcon, $QuerytTotal);
        $DataRaws = mysqli_fetch_array($Excute);
        $TotalRaws = array_shift($DataRaws);
        if ($TotalRaws) {

        
          ?>
          
          <a href="IndividualArticles.php?Page=1"><i class="fas fa-newspaper"></i> Articles <span style="background-color: #00b4ff; color: #ffffff; padding: 1px 3px; border-radius: 2px;"><?php echo $TotalRaws; ?></span></a>
     <?php } ?> <!-- End if Condition -->
     
     <!-- <a href="create-profile.php"><i class="fas fa-user-cog"></i>Create Profile</a> -->
      <?php 
        $QuerytTotal = "SELECT COUNT(*) FROM admin_panel";
        $Excute = mysqli_query ($dbcon, $QuerytTotal);
        $DataRaws = mysqli_fetch_array($Excute);
        $TotalRaws = array_shift($DataRaws);
        if ($TotalRaws) {
          
      

       ?>
       <a href="#addnew-post.php"><i class="fas fa-newspaper"></i>Articles Published<span style="background-color: #00b4ff; color: #ffffff; padding: 1px 3px; border-radius: 2px;"><?php echo $TotalRaws; ?></span></a>
       
     <?php } ?> <!-- End if Condition -->

     

     <a href="createPost.php"><i class="fas fa-pen"></i><b>Write Article</b></a>
     <a href="categories.php"><i class="fas fa-tags"></i>Article Categories</a>
     <a href="expertadmins.php"><i class="fas fa-users-cog"></i>Manage Admins</a>
     <a href="adminservice.php"><i class="fas fa-box"></i>Share Service</a>
      <?php
        $ExpertId = $_SESSION["User_Id"]; 
        $QuerytTotal = "SELECT COUNT(service.id) FROM service INNER JOIN expert_bio ON service.expert_id = expert_bio.id
        WHERE expert_bio.id = '$ExpertId'";
        $Execute = mysqli_query ($dbcon, $QuerytTotal);
        $DataRaws = mysqli_fetch_array($Execute);
        $TotalRaws = array_shift($DataRaws);
        if ($TotalRaws) {

        
          ?>
          
          <a href="IndividualService.php?Page=1" id="dashboard-active"><i class="fas fa-user-tag"></i> Service <span style="background-color: #00b4ff; color: #ffffff; padding: 1px 3px; border-radius: 2px;"><?php echo $TotalRaws; ?></span></a>
     <?php } ?> <!-- End if Condition -->

     <a href="AuthorService.php?Page=1"><i class="fas fa-box"></i>Expert Services</a>
     <a href="adminportfolio.php"><i class="fas fa-user-tag"></i>Add Portfolio</a>

     <?php
        $ExpertId = $_SESSION["User_Id"]; 
        $QuerytTotal = "SELECT COUNT(portfolio.id) FROM portfolio INNER JOIN expert_bio ON portfolio.expert_id = expert_bio.id
        WHERE expert_bio.id = '$ExpertId'";
        $Execute = mysqli_query ($dbcon, $QuerytTotal);
        $DataRaws = mysqli_fetch_array($Execute);
        $TotalRaws = array_shift($DataRaws);
        if ($TotalRaws) {

        
          ?>
          
          <a href="IndividualPortfolio.php?Page=1"><i class="fas fa-user-tag"></i> Portfolio <span style="background-color: #00b4ff; color: #ffffff; padding: 1px 3px; border-radius: 2px;"><?php echo $TotalRaws; ?></span></a>
     <?php } ?> <!-- End if Condition -->
     <a href="AuthorPortfolio.php?Page=1"><i class="fas fa-user-tie"></i>Expert Portfolios</a>
     <a href="adminevent.php"><i class="fas fa-calendar-alt"></i>Share Event</a>
     <?php
        $ExpertId = $_SESSION["User_Id"]; 
        $QuerytTotal = "SELECT COUNT(event.id) FROM event INNER JOIN expert_bio ON event.expert_id = expert_bio.id
        WHERE expert_bio.id = '$ExpertId'";
        $Execute = mysqli_query ($dbcon, $QuerytTotal);
        $DataRaws = mysqli_fetch_array($Execute);
        $TotalRaws = array_shift($DataRaws);
        if ($TotalRaws) {

        
          ?>
          
          <a href="IndividualEvent.php?Page=1"><i class="fas fa-user-tag"></i> Event <span style="background-color: #00b4ff; color: #ffffff; padding: 1px 3px; border-radius: 2px;"><?php echo $TotalRaws; ?></span></a>
     <?php } ?> <!-- End if Condition -->

     <a href="adminclient.php"><i class="fas fa-user-plus"></i>Add Clients</a>
      <?php
        $ExpertId = $_SESSION["User_Id"]; 
        $QuerytTotal = "SELECT COUNT(client.id) FROM client INNER JOIN expert_bio ON client.expert_id = expert_bio.id
        WHERE expert_bio.id = '$ExpertId'";
        $Execute = mysqli_query ($dbcon, $QuerytTotal);
        $DataRaws = mysqli_fetch_array($Execute);
        $TotalRaws = array_shift($DataRaws);
        if ($TotalRaws) {

        
          ?>
          
          <a href="IndividualClient.php?Page=1"><i class="fas fa-user-tag"></i> Client <span style="background-color: #00b4ff; color: #ffffff; padding: 1px 3px; border-radius: 2px;"><?php echo $TotalRaws; ?></span></a>
     <?php } ?> <!-- End if Condition -->
  
     
     <a href="AuthorClient.php?Page=1"><i class="fas fa-user-tie"></i>Expert Clients</a>
     <a href="expertcomment.php"><i class="fas fa-comment-alt"></i>Comments</a>
     <a href="expert-articles.php?Page=1" target="_blank"><i class="fas fa-eye"></i>Live Blog</a>
     <a href="adminlogout.php"><i class="fas fa-user-times"></i>Logout</a>
   </div>
  </div>
     <div class="col-md-7">
      <div class="addNewPost-container">
       <h1>Services</h1>

       <div class="searchForm">
            <form action="IndividualService.php">
              <input type="text" name="search" placeholder="Search">
              <button name="search-btn"><i class="fas fa-search"></i></button>
            </form>
          </div>
       <?php

        echo Message(); 
        echo SuccessMessage();
       ?>

       <?php
       //Query when Search Button is Active
           if (isset($_GET["search-btn"])) {
               $Search = $_GET["search"];
               $ExpertId = $_SESSION["User_Id"];
               $ViewQuery = "SELECT service.id, fname, lname, profile_pic, email, title, profession, category date_published, service_text, service_bunner, service_title, expert_id FROM service INNER JOIN expert_bio ON service.expert_id = expert_bio.id AND expert_id = '$ExpertId' WHERE date_published LIKE '%$Search%' OR service_title LIKE '%$Search%' OR service_text LIKE '%$Search%'";
                
           } 
    
           // Query when pagination is Active i.e expert-articles.php?Page=1
           elseif (isset($_GET["Page"])) {
              $Page = $_GET["Page"];
              if ($Page == 0 || $Page < 1) {
                $ShowPostFrom = 0;
              }else{
                $ShowPostFrom = ($Page * 5)-5;
              }  

          $ExpertId = $_SESSION["User_Id"];
           $ViewQuery = "SELECT service.id, fname, lname, profile_pic, email, title, profession, category, date_published, service_text, service_bunner, service_title FROM service INNER JOIN expert_bio ON service.expert_id = expert_bio.id WHERE expert_bio.id = '$ExpertId' ORDER BY date_published DESC LIMIT $ShowPostFrom,5";}
           else{
           $ExpertId = $_SESSION["User_Id"];
           $ViewQuery = "SELECT service.id, fname, lname, profile_pic, email, title, profession, category, date_published, service_text, service_bunner, service_title FROM service INNER JOIN expert_bio ON service.expert_id = expert_bio.id WHERE expert_bio.id = '$ExpertId' ORDER BY date_published DESC LIMIT 0,5";}
           // $ViewQuery="SELECT * FROM article ORDER BY date_published desc LIMIT 0,5"; //limt means display only 5 articles on this page then triger next to view other 5
           $Execute = mysqli_query($dbcon,$ViewQuery);
           
           while ($DataRows = mysqli_fetch_array($Execute)) {
             $ServiceId = $DataRows["id"];
             $DatePublished = $DataRows["date_published"];
             $ServiceTitle = $DataRows["service_title"];
             $ServiceBunner = $DataRows["service_bunner"];
             $Service = $DataRows["service_text"];
             $Category = $DataRows["category"];
             $Fname = $DataRows["fname"];
             $Lname = $DataRows["lname"];
             $Email = $DataRows["email"];
             $Title = $DataRows["title"];
             $ProfilePic = $DataRows["profile_pic"];
             $Profession = $DataRows["profession"];
           ?>
           <div class="service_content">
            <h1><?php echo $ServiceTitle; ?></h1>
            <p id="article_date"> <i class="fas fa-calendar-day"></i> <?php echo $DatePublished; ?></p>
            <img src="ServicePic/<?php echo $ServiceBunner; ?>"/>
            <p><b>Category :</b> <?php echo $Category; ?></p>
            <p>
              <?php
              if (strlen($Service)>150) {
                $Service = substr($Service, 0,150).'..';
              }
               echo nl2br($Service);
             ?>
             <a href="IndividualFullService.php?id=<?php echo $ServiceId ?>">Read More</a>
           </p>

             <img src="ProfilePic/<?php echo $ProfilePic; ?>" id="profile-pic" vspace=1 hspace=10 />
            <p><b><?php echo $Title; ?> <?php echo $Fname; ?>
            <?php echo $Lname; ?></b></p>
          </div>
         <?php }//end While Loop ?>


         <!-- Pagination Begin -->

     <div class="article-pagination">

      <!-- Back btn -->
      <?php
      if (isset($Page)) {
     
       if ($Page > 1 ) {

      ?>
      <a href="IndividualService.php?Page=<?php echo $Page-1?>"> &laquo; </a> 
      <?php } ?>
      <?php } ?>
    <!-- end Back btn -->

     <!-- Adding links to pagination -->
        <?php
         $QueryPagination = "SELECT COUNT(*) FROM service INNER JOIN expert_bio ON service.expert_id = expert_bio.id";
         $ExcutePagination = mysqli_query($dbcon,$QueryPagination);
         $RowPagination = mysqli_fetch_array($ExcutePagination);
         $TotalPosts = array_shift($RowPagination);
        // echo $TotalPosts;
         $PostPagination = $TotalPosts/5;
         $PostPagination = ceil($PostPagination);
        // echo $PostPerPage;
         for ($i = 1; $i <= $PostPagination; $i++){
          if (isset($Page)) {
          
           if ($i == $Page) {
          
          
         ?> 
         
    <a href="IndividualService.php?Page=<?php echo $i; ?>" id="article-pagination-active"><?php echo $i; ?></a>
    <?php
      }else{
    ?>
    <a href="IndividualService.php?Page=<?php echo $i; ?>"><?php echo $i; ?></a>
  <?php } ?> <!-- end else -->
<?php } ?>
          <?php } ?> <!-- end forloop -->
    <!-- Forward btn -->
      <?php
         if (isset($Page)) {
     
           if ($Page+1 <= $PostPagination) {

        ?>
           <a href="IndividualService.php?Page=<?php echo $Page+1 ?>"> &raquo; </a>
          <?php } ?>
          <?php } ?> <!-- End Forward btn -->
      </div>
      <!-- End Pagination -->
       </div>
     </div>
     <div class="col-md-2"></div>
  </div>
    <div class="heading-wrapper">
       	 <div class="row">
       	  <div class="col-md-9">
       	  <!-- <div class="heading-wrapper"> -->
       	  	<div class="heading-wrapper-content">
       	  	<div class="heading-wrapper-def">
       	  	 <!--  <p id="heading-border"></p>
       		  <h4>Integrity, Courage, Motivation & Spiritual focus; Build man's good reputation</h4>
             <p>Not only  do we build Faith and hope, We also build men to become responsible, relieable and dependeable beings </p>
            <div id="open-btn">
               <a href="signup-finall.php"> Open up to Us and We to you <span id="arrow-btn"> &#150&#155</span></a>
       		</div> -->

       		 <!--  <div class="heading-left">
       		        <p>We value your personality. Share that struggle, adversity, or challenge. We provide solutions</p>
       		 </div>
               -->
             
       		 </div>
       	 
       	<!-- </div> -->
       </div>

       	<div class="col-md-3">
          <!-- <div class="expert-name">
          <h1>John Banda</h1>
          <p><i class="fas fa-user-tie"></i> Business Consultant</p>
          </div> -->
       	
         	</div>
        </div>
       </div>
     </div>
   </div>
 </div>
</div> <!-- end-navigation bar -->
    <div class="row">
      <div class="col-md-12">
       

      </div>
    </div>

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


  <!-- script for overay special offer -->
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
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