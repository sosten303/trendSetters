<?php require_once("include/mysqli_connect.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/functions.php"); ?>

<?php
if(isset($_POST["Submit"])){
  $Name = mysqli_real_escape_string($dbcon,trim($_POST["username"]));
  $Email= mysqli_real_escape_string($dbcon,trim($_POST["email"]));
  $Comment = mysqli_real_escape_string($dbcon,trim($_POST["comment"]));
  date_default_timezone_set("Africa/Cairo");
  $CurrentTime = time();
  $CurrentTime;
 // $DateTime = strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
  $DateTime = strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
  $DateTime;
  $PostId=$_GET["id"];
  if (empty($Name) || empty($Email) || empty($Comment)){
  $_SESSION["ErrorMessage"]=" All fields are required";

}elseif(strlen($Comment)>500) {
  $_SESSION["ErrorMessage"]="Only 500 Characters are allowed in comment";

}else{
  // global $dbcon;
  $PostIdFromURL=$_GET['id'];
  $Query="INSERT INTO comments(datetime,username,email,comment,approvedby,status,admin_panel_id) 
  VALUES ('$DateTime','$Name', '$Email', '$Comment','Pending', 'OFF', '$PostIdFromURL')";
  $Excute=mysqli_query($dbcon,$Query);
  if ($Excute) {
     $_SESSION["SuccessMessage"]="Comment added successfully";
     Redirect_to("expertfullpost.php?id={$PostId}");
  }else{
    $_SESSION["ErrorMessage"]="Something went wrong try again !";
    Redirect_to("expertfullpost.php?id={$PostId}");
  }
}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Expert full article</title>
<meta charset="utf-8">
	<meta lang="eng">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/expertfullpost.css">
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
       	  	     <a href="new.php" id="logo-name">TREND<span id="logo">setters</span></a>
       	    	   <a href="expert-home.php">Home</a>

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
                    <a href="portfolio.php">Portfolio</a>
                      <!-- dropdown btn -->
               <div class="dropdown">
                    <button class="dropbtn"><a href="#" id="dropdown-expert"> About</a><!-- <small>&#9947</small> -->
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
                <h2>Full Article</h2>
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
      <!-- Articles-->
<div class="row">
  <div class="col-md-12">
    <div class="article-head">
       <h1>Articles</h1>
       <p>That provide solutions to your need</p>
    </div>
 </div>    
<div class="row">
  <div class="col-md-1"></div>
     <div class="col-md-7">
      <!-- ******************************************************** -->
      <div class="article-container">
      <?php
          // $ExpertId = $_SESSION["User_Id"];
          $ArticleIdFromUrl = $_GET["id"];
          $ViewQuery = "SELECT article.id, fname,lname, bio, profile_pic,email,title, profession, date_published, article_text, article_bunner, category, article_title, expert_id FROM article INNER JOIN expert_bio ON article.expert_id = expert_bio.id WHERE article.id = '$ArticleIdFromUrl'";
           // $ViewQuery="SELECT * FROM article ORDER BY date_published desc LIMIT 0,5"; //limt means display only 5 articles on this page then triger next to view other 5
           $Excute = mysqli_query($dbcon,$ViewQuery);
           
           while ($DataRows = mysqli_fetch_array($Excute)) {
             $ArticleId = $DataRows["id"];
             $ExpertId = $DataRows["expert_id"];
             $DatePublished = $DataRows["date_published"];
             $ArticleTitle = $DataRows["article_title"];
             $Category = $DataRows["category"];
             $Image = $DataRows["article_bunner"];
             $Article = $DataRows["article_text"];
             $Fname = $DataRows["fname"];
             $Lname = $DataRows["lname"];
             $Email = $DataRows["email"];
             $Title = $DataRows["title"];
             $Biography = $DataRows["bio"];
             $ProfilePic = $DataRows["profile_pic"];
             $Profession = $DataRows["profession"];
           ?>
           <div class="article-details">
            <span id="category"><?php echo htmlentities($Category);?></span>
            
            <h1><?php echo htmlentities($ArticleTitle);?></h1>
             <img src="Upload/<?php echo $Image; ?>" with="10%;">
             <img src="ProfilePic/<?php echo $ProfilePic; ?>" id = "ProfilePic" vspace = 1; />
            <span id="expert"><?php echo htmlentities($Fname);?> |</span><span id="datetime"><i class="far fa-calendar"></i><?php echo htmlentities($DatePublished);?></span>
              </div> 
               <p><?php echo nl2br($Article); ?></p>
          
         <?php } ?>
         <!-- ******************* form *********************************** -->
          <hr>
         <h4>Share your Thoughts about this Article</h4>

         <?php
         $PostIdForComments = $_GET['id'];
         $ExtractingCommentQuery = "SELECT * FROM comments WHERE admin_panel_id = $PostIdForComments AND status='ON'";
         $Excute = mysqli_query($dbcon,$ExtractingCommentQuery);
         while($DataRows = mysqli_fetch_array($Excute)) {
           $CommentDate = $DataRows['datetime'];
           $UserName = $DataRows['username'];
           $UserComment = $DataRows['comment'];
         
         ?>
         <div class="UserComment">
          <img src="img/12.jpg">
         <p><b><?php echo $UserName; ?></b></p>
         <p><?php echo $CommentDate; ?></p>
         <p><?php echo nl2br($UserComment); ?></p>
         </div>
       <?php } ?>
       <!-- *************************** Form **************************** -->
       <div class="UserForm">
        <h3>Post your Comment</h3>
          <form action="expertfullpost.php?id=<?php echo $PostId; ?>" method="post" enctype="multipart/form-data">
         <label for="UserName">Name:</label>
         <input type="text" name="username" placeholder="Name" id="UserName">
         <p></p>
         <label for="UserEmail">Email:</label>
         <input type="email" name="email" placeholder="your Email" id="UserEmail">
         <p></p>
         <label>Comment :</label>
         <textarea name="comment"></textarea>
         <p></p>
         <input type="submit" name="Submit" value="Submit">
       </form>
     </div>
       </div>
      <!-- ************************************************************** -->
          
         </div>
         <div class="col-md-4">
        <!-- *********** Expert Profiles ******************************* -->
      <?php
          // $ExpertId = $_SESSION["User_Id"];
          $ArticleIdFromUrl = $_GET["id"];
          $ViewQuery = "SELECT article.id, fname,lname, bio, profile_pic,email,title, profession, date_published, article_text, article_bunner, category, article_title, expert_id FROM article INNER JOIN expert_bio ON article.expert_id = expert_bio.id WHERE article.id = '$ArticleIdFromUrl'";
           // $ViewQuery="SELECT * FROM article ORDER BY date_published desc LIMIT 0,5"; //limt means display only 5 articles on this page then triger next to view other 5
           $Excute = mysqli_query($dbcon,$ViewQuery);
           
           while ($DataRows = mysqli_fetch_array($Excute)) {
             $ArticleId = $DataRows["id"];
             $ExpertId = $DataRows["expert_id"];
             $DatePublished = $DataRows["date_published"];
             $ArticleTitle = $DataRows["article_title"];
             $Category = $DataRows["category"];
             $Image = $DataRows["article_bunner"];
             $Article = $DataRows["article_text"];
             $Fname = $DataRows["fname"];
             $Lname = $DataRows["lname"];
             $Email = $DataRows["email"];
             $Title = $DataRows["title"];
             $Biography = $DataRows["bio"];
             $ProfilePic = $DataRows["profile_pic"];
             $Profession = $DataRows["profession"];
           ?>
          <div class="about-author">
           <h2>About Author</h2>
          <img src="ProfilePic/<?php echo $ProfilePic; ?>">
          <div class="about-author-detail">
          <p><?php echo htmlentities($Title); ?> : <?php echo htmlentities($Fname); ?> <?php echo htmlentities($Lname); ?></p>
          <p><i class="fas fa-user-tie"></i> <b><?php echo htmlentities($Profession); ?></b></p>
        </div>
            
            <div class="bio">
            <?php
            if (strlen($Biography)>150) {
               $Biography = substr($Biography, 0,150);
            }
             echo nl2br($Biography);
             ?>
             <br>
             <br>
             <a href="AboutAuthorPost.php?id=<?php echo $ExpertId ?>"> Read More &raquo</a>
           </div>
        </div> 
         <?php }//end While Loop ?>

            <div class="recentPost-container">
             <h2>Recent Articles</h2>
             <p><small>&raquo <?php echo htmlentities($Title); ?> <?php echo htmlentities($Fname); ?> <?php echo htmlentities($Lname); ?></small></p>
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
             
                 <a href="expert-only-articles.php?Page=1" id="more"> Read More &raquo</a>

             </div>
           </div>
              
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