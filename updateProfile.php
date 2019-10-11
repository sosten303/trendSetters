<?php require_once("include/mysqli_connect.php"); ?>
 <?php require_once("include/session.php"); ?>
<?php require_once("include/functions.php"); ?>
<!-- php Confirm_Login();  -->
<?php
if(isset($_POST["Submit"])){
  $Title = mysqli_real_escape_string($dbcon,trim($_POST["title"]));
  $Fname = mysqli_real_escape_string($dbcon,trim($_POST["fname"]));
  $Lname = mysqli_real_escape_string($dbcon,trim($_POST["lname"]));
  $Gender = mysqli_real_escape_string($dbcon,trim($_POST["gender"]));
  $DateOfBirth = mysqli_real_escape_string($dbcon,trim($_POST["dob"]));
  $Bio = mysqli_real_escape_string($dbcon,trim($_POST["bio"]));
  $Target="ProfilePic/".basename($_FILES["profile_pic"]["name"]);
//   $ExpertId=$_SESSION["User_Id"];
  $ProfilePic=$_FILES["profile_pic"]["name"];
  $Email = mysqli_real_escape_string($dbcon,trim($_POST["email"]));
  $PhoneNumber = mysqli_real_escape_string($dbcon,trim($_POST["phone_number"]));
  $TelephoneNumber = mysqli_real_escape_string($dbcon,trim($_POST["telephone_number"]));
  $CountryName = mysqli_real_escape_string($dbcon,trim($_POST["country"]));
  $Residential= mysqli_real_escape_string($dbcon,trim($_POST["residential"]));
  $AreaCode = mysqli_real_escape_string($dbcon,trim($_POST["area_code"]));
  $School = mysqli_real_escape_string($dbcon,trim($_POST["school"]));
  $UniversityCollege = mysqli_real_escape_string($dbcon,trim($_POST["tertiary"]));
  $Qualification = mysqli_real_escape_string($dbcon,trim($_POST["qualification"]));
  $TypeOfEmployment = mysqli_real_escape_string($dbcon,trim($_POST["type_of_employment"]));
  $JobSector = mysqli_real_escape_string($dbcon,trim($_POST["job_sector"]));
  $CompanyName = mysqli_real_escape_string($dbcon,trim($_POST["company_name"]));
  $JobPosition = mysqli_real_escape_string($dbcon,trim($_POST["job_position"]));
  $PositionYears = mysqli_real_escape_string($dbcon,trim($_POST["position_years"]));
  $Profession = mysqli_real_escape_string($dbcon,trim($_POST["profession"]));
  $ProfessionYears = mysqli_real_escape_string($dbcon,trim($_POST["profession_years"]));
  // $UserName = mysqli_real_escape_string($dbcon,trim($_POST["username"]));
  // $Password = mysqli_real_escape_string($dbcon,trim($_POST["password"]));
  // $ConfirmPassword = mysqli_real_escape_string($dbcon,trim($_POST["confirm_password"]));
  date_default_timezone_set("Africa/Cairo");
  $CurrentTime = time();
  $CurrentTime;
 // $DateTime = strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
  $DateTime = strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
  $DateTime;
  // $Admin=$_SESSION["UserName"];
  if (empty($Fname) || empty($Lname) || empty($Email)){
  $_SESSION["ErrorMessage"]="All fields must be filled out";
  Redirect_to("expertregistration.php");

// }elseif(strlen($Password)<4) {
//   $_SESSION["ErrorMessage"] = " Atleast 4 characters for a password are required";
//   Redirect_to("individualProfile.php");
// }elseif(strlen($Password!==$ConfirmPassword)) {
//   $_SESSION["ErrorMessage"] = " password / confirmpassword does not match";
//   Redirect_to("updateProfile.php");
}else{
  // global $dbcon;
  $ExpertId = $_SESSION["User_Id"];
  $Query= "UPDATE expert_bio SET title = '$Title', fname = '$Fname', lname = '$Lname', email = '$Email', gender = '$Gender', dob = '$DateOfBirth', bio = '$Bio', profile_pic = '$ProfilePic', phone_number ='$PhoneNumber',
  telephone_number = '$TelephoneNumber', country = '$CountryName', residential = '$Residential', area_code = '$AreaCode', school = '$School', tertiary = '$UniversityCollege', qualification = '$Qualification', type_of_employment = '$TypeOfEmployment', job_sector = '$JobSector', company_name = '$CompanyName', job_position = '$JobPosition', position_years = '$PositionYears', profession = '$Profession', profession_years = '$ProfessionYears'
  WHERE expert_bio.id = $ExpertId";

  $Excute=mysqli_query($dbcon,$Query);
  move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $Target);
  if ($Excute) {
     $_SESSION["SuccessMessage"]="Profile Updated successfully";
     Redirect_to("individualProfile.php");
  }else{
    $_SESSION["ErrorMessage"]=" Failed to Update Profile Try Again !";
    Redirect_to("updateProfile.php");
  }
}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
	<meta charset="utf-8">
	<meta lang="eng">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
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
                  <button class="dropbtn"><a href="articles.php?Page=0" id="dropdown-article"> Articles</a></button>
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
       		          <a href="login.php"><i class="fas fa-lock-open"></i> Login</a>
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
<!-- ******************************************************* -->
<!-- Expert navbar -->
 <div class="row">
   <div class="col-md-6">
    
   </div>
     <div class="col-md-6">
      <div class="adminlogin-container">

       <h1>Update your Profile</h1>

       <?php
        echo Message(); 
        echo SuccessMessage();
       ?>

       <?php 
          $ExpertId = $_SESSION["User_Id"];
          $Query = "SELECT * FROM expert_bio WHERE expert_bio.id = '$ExpertId'";
          $Excute = mysqli_query($dbcon,$Query);
           while ($DataRows = mysqli_fetch_array($Excute)) {
             $EpertId = $DataRows["id"];
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
           }
        ?>

        <form action="updateProfile.php" method="post" enctype="multipart/form-data">
         <h1><em>Personal Details</em></h1>
           <p></p>
         <span>Your Profile Picture:</span> 
         <img src="ProfilePic/<?php echo $ProfilePic; ?>" with=270px height=100px;>
         <p></p>
         <label>Change Profile Picture :</label>
         <i class="fas fa-camera"></i> <input type="File" name="profile_pic">
         <p></p>
         <label>First Name:</label>
         <p></p>
         <input type="text" name="fname" value="<?php echo $Fname; ?>" placeholder = "Change first name" />
         <p></p>
         <label>Last Name:</label>
         <p></p>
         <input type="text" name="lname" value="<?php echo $Lname; ?>" placeholder = "Change Last name"/>
         <p></p>
         <label for="Title">Prefered Title:</label>
         <p></p>
         <input type="radio" name="title" id="Title" value="Mr" checked="checked" />Mr
         <input type="radio" name="title" id="Title" value="Miss" />Miss
         <input type="radio" name="title" id="Title" value="Mrs" />Mrs
         <input type="radio" name="title" id="Title" value="Dr" />Dr
         <input type="radio" name="title" id="Title" value="Prof"/>Prof
         <p></p>
         <label for="Dob">Date Of Birth:</label>
         <p></p>
         <input type="Date" name="dob" value="<?php echo $DateOfBirth; ?>" id="Dob" />
         <p></p>
         <label for="Gender">Gender:</label>
         <p></p>
         <input type="radio" name="gender" id="Gender" value="Male" checked="checked" />Male
         <input type="radio" name="gender" id="Gender" value="Female" />Female
         <p></p>
          <label>Write your Biography :</label>
         <p></p>
         <textarea name="bio" placeholder="This information will be displayed on your Article Profile"><?php echo $Bio; ?></textarea>

          <h1><em>Contact Details</em></h1>
         <p></p>
         <label for="Email">Email Address:</label>
         <p></p>
         <input type="email" name="email" id="Email" value="<?php echo $Email; ?>" placeholder = "Change Email Address" />
         <p></p>
         <p></p>
         <label for="PhoneNumber">Mobile Number:</label>
         <p></p>
         <input type="text" name="phone_number" value="<?php echo $PhoneNumber; ?>" placeholder = "Change Phone Number" id="PhoneNumber" />
         <p></p>
         <label for="TelephoneNumber">Telephone Number:</label>
         <p></p>
         <input type="text" name="telephone_number" value="<?php echo $TelephoneNumber; ?>" placeholder = "Change Telephone Number" id="TelephoneNumber" />
         <p></p>
         <label for="Country">Country:</label>
         <p></p>
         <select name="country" value="<?php echo $Country; ?>">
            <option value="USA">USA</option>
            <option value="Uk">UK</option>
            <option value="China">China</option>
            <option value="Japan">Japan</option>
            <option value="India">Egypt</option>
            <option value="India">Nigeria</option>
            <option value="India">Ghana</option>
            <option value="India">Kenya</option>
            <option value="India">Malawi</option>
            <option value="India">Botswana</option>
            <option value="India">Namibia</option>
            <option value="India">South Africa</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
         </select>
         <p></p>
         <label for="Residential">Residential Address:</label>
         <p></p>
         <input type="text" name="residential"value="<?php echo $Residential; ?>" placeholder = "Change Your Location : City / Town" id="Residential" />
         <p></p>
         <label for="AreaCode">Area Code:</label>
         <p></p>
         <input type="text" name="area_code" value="<?php echo $AreaCode; ?>" placeholder = "Change Your Area Code" id="AreaCode" />
         <p></p>
         
         <h1><em>Education Background</em></h1>

          <label for="School">School you went: </label>
          <p></p>
         <input type="text" name="school" id="School" value="<?php echo $School; ?>" placeholder = "Change name of your School" placeholder=" High / or Seconary School" />
          <P></P>
          <label for="UniversityCollege">University or College:</label>
          <P></P>
          <input type="text" name="tertiary" value="<?php echo $Tertiary; ?>" placeholder = "Change University / College" id="UniversityCollege" />
          <p></p>
          <label>Qualification Obtained:</label>
          <p></p>
          <select name="qualification" value="<?php echo $Qualification; ?>">
            <option value="Degree">Degree</option>
            <option value="Diploma">Diploma</option>
            <option value="Certificate">Certificate</option>
          </select>
          <p></p>

          <h1><em>Form of Work and Experiences:</em></h1>
          <p>State your status of employment</p>
          <select name="type_of_employment">
            <option value="Self employed">Self Employeed</option>
            <option value="Organisation">Work for an Organisation</option>
          </select>
         
          <h3>Job Sector</h3>
          <p>Which sector is your Business or Organisation in</p>
          <p></p>
          <select name="job_sector">
            <option value="private">Private </option>
            <option value="public">Public </option>
            <option value="government">Government </option>
          </select>
          <p></p>
          <label for="Firm">Name of your firm:</label> 
          <input type="text" name="company_name" value="<?php echo $CompanyName; ?>" placeholder = "Change Company Name" id="Firm" />
          <p></p>
          <label for="JobPosition"> Your Job Position</label>
          <p></p>
          <input type="text" name="job_position" value="<?php echo $JobPosition; ?>" placeholder = "Change Position" id="JobPosition" /> 
          <p></p>
          <p>How long have you been holding on to this position ?</p>
          <input type="radio" name="position_years" id="Experience" value="1 - 5 years" checked="checked" />1 - 5 years
          <input type="radio" name="position_years" id="Experience" value="5 - 10 years" />5 - 10 years
          <input type="radio" name="position_years" id="Experience" value="10 - 15 years" />10 - 15 years
          <input type="radio" name="position_years" id="Experience" value="15 - 20 years" />15 - 20 years
          <input type="radio" name="position_years" id="Experience" value="Over 25 years" />Over 25 years
          <p></p>
          <p></p>
          <label for="Profession">Profession:</label>
          <p></p>
          <input type="text" name="profession" value="<?php echo $Profession; ?>" placeholder = "Change Profession" id="Profession" />
          <p></p>
          <label for="Experience"></label>
          <p>Check the number of years you have been in this work profession</p>
          <input type="radio" name="profession_years" id="Experience" value="1 - 5 years" checked="checked" />1 - 5 years
          <p></p>
          <input type="radio" name="profession_years" id="Experience" value="5 - 10 years" />5 - 10 years
          <p></p>
          <input type="radio" name="profession_years" id="Experience" value="10 - 15 years" />10 - 15 years
          <p></p>
          <input type="radio" name="profession_years" id="Experience" value="15 - 20 years" />15 - 20 years
          <p></p>
          <input type="radio" name="profession_years" id="Experience" value="20 - 25 years" />20 - 25 years
          <p></p>
          <input type="radio" name="profession_years" id="Experience" value="25 - 30 years" />25 - 30 years
          <p></p>
          <input type="radio" name="profession_years" id="Experience" value="30 - 35 years" />30 - 35 years
          <p></p>
          <input type="radio" name="profession_years" id="Experience" value="35 - 40 years" />35 - 40 years
          <p></p>
          <input type="radio" name="profession_years" id="Experience" value="40 - 45  years" />40 - 45  years
          <p></p>
         <input type="radio" name="profession_years" id="Experience" value="45 - 50 years" />45 - 50 years
         <p></p>
         <input type="radio" name="profession_years" id="Experience" value="50 - over years" />50 - over years
         <p></p>
         <input type="submit" name="Submit" value="Update Profile">
         <p></p>
       </form>
       <div>
      
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
          <div class="expert-name">
          <!-- <h1>John Banda</h1>
          <p><i class="fas fa-user-tie"></i> Business Consultant</p> -->
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