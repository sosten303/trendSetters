<?php require_once("include/session.php"); ?>
<?php require_once("include/functions.php"); ?>
<?php require_once("include/mysqli_connect.php"); ?>
<?php Confirm_Login(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Expert manage Comments</title>
	<meta charset="utf-8">
	<meta lang="eng">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/expertcomment.css">
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
                  <button class="dropbtn"><a href="expert-articles.php" id="dropdown-article"> Articles</a></button>
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
   <div class="dashboard">
     <a href="expert-dash-board.php"><i class="fas fa-list"></i>Dashboard</a>
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
     <a href="expertcomment.php" id="dashboard-active"><i class="fas fa-comment-alt"></i>Comments</a>
     <a href="expert-articles.php?Page=1" target="_blank"><i class="fas fa-eye"></i>Live Blog</a>
     <a href="adminlogout.php"><i class="fas fa-user-times"></i>Logout</a>
   </div>

     <div class="col-md-9">
      <div class="dashboard-container">
   
   <!-- ***************** Un Approved Comments ************ -->

       <h1>Un-Approved Comments</h1>
       <?php echo Message(); 
       echo SuccessMessage();
       ?>
       <div style="overflow-x:auto;">
       <table>
        <tr>
         <th>No</th>
         <th>Name</th>
         <th>Date</th>
         <th>Comment</th>
         <th>Approve</th>
         <th>Delete Comment</th>
         <th>Details</th>
       </tr>
       
       <?php
        $ViewQuery="SELECT * FROM comments WHERE status='OFF' ORDER BY datetime desc";
           $Excute=mysqli_query($dbcon,$ViewQuery);
           $SrNo=0;
           while ($DataRows=mysqli_fetch_array($Excute)) {
             $CommentId = $DataRows["id"];
             $DateTimeOfComment = $DataRows["datetime"];
             $PersonName = $DataRows["username"];
             $PersonComment = $DataRows["comment"];
             $CommentedPostId = $DataRows["admin_panel_id"];
             $SrNo++;

             if (strlen($PersonComment)>20) {
                $PersonComment=substr($PersonComment,0,20).'..';
              }

              if (strlen($PersonName)>20) {
                $PersonName=substr($PersonName,0,20).'..';
              }
           ?>
           <tr>
             <td><?php echo htmlentities($SrNo);?></td>
             <td><?php echo htmlentities($PersonName);?></td>

             <td><?php
              if (strlen($DateTimeOfComment)>12) {
                $DateTimeOfComment=substr($DateTimeOfComment,0,12).'..';
              }
              echo htmlentities($DateTimeOfComment);
              ?>  
              </td>

             <td><?php echo htmlentities($PersonComment);?></td>

             <td>
              <a href="expertapprove-comment.php?id=<?php echo $CommentId;?>" id="approve-bage">Approve</a>
            </td>
            <td>
              <a href="expertdelete-comment.php?id=<?php echo $CommentId?>" id="delete-btn">Delete</a>
            </td>
            <td>
              <a href="expertfullpost.php?id=<?php echo $CommentedPostId;?>" target="_blank" id="livePreview-btn">Live Preview</a>
            </td>
           </tr>
         <?php } ?>
        </table>
      </div>
      </div> <!-- End Un Approved Comments -->

      <!-- ********************* Approved Comments ************************** -->
      <div class="dashboard-container">
       <h1>Approved Comments</h1>
       <?php echo Message(); 
       echo SuccessMessage();
       ?>
       <table>
        <tr>
         <th>No</th>
         <th>Name</th>
         <th>Date</th>
         <th>Comment</th>
         <th>Approved By</th>
         <th>Revert Approve</th>
         <th>Delete Comment</th>
         <th>Details</th>
       </tr>
       
       <?php
        // $Admin="sosten";
        $ViewQuery="SELECT * FROM comments WHERE status='ON' ORDER BY datetime desc";
           $Excute=mysqli_query($dbcon,$ViewQuery);
           $SrNo=0;
           while ($DataRows=mysqli_fetch_array($Excute)) {
             $CommentId = $DataRows["id"];
             $DateTimeOfComment = $DataRows["datetime"];
             $PersonName = $DataRows["username"];
             $PersonComment = $DataRows["comment"];
             $ApprovedBy = $DataRows["approvedby"];
             $CommentedPostId = $DataRows["admin_panel_id"];
             $SrNo++;

             if (strlen($PersonComment)>20) {
                $PersonComment=substr($PersonComment,0,20).'..';
              }

              if (strlen($PersonName)>20) {
                $PersonName=substr($PersonName,0,20).'..';
              }
           ?>
           <tr>
             <td><?php echo htmlentities($SrNo);?></td>
             <td><?php echo htmlentities($PersonName);?></td>

             <td><?php
              if (strlen($DateTimeOfComment)>12) {
                $DateTimeOfComment=substr($DateTimeOfComment,0,12).'..';
              }
              echo htmlentities($DateTimeOfComment);
              ?>  
              </td>

             <td><?php echo htmlentities($PersonComment);?></td>
             <td><?php echo htmlentities($ApprovedBy);?></td>
             <!-- <td><?php $Admin;?></td> -->

             <td>
              <a href="expertdisapprove-comment.php?id=<?php echo $CommentId;?>" id="unApprove-bage">Dis-Approve</a>
            </td>
            <td>
              <a href="expertdelete-comment.php?id=<?php echo $CommentId?>" id="delete-btn">Delete</a>
            </td>
            <td>
              <a href="expertfullpost.php?id=<?php echo $CommentedPostId;?>" target="_blank" id="livePreview-btn">Live Preview</a>
            </td>
           </tr>
         <?php } ?>
        </table>
      </div>
    </div> <!-- End appoved comments -->
</div>


    <div class="heading-wrapper">
       	 <div class="row">
       	  <div class="col-md-9">
       	  <!-- <div class="heading-wrapper"> -->
       	  	<div class="heading-wrapper-content">
       	  	<div class="heading-wrapper-def">
       	  	  <p id="heading-border"></p>
       		   <h4>Integrity, Courage, Motivation & Spiritual focus; Build man's good reputation</h4>
             <p>Not only  do we build Faith and hope, We also build men to become responsible, relieable and dependeable beings </p>
            <div id="open-btn">
               <a href="signup-finall.php"> Open up to Us and We to you <span id="arrow-btn"> &#150&#155</span></a>
             </div>
          </div>
       		</div>

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