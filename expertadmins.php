<?php require_once("include/mysqli_connect.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/functions.php"); ?>
<?php Confirm_Login(); ?>
<?php
if(isset($_POST["Submit"])){
  $UserName = mysqli_real_escape_string($dbcon,trim($_POST["username"]));
  $Email = mysqli_real_escape_string($dbcon,trim($_POST["email"]));
  $Password = mysqli_real_escape_string($dbcon,trim($_POST["password"]));
  $ConfirmPassword = mysqli_real_escape_string($dbcon,trim($_POST["confirmpassword"]));
  date_default_timezone_set("Africa/Cairo");
  $CurrentTime = time();
  $CurrentTime;
 // $DateTime = strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
  $DateTime = strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
  $DateTime;
  $Admin=$_SESSION["UserName"];
  if (empty($UserName) || empty($Email) || empty($Password) || empty($ConfirmPassword)){
  $_SESSION["ErrorMessage"]="All fields must be filled out";
  Redirect_to("expertadmins.php");

}elseif(strlen($Password)<4) {
  $_SESSION["ErrorMessage"]=" Atleast 4 characters for a password are required";
  Redirect_to("expertadmins.php");
}elseif(strlen($Password!==$ConfirmPassword)) {
  $_SESSION["ErrorMessage"]=" password / confirmpassword does not match";
  Redirect_to("expertadmins.php");
}else{
  // global $dbcon;
  $Query= "INSERT INTO registration(datetime,username, email, password,addedby)
           VALUES('$DateTime', '$UserName', '$Email', '$Password', '$Admin')";
  $Excute=mysqli_query($dbcon,$Query);
  if ($Excute) { // run ok
     $_SESSION["SuccessMessage"]="Admin added successfully";
     Redirect_to("expertadmins.php");
  }else{// not run ok
    $_SESSION["ErrorMessage"]=" Failed to add Admin";
    Redirect_to("expertadmins.php");
  }
}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Manage Admins</title>
	<meta charset="utf-8">
	<meta lang="eng">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/expertadmins.css">
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
   <div class="col-md-4">
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
     <a href="expertadmins.php" id="dashboard-active"><i class="fas fa-users-cog"></i>Manage Admins</a>
     <a href="adminservice.php"><i class="fas fa-box"></i>Share Service</a>
     <a href="adminportfolio.php"><i class="fas fa-user-tag"></i>Create Portfolio</a>
     <a href="adminevent.php"><i class="fas fa-calendar-alt"></i>Share Event</a>
     <a href="adminclient.php"><i class="fas fa-user-plus"></i>Add Clients</a>
     <a href="expertcomment.php"><i class="fas fa-comment-alt"></i>Comments</a>
     <a href="expert-articles.php?Page=1" target="_blank"><i class="fas fa-eye"></i>Live Blog</a>
     <a href="adminlogout.php"><i class="fas fa-user-times"></i>Logout</a>
   </div>
   </div>
     <div class="col-md-8">
      <div class="adminManager-container">

       <h1>Manage Admins</h1>
       <?php
        echo Message(); 
        echo SuccessMessage();
       ?>

       <form action="expertadmins.php" method="post">
         <label for="UserName">User Name:</label>
         <p></p>
         <input type="text" name="username" placeholder="User Name" id="UserName" />
         <p></p>
         <label for="Email">Email:</label>
         <p></p>
         <input type="email" name="email" placeholder="Email" id="Email" />
          <p></p>
         <label for="Password">Password:</label>
         <p></p>
         <input type="password" name="password" placeholder="Password" id="Password" />
          <p></p>
         <label for="ConfirmPassword">Confirm Password:</label>
         <p></p>
         <input type="password" name="confirmpassword" placeholder="Confirm Password" id="ConfirmPassword" />
          <p></p>
         <input type="submit" name="Submit" value="Add New Admin" />
       </form>

       <h1>Admins Table</h1>
       <!-- *************** Admin Table ****************** -->
       <div style="overflow-x:auto;">
         <table>
           <tr>
             <th>Sr No.</th>
             <th>Date & Time</th>
             <th>Admin Name</th>
             <th>Email</th>
             <th>Added by</th>
             <th>Action</th>
           </tr>
           <?php
           $ViewQuery="SELECT * FROM registration ORDER BY datetime desc";
           $Excute=mysqli_query($dbcon,$ViewQuery);
           $SrNo=0;
           while ($DataRows=mysqli_fetch_array($Excute)) {
             $Id=$DataRows["id"];
             $DateTime=$DataRows["datetime"];
             $UserName=$DataRows["username"];
             $Email=$DataRows["email"];
             $Admin=$DataRows["addedby"];
             $SrNo++;
           
           ?>
           <tr>
             <td><?php echo $SrNo;?></td>
             <td><?php echo $DateTime;?></td>
             <td><?php echo $UserName;?></td>
             <td><?php echo $Email;?></td>
             <td><?php echo $Admin;?></td>
             <td><a href="deleteadmin.php?id=<?php echo $Id; ?>" id=delete-btn> Delete</a></td>
           </tr>
         <?php } ?>
         </table>
       </div>
       <!-- ****************** Expert Table ******************** -->
       <h1>Expert Table</h1>
       <div style="overflow-x:auto;">
         <table>
           <tr>
             <th>Sr No.</th>
             <th>Date of Reg</th>
             <th>Picture</th>
             <th>Biography</th>
             <th>Title</th>
             <th>Fname</th>
             <th>Lname</th>
             <th>Gender</th>
             <th>Date Of Birth</th>
             <th>Email</th>
             <th>Phone Number</th>
             <th>Telephone Number</th>
             <th>Country</th>
             <th>Residential Location</th>
             <th>Area Code</th>
             <th>School</th>
             <th>Tertiary</th>
             <th>Qualification</th>
             <th>Job Sector</th>
             <th>Type Of Employement</th>
             <th>Company Name</th>
             <th>Job Position</th>
             <th>Position Years</th>
             <th>Profession</th>
             <th>Profession Years</th>
             <!-- <th>Added by</th> -->
             <th>Action</th>
           </tr>
           <?php
           $ViewQuery="SELECT * FROM expert_bio ORDER BY id desc";
           $Excute=mysqli_query($dbcon,$ViewQuery);
           $SrNo=0;
           while ($DataRows=mysqli_fetch_array($Excute)) {
             $Id = $DataRows["id"];
             $Password = $DataRows["password"];
             $Biography = $DataRows["bio"];
             $DateTime = $DataRows["datetime"];
             $ProfilePic = $DataRows["profile_pic"];
             $Title = $DataRows["title"];
             $Fname = $DataRows["fname"];
             $Lname = $DataRows["lname"];
             $Gender = $DataRows["gender"];
             $DateOfBirth = $DataRows["dob"];
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
             $SrNo++;
           
           ?>
           <tr>
             <td><?php echo $SrNo;?></td>
             <td><?php echo $DateTime;?></td>
             <td>
              <img src="ProfilePic/<?php echo $ProfilePic;?>" width=70; height=70;>
            </td>
             <td><?php echo $Biography;?></td>
             <td><?php echo $Title;?></td>
             <td><?php echo $Fname;?></td>
             <td><?php echo $Lname;?></td>
             <td><?php echo $Gender;?></td>
             <td><?php echo $DateOfBirth;?></td>
             <td><?php echo $Email;?></td>
             <td><?php echo $PhoneNumber;?></td>
             <td><?php echo $TelephoneNumber;?></td>
             <td><?php echo $Country;?></td>
             <td><?php echo $Residential;?></td>
             <td><?php echo $AreaCode;?></td>
             <td><?php echo $School;?></td>
             <td><?php echo $Tertiary;?></td>
             <td><?php echo $Qualification;?></td>
             <td><?php echo $JobSector;?></td>
             <td><?php echo $TypeOfEmployment;?></td>
             <td><?php echo $CompanyName;?></td>
             <td><?php echo $JobPosition;?></td>
             <td><?php echo $PositionYears;?></td>
             <td><?php echo $Profession;?></td>
             <td><?php echo $ProfessionYears;?></td>
             <td><a href="deleteadmin.php?id=<?php echo $Id; ?>" id=delete-btn> Delete</a></td>
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
       	  	  <p id="heading-border"></p>
       		  <h4>Integrity, Courage, Motivation & Spiritual focus; Build man's good reputation</h4>
       		   <p>Not only do I constract buildings, I also build men to become responsible, relieable and dependeable beings </p>
       		  <div id="open-btn">
       		     <a href="signup-finall.php"> Open up to Me and I to you <span id="arrow-btn"> &#150&#155</span></a>
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
          <div class="expert-name">
          <h1>John Banda</h1>
          <p><i class="fas fa-user-tie"></i> Business Consultant</p>
          </div>
       	
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