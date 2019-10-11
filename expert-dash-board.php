<?php require_once("include/session.php"); ?>
<?php require_once("include/functions.php"); ?>
<?php require_once("include/mysqli_connect.php"); ?>
<?php Confirm_Login(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Expert Dash Board</title>
	<meta charset="utf-8">
	<meta lang="eng">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/expert-dash-board.css">
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
                    <a href="portfolio.php">Portfolio</a>
                      <!-- dropdown btn -->
               <div class="dropdown">
                    <button class="dropbtn"><a href="aboutUs.php" id="dropdown-expert"> About</a><!-- <small>&#9947</small> -->
                     <!-- <i class="fa fa-caret-down"></i> -->
                    </button>
                 <div class="dropdown-content">
                    <a href="aboutUs.php"> About Us</a>
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
<!-- Expert Dashoboard navbar -->
 <div class="row">
   <div class="col-md-3">
    <div class="dashboard">
     <a href="expert-dash-board.php" id="dashboard-active"><i class="fas fa-list"></i>Dashboard</a>
     <a href="#create-profile.php"><i class="fas fa-user"></i>View Profile</a>
     <a href="create-profile.php"><i class="fas fa-user-cog"></i>Create Profile</a>
      <?php 
        $QuerytTotal = "SELECT COUNT(*) FROM admin_panel";
        $Excute = mysqli_query ($dbcon, $QuerytTotal);
        $DataRaws = mysqli_fetch_array($Excute);
        $TotalRaws = array_shift($DataRaws);
        if ($TotalRaws) {
          
      

       ?>
       <a href="#addnew-post.php"><i class="fas fa-newspaper"></i>Articles Published<span style="background-color: #00b4ff; color: #ffffff; padding: 1px 3px; border-radius: 2px;"><?php echo $TotalRaws; ?></span></a>
       
     <?php } ?> <!-- End if Condition -->

     

     <a href="addnew-post.php"><i class="fas fa-pen"></i><b>Write Article</b></a>
     <a href="categories.php"><i class="fas fa-tags"></i>Article Categories</a>
     <a href="expertadmins.php"><i class="fas fa-users-cog"></i>Manage Admins</a>
     <a href="adminservice.php"><i class="fas fa-box"></i>Share Service</a>
     <a href="adminportfolio.php"><i class="fas fa-user-tag"></i>Create Portfolio</a>
     <a href="adminevent.php"><i class="fas fa-calendar-alt"></i>Share Event</a>
     <a href="adminclient.php"><i class="fas fa-user-plus"></i>Add Clients</a>
     <a href="expertcomment.php"><i class="fas fa-comment-alt"></i>Comments
      <?php
                 // to display the Un-Approved number of comments
                $QueryTotal = "SELECT COUNT(*) FROM comments WHERE status = 'OFF'";
                $ExcuteTotal = mysqli_query($dbcon,$QueryTotal);
                $RowsTotal = mysqli_fetch_array($ExcuteTotal);
                $Total = array_shift($RowsTotal);
                  if ($Total>0) { 
                    // don't display anything
                ?>
                    
                    <span id="comment-bage"> <?php echo $Total; ?></span>
                 
              <?php } ?> <!-- End if condition -->
     </a>
     <a href="expert-articles.php?Page=1" target="_blank"><i class="fas fa-eye"></i>Live Blog</a>
     <a href="adminlogout.php"><i class="fas fa-user-times"></i>Logout</a>
   </div>
   </div>

     <div class="col-md-9">
      <div class="dashboard-container">
       <h1>Admin Dashboard</h1>
       <?php echo Message(); 
       echo SuccessMessage();
       ?>
       <div style="overflow-x:auto;">
       <table>
        <tr>
         <th>No</th>
         <th>Post Title</th>
         <th>Date & Time</th>
         <th>Author</th>
         <th>Category</th>
         <th>Bunner</th>
         <th>Comments</th>
         <th>Action</th>
         <th>Details</th>
       </tr>
       
       <?php
        $ViewQuery="SELECT * FROM admin_panel ORDER BY datetime desc";
           $Excute=mysqli_query($dbcon,$ViewQuery);
           $SrNo=0;
           while ($DataRows=mysqli_fetch_array($Excute)) {
             $Id=$DataRows["id"];
             $Title=$DataRows["title"];
             $DateTime=$DataRows["datetime"];
             $Category=$DataRows["category"];
             $Admin=$DataRows["expert"];
             $Image=$DataRows["image"];
             $Post=$DataRows["post"];
             $SrNo++;
           ?>
           <tr>
             <td><?php echo $SrNo;?></td>

             <td><?php 
             if (strlen($Title)>14) {
                $Title=substr($Title,0,14).'..';
              }
             echo $Title;?>
             </td>
             <td><?php
              if (strlen($DateTime)>12) {
                $DateTime=substr($DateTime,0,12).'..';
              }
              echo $DateTime;
              ?>  
              </td>

             <td><?php
                 if (strlen($Admin)>14) {
                     $Admin=substr($Admin,0,14).'..';
                    }
                     echo $Admin;
                  ?>
              </td>

             <td>
                <?php
                 if (strlen($Category)>12) {
                     $Category=substr($Category,0,12).'..';
                    }
                     echo $Category;
                  ?>
             </td>

             <td><img src="Upload/<?php echo $Image; ?>"></td>

             <td>
               <?php
               // to display the Approved number of comments
                $QueryApproved = "SELECT COUNT(*) FROM comments WHERE admin_panel_id='$Id'AND status='ON'";
                $ExcuteApproved = mysqli_query($dbcon,$QueryApproved);
                $RowsApproved = mysqli_fetch_array($ExcuteApproved);
                $TotalApproved = array_shift($RowsApproved);
                  if ($TotalApproved>0) {
                    // don't display anything
                ?>
                    <div class="approve-bage">
                     <?php echo $TotalApproved ;?>
                   </div>
              <?php } ?> <!-- end if -->
               

               <?php
               // to display the  UnApproved number of comments
                $QueryApproved = "SELECT COUNT(*) FROM comments WHERE admin_panel_id='$Id'AND status='OFF'";
                $ExcuteApproved = mysqli_query($dbcon,$QueryApproved);
                $RowsApproved = mysqli_fetch_array($ExcuteApproved);
                $TotalApproved = array_shift($RowsApproved);
                  if ($TotalApproved>0) {
                    // don't display anything
                ?>
                    <div class="unApprove-bage">
                     <?php echo $TotalApproved ;?>
                   </div>
              <?php } ?> <!-- end if -->
               
               
             </td>

             <td>
             
              <a href="expertedit-post.php?expertedit=<?php echo $Id;?>" id="edit-btn">Edit</a>
             
              <a href="expertdelete-post.php?expertdelete=<?php echo $Id;?>" id="delete-btn">Delete</a>
             
            </td>

             <td>
              <a href="expertfullpost.php?id=<?php echo $Id;?>" target="_blank" id="livePreview-btn">Live Preview</a>
            </td>

           </tr>
         <?php } ?>

        </table>
      </div>
      </div>
    </div>
</div>


    <div class="heading-wrapper">
       	 <div class="row">
       	  <div class="col-md-9">
       	  <!-- <div class="heading-wrapper"> -->
       	  	<div class="heading-wrapper-content">
       	  	<div class="heading-wrapper-def">
       	  	  <!-- <p id="heading-border"></p> -->
       		 <!--  <h4>Integrity, Courage, Motivation & Spiritual focus; Build man's good reputation</h4>
       		   <p>Not only do I constract buildings, I also build men to become responsible, relieable and dependeable beings </p>
       		  <div id="open-btn">
       		     <a href="signup-finall.php"> Open up to Me and I to you <span id="arrow-btn"> &#150&#155</span></a>
       		   </div> -->
       		</div>

       		 <!--  <div class="heading-left">
       		        <p>We value your personality. Share that struggle, adversity, or challenge. We provide solutions</p>
       		 </div>
               -->
             
       		 </div>
       	 
       	<!-- </div> -->
       </div>

       	<div class="col-md-3">
          <div class="expert-name">
          <!-- <h1>John Banda</h1>
          <p><i class="fas fa-user-tie"></i> Business Consultant</p> -->
          </div>
       	 <!--  <div class="aside-navbar">
       	  	<a href="about-new.php"><i class="fas fa-users"></i> About Us</a>
       		<a href="#"><i class="fas fa-mobile"></i> Contact Us</a>
       		<a href="#"><i class="fas fa-user-tie"></i> Experts</a>
			<a href="#"><i class="fas fa-tools"></i> Services</a>
			<a href="#"><i class="fas fa-question"></i> FAQ</a>
			<a href="#"><i class="fas fa-search"></i> Search</a>
       	 </div> -->

       	  <!-- social -->
       		   <!-- <div class="heading-social">
       		     <a href="#"><i class="fab fa-facebook" id="facebook-color"></i></a>
       		     <a href="#"><i class="fab fa-twitter" id="twitter-color"></i></a>
       		     <a href="#"><i class="fab fa-linkedin-in"></i></a>
       		     <a href="#"><i class="fab fa-google-plus-g" id="instagram-color"></i></a>
       		     <a href="#"><i class="fab fa-pinterest" id="pinterest-color"></i></a>
       		     <a href="#"><i class="fab fa-youtube" id="youtube-color"></i></a>
       		     <a href="#"><i class="fab fa-instagram" id="instagram-color"></i></a>
       		  </div> -->
         	</div>
        </div>
       </div>
     </div>
   </div>
 </div>
</div> <!-- end-navigation bar -->
    

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