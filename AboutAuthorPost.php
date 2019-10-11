<?php require_once("include/mysqli_connect.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/functions.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Expert</title>
<meta charset="utf-8">
	<meta lang="eng">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/AboutAuthorPost.css">
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
                    <a href="clients.php?Page=1"> Clients</a>
                    <a href="#"> Experience</a>
                    <a href="services.php?Page=1"> Services</a>
                    <a href="#"> Training</a>
                    <a href="events.php?Page=1"> Events</a>
                 </div>
            </div>
                    <a href="contact.php">Contact</a>
       		          <a href="login.php">Login</a>
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

       		 <!--  <div class="heading-left">
       		        <p>We value your personality. Share that struggle, adversity, or challenge. We provide solutions</p>
       		 </div>
               -->
             
       		 </div>
       	 
       	<!-- </div> -->
       </div>

       	<div class="col-md-3">
          <div class="searchForm">
            <form action="expert-articles.php">
              <input type="text" name="search" placeholder="Search">
              <button name="search-btn"><i class="fas fa-search"></i></button>
            </form>
          </div>
          
          <div class="expert-name">
          <!-- <h1>Benny Musonda</h1>
          <p><i class="fas fa-user-tie"></i> Constraction Consultant</p> -->
         <p><?php
            echo Message(); 
            echo SuccessMessage();
           ?>
           </p>
          </div>

       	<div id="title-head">
                <h2>Expert</h2>
              </div>
        </div>
       	</div>
      
       </div>
      </div>
     </div>
    </div>
   </div>
  <!-- end-navigation bar -->
     <!-- ************************************************************************************************************ -->
      <!-- Articles-->
<div class="row">
  <div class="col-md-12">
    <div class="article-head">
       <h1>About The Expert</h1>
       <p>We are here for you</p>
    </div>
 </div>    
<div class="row">
  <div class="col-md-4">
    <div class="author-container">
      <?php
       
          // $ViewQuery = "SELECT article.id, fname,lname, profile_pic,email,title, profession, date_published, article_text, article_bunner, category, article_title FROM article INNER JOIN expert_bio ON article.expert_id = expert_bio.id";
           $ExpertId = $_GET["id"];
           // $ExpertId = $_SESSION["User_Id"];
           $ViewQuery="SELECT * FROM expert_bio WHERE expert_bio.id = '$ExpertId'"; //limt means display only 5 articles on this page then triger next to view other 5
           $Excute = mysqli_query($dbcon,$ViewQuery);
           
           while ($DataRows = mysqli_fetch_array($Excute)) {
             $ExpertId = $DataRows["id"];
             $DateRegistered = $DataRows["datetime"];
             $Title = $DataRows["title"];
             $Fname = $DataRows["fname"];
             $Lname = $DataRows["lname"];
             $Gender = $DataRows["gender"];
             $DateOfBirth = $DataRows["dob"];
             $ProfilePic = $DataRows["profile_pic"];
             $Bio = $DataRows["bio"];
             $Email = $DataRows["email"];
             $PhoneNumber = $DataRows["phone_number"];
             $TelephoneNumber = $DataRows["telephone_number"];
             $Country = $DataRows["country"];
             $Residential = $DataRows["residential"];
             $AreaCode = $DataRows["area_code"];
             $School = $DataRows["school"];
             $Tertiary = $DataRows["tertiary"];
             $Qualification = $DataRows["qualification"];
             $JobSector = $DataRows["job_sector"];
             $TypeOfEmployment = $DataRows["type_of_employment"];
             $CompanyName = $DataRows["company_name"];
             $JobPosition = $DataRows["job_position"];
             $PositionYears = $DataRows["position_years"];
             $Profession = $DataRows["profession"];
             $ProfessionYears = $DataRows["profession_years"];
           ?>
            <img src="ProfilePic/<?php echo $ProfilePic; ?>"/>

            <div class="author_details">
            <p><b><?php echo $Title; ?> <?php echo $Fname; ?> <?php echo $Lname; ?></b></p>
            <p><i class="fas fa-user-tie"></i> <b>Profession :</b> <?php echo $Profession; ?></p>
            <p><i class="fas fa-user"></i> <b>Gender :</b> <?php echo $Gender; ?></p>
            <p><i class="fas fa-birthday-cake"></i> <b>Date Of Birth :</b> <?php echo $DateOfBirth; ?></p>
            <p id="bio"><i class="fas fa-user-circle"></i> <b>Biography :</b> <?php echo $Bio; ?></p>
            <p><b>Date Registered :</b> <?php echo $DateRegistered; ?></p>

            <?php
               // $ExpertId = $_SESSION["User_Id"]; 
              $QuerytTotal = "SELECT COUNT(article.id) FROM article INNER JOIN expert_bio ON article.expert_id = expert_bio.id WHERE expert_bio.id = '$ExpertId'";
               $Excute = mysqli_query ($dbcon, $QuerytTotal);
               $DataRaws = mysqli_fetch_array($Excute);
               $TotalRaws = array_shift($DataRaws);
               if ($TotalRaws) {

        
          ?>
             <p><i class="fas fa-newspaper"></i> <b>Articles Published</b>: <span style="background-color: #00b4ff; color: #ffffff; padding: 1px 3px; border-radius: 2px;"><?php echo $TotalRaws; ?></span></p>
             <?php } ?> <!-- End if Condition -->
             
            <p><i class="fas fa-envelope"></i> <b>Email Address :</b> <?php echo $Email; ?></p>
            <p><i class="fas fa-mobile"></i> <b>Phone Number :</b> <?php echo $PhoneNumber; ?></p>
            <p><i class="fas fa-phone"></i> <b>Telephone Number : </b><?php echo $TelephoneNumber; ?></p>
            <p><i class="fas fa-globe-asia"></i> <b>Country :</b> <?php echo $Country; ?></p>
            <p><i class="fas fa-map-marker-alt"></i> <b>Residential :</b> <?php echo $Residential; ?></p>
            <p><i class="fas fa-map-marker"></i> <b>Area Code :</b> <?php echo $AreaCode; ?></p>
            <p><i class="fas fa-user-graduate"></i> <b>School :</b> <?php echo $School; ?></p>
            <p><i class="fas fa-user-graduate"></i> <b>University / College :</b> <?php echo $Tertiary; ?></p>
            <p><i class="fas fa-certificate"></i> <b>Qualification :</b> <?php echo $Qualification; ?></p>
            <p><i class="fas fa-city"></i> <b>Job Sector :</b> <?php echo $JobSector; ?></p>
            <p><b>Type Of Employment :</b> <?php echo $TypeOfEmployment; ?></p>
            <p><b>Company Name :</b> <?php echo $CompanyName; ?></p>
            <p><b>Your Job Position :</b> <?php echo $JobPosition; ?></p>
            <p><b>Position Years :</b> <?php echo $PositionYears; ?></p>
            <p><b>Profession :</b> <?php echo $Profession; ?></p>
            <p><b>Profession Years :</b> <?php echo $ProfessionYears; ?></p>
          </div>
         <?php }//end While Loop ?>

       </div>
  </div>
     <div class="col-md-5">
      <div class="port_header">
      <h2><i class="fas fa-tag"></i> Portfolio</h2>
      <p>Work that speaks for itself</p>
    </div>
        <div class="author_portfolio">
          <?php
       

          $ExpertId = $_GET['id'];
          $ViewQuery = "SELECT portfolio.id, fname,lname, profile_pic,email,title, profession, date_published, portfolio_text, port_bunner, port_title, expert_id FROM portfolio INNER JOIN expert_bio ON portfolio.expert_id = expert_bio.id WHERE portfolio.expert_id = '$ExpertId' ORDER BY date_published DESC LIMIT 0,5";
           // $ViewQuery="SELECT * FROM article ORDER BY date_published desc LIMIT 0,5"; //limt means display only 5 articles on this page then triger next to view other 5
           $Execute = mysqli_query($dbcon,$ViewQuery);
           
           while ($DataRows = mysqli_fetch_array($Execute)) {
             $PortId = $DataRows["id"];
             $ExpertId = $DataRows["expert_id"];
             $DatePublished = $DataRows["date_published"];
             $PortTitle = $DataRows["port_title"];
             $PortBunner = $DataRows["port_bunner"];
             $Portfolio = $DataRows["portfolio_text"];
             $Fname = $DataRows["fname"];
             $Lname = $DataRows["lname"];
             $Email = $DataRows["email"];
             $Title = $DataRows["title"];
             $ProfilePic = $DataRows["profile_pic"];
             $Profession = $DataRows["profession"];
           ?>
           <div class="author_portfolio">
            <h3><?php echo $PortTitle; ?></h3>
            <p>&raquo <?php echo $Title; ?> <?php echo $Fname; ?> <?php echo $Lname; ?></p>
            <img src="PortfolioPic/<?php echo $PortBunner; ?>" width=600; height=400 />

            <p><?php
              if (strlen($Portfolio)>150) {
                $Portfolio  = substr($Portfolio, 0, 150);
              }
             echo nl2br($Portfolio); ?>
             <a href="fullportfolio.php?id=<?php echo $PortId; ?>">Read more &raquo</a>
             </p>
           
            <p  id="portfolio"><i class="fas fa-calendar-day"></i> <?php echo $DatePublished; ?></p>
          </div>
          
         <?php }//end While Loop ?>
        </div>
         <br>
        <a href="portfolio.php?Page=1" id="port_more">More Portfolio &raquo</a>

     <!-- ###################################################################################### -->
     <!-- ********************** Services ***************************************************** -->
          <div class="service_header">
            <h2><i class="fas fa-users-cog"></i> Services</h2>
            <p>that helps you and your business grow</p>
          </div>

         <div class="service_container">
        <?php
        $ExpertId = $_GET["id"];
           $ViewQuery = "SELECT service.id, fname, lname, profile_pic, email, title, profession, category, date_published, service_text, service_bunner, service_title, expert_id FROM service INNER JOIN expert_bio ON service.expert_id = expert_bio.id WHERE expert_bio.id = '$ExpertId' ORDER BY date_published DESC LIMIT 0,5";
           // $ViewQuery="SELECT * FROM article ORDER BY date_published desc LIMIT 0,5"; //limt means display only 5 articles on this page then triger next to view other 5
           $Execute = mysqli_query($dbcon,$ViewQuery);
           
           while ($DataRows = mysqli_fetch_array($Execute)) {
             $ServiceId = $DataRows["id"];
             $ExpertId = $DataRows["expert_id"];
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
            <h3><?php echo $ServiceTitle; ?></h3>
            <p>&raquo <?php echo $Title; ?> <?php echo $Fname; ?> <?php echo $Lname; ?></p>
            <img src="ServicePic/<?php echo $ServiceBunner; ?>" width=600; height=400 />
            <p><b>Category :</b><?php echo $Category; ?></p>
            <p>
              <?php
              if (strlen($Service)>150) {
                $Service = substr($Service, 0,150).'..';
              }
               echo nl2br($Service);
             ?>
             <a href="fullservice.php?id=<?php echo $ServiceId ?>">Read more &raquo</a>
           </p>
       </div>
         <?php }//end While Loop ?>
         <a href="services.php?Page=1" id="more_service"> More Services &raquo</a>
      </div>
    </div>
      <!-- ************************************************************** -->
         <div class="col-md-3">
        
            <div class="recentPost-container">
             <h2>Recent Articles</h2>
             <p><small>&raquo <?php echo htmlentities($Title); ?> <?php echo htmlentities($Fname); ?> <?php echo htmlentities($Lname); ?></small></p>
          <?php 
          $ExpertId = $_GET["id"];
           // $ExpertId = $_SESSION["User_Id"];
           $ViewQuery="SELECT * FROM expert_bio INNER JOIN article ON expert_bio.id = article.expert_id WHERE expert_bio.id = '$ExpertId' ORDER BY date_published DESC LIMIT 0,5"; //limt means display only 5 articles on this page then triger next to view other 5
           $Excute = mysqli_query($dbcon,$ViewQuery);
           
           while ($DataRows = mysqli_fetch_array($Excute)) {
             // $ArticleId = $DataRows["article.id"];
             $ExpertId = $DataRows["id"];
             $DatePublished = $DataRows["date_published"];
             $ArticleTitle = $DataRows["article_title"];
             $ArticleBunner = $DataRows["article_bunner"];
             $Category = $DataRows["category"];
             $Article = $DataRows["article_text"];
          ?>
          <div class="recentDetails">
          <h3><?php echo nl2br($ArticleTitle); ?></h3>
          <p id="expertdate"><i class="fas fa-calendar-alt"></i> <?php echo nl2br($DatePublished); ?> &raquo <?php echo nl2br($Category); ?></p>
          <!-- <img src="Upload/<?php echo htmlentities($ArticleBunner); ?>" /> -->
          <p><?php 
               if (strlen($Article)>100) {
                 $Article = substr($Article, 0,100);
               }
          echo nl2br($Article); ?></p>
          </div>
        <?php } //End While Loop ?>
             
             <div>

         <?php
           // $ExpertId = $_SESSION["User_Id"];
           $ViewQuery = "SELECT article.id, fname,lname, profile_pic,email,title, profession, date_published, article_text, article_bunner, category, article_title FROM article INNER JOIN expert_bio ON article.expert_id = expert_bio.id WHERE expert_bio.id = '$ExpertId' ORDER BY date_published DESC LIMIT 0,5";
           // $ViewQuery="SELECT * FROM article ORDER BY date_published desc LIMIT 0,5"; //limt means display only 5 articles on this page then triger next to view other 5
           $Excute = mysqli_query($dbcon,$ViewQuery);
           
           while ($DataRows = mysqli_fetch_array($Excute)) {
             $ArticleId = $DataRows["id"];
             // $ExpertId = $DataRows["expert_id"];
             $DatePublished = $DataRows["date_published"];
             $ArticleTitle = $DataRows["article_title"];
             $Category = $DataRows["category"];
             $Image = $DataRows["article_bunner"];
             $Article = $DataRows["article_text"];
             $Fname = $DataRows["fname"];
             $Lname = $DataRows["lname"];
             $Email = $DataRows["email"];
             $Title = $DataRows["title"];
             $ProfilePic = $DataRows["profile_pic"];
             $Profession = $DataRows["profession"];
           ?>
               <div class="recentImage">
                <div class="row">
                  <div class="col-md-6">
                 <img src="Upload/<?php echo $Image; ?>" align="left" vspace="1"; hspace="10">
               </div>
                 <div class="col-md-6">
                 <div class="recentDetails">
                  <a href="expertfullpost.php?id=<?php echo $ArticleId; ?>">
                  <?php echo htmlentities($ArticleTitle); ?>
                 </a>
                 <p><span id="expertDate"><i class="far fa-calendar"></i> <?php echo htmlentities($DatePublished); ?></span></p>
                 <p><span id="expertName"><i class="fas fa-user-tie"></i> <?php echo htmlentities($Fname); ?></span></p>

               </div>
             </div>
                
               
               </div>
               </div>
             <?php } ?> <!-- end While loop -->
             
                 <a href="expert-articles.php?Page=1" id="more"> Read More &raquo</a>

             </div>
           </div>

           <!-- ########################################################################################## -->
           <!-- ********************************* Upcoming Events ******************************* -->
           <div class="upcoming_event_container">
            <div class="event_header">
            <h2>Events</h2>
          </div>

           <?php 
          
            $ExpertId = $_GET["id"];
            $ViewQuery = "SELECT event.id, fname, lname, profile_pic, email, title, profession, date_published, category, theme, venue, event_descrip, event_date, event_bunner, event_time, expert_id FROM event INNER JOIN expert_bio ON event.expert_id = expert_bio.id WHERE event.expert_id = '$ExpertId' ORDER BY date_published DESC LIMIT 0,1";
           // $ViewQuery="SELECT * FROM article ORDER BY date_published desc LIMIT 0,5"; //limt means display only 5 articles on this page then triger next to view other 5
           $Execute = mysqli_query($dbcon,$ViewQuery);
           
           while ($DataRows = mysqli_fetch_array($Execute)) {
             $EventId = $DataRows["id"];
             $ExpertId = $DataRows["expert_id"];
             $DatePublished = $DataRows["date_published"];
             $Theme = $DataRows["theme"];
             $Venue = $DataRows["venue"];
             $Category = $DataRows["category"];
             $EventDescrip = $DataRows["event_descrip"];
             $EventBunner = $DataRows["event_bunner"];
             $EventDate = $DataRows["event_date"];
             $EventTime = $DataRows["event_time"];
             $Lname = $DataRows["lname"];
             $Email = $DataRows["email"];
             $Title = $DataRows["title"];
             $ProfilePic = $DataRows["profile_pic"];
             $Profession = $DataRows["profession"];
           ?>
           <div class="event_content">
            <h3><?php echo $Theme; ?></h3>
            <p>&raquo <?php echo $Title; ?>
              <?php echo $Fname; ?>
              <?php echo $Lname; ?>
            </p>
           <p id="date_posted"><b>Date Posted : </b><?php echo $DatePublished; ?></p>
            <img src="EventPic/<?php echo $EventBunner; ?>" />
           <p><b>Theme :</b> <?php echo htmlentities($Theme); ?></p>
           <p><b>Category :</b> <?php echo htmlentities($Category); ?></p>
           <p><i class="fas fa-map-marker-alt"></i> <?php echo htmlentities($Venue); ?></p>
           <p><i class="fas fa-calendar-week"></i> <?php echo htmlentities($EventDate); ?></p>
           <p><i class="fas fa-clock"></i> <?php echo htmlentities($EventTime); ?></p>
            <p>
              <?php
              if (strlen($EventDescrip)>150) {
                $EventDescrip = substr($EventDescrip, 0,150).'..';
              }
               echo nl2br($EventDescrip);
             ?>
             <br>
             <br>
             <a href="fullevent.php?id=<?php echo $EventId ?>">Read More</a>
           </p>
            
        </div>
      </div>
         <?php }//end While Loop ?> 
              
         </div>
       </div>
     </div>

     <!-- *************************************************************************************** -->
     <!-- *********************** Contact Us ******************************************** -->
<div class="row">
  <div class="col-md-12">
    <div class="contact-head">
       <h4>Contact</h4>
       <p>Lets get interacting</p>
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
              <button type="submit">Send</button>
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
  <!-- ************************************************************************************************* -->

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