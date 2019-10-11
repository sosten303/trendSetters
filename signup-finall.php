<!DOCTYPE html>
<html>
<head>
	<title>sign-up final</title>
	<meta charset="utf-8">
	<meta lang="eng">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/signup-finall.css">
</head>
<body>

  <?php 
  // This script performs an INSERT query that adds a record to the users table.
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = array(); // Initialize an error array.
    // Was the first name entered?    
    if (empty($_POST['fname'])) { 
        $errors[] = 'You did not enter your first name.';
        }
  else { $fname = trim($_POST['fname']);
       } 

     // Was the town was entered?    
    if (empty($_POST['town'])) { 
        $errors[] = 'You did not enter town.';
        }
  else { $town = trim($_POST['town']);
       } 

     // Was the country was entered?    
    if (empty($_POST['pnumber'])) { 
        $errors[] = 'You did not enter your phone number.';
        }
  else { $pnumber = trim($_POST['pnumber']);
       } 

        // Was the country was entered?    
  //   if (empty($_POST['country'])) { 
  //       $errors[] = 'You did not enter your country.';
  //       }
  // else { $pnumber = trim($_POST['country']);
  //      } 

      // Was the last name entered? 
    if (empty($_POST['lname'])) { 
        $errors[] = 'You did not enter your last name.';
       } 
  else { $lname = trim($_POST['lname']);
       }  
      // Was an email address entered? 
    if (empty($_POST['email'])) { 
        $errors[] = 'You did not enter your email address.'; 
       }
  else { $email = trim($_POST['email']);
       } 
      // Did the two passwords match? 
    if (!empty($_POST['password'])) { 
         if ($_POST['password'] != $_POST['password1']) { 
             $errors[] = 'Your passwords were not the same.';
          }
  else { $pwd = trim($_POST['password']); 
       }  
    } 
  else { $errors[] = 'You did not enter your password.'; 
                          }
           //Start of the SUCCESSFUL SECTION. i.e all the fields were filled out 
  if (empty($errors)) { // If no problems encountered, register user in the database 
      require ('mysqli_connect.php'); // Connect to the database. 
    //Make the query 
  $q = "INSERT INTO users (user_id, fname, lname, email, password, pnumber, town, registration_date)
        VALUES (' ', '$fname', '$lname', '$email', SHA1('$pwd'),'$pnumber', '$town', NOW() )";
  $result = @mysqli_query ($dbcon, $q); // Run the query.
       if ($result) { // If it ran OK.
         header ("location: welcome.php");
         echo "<h1> successfully submitted</h1>";
            exit(); //End of SUCCESSFUL SECTION ...
 }

    else { // If the form handler or database table contained errors 
          // Display any error message
    // header('error.php');
            //      echo '<h2>System Error</h2>
            // <p>You could not be registered due to a system error. We apologize for any inconvenience.</p>';
             // Debug the message:
                 // echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
        } // End of if clause ($result) 
          mysqli_close($dbcon); // Close the database connection. 
         // Include the footer and quit the script:
          // include ('footer.php');
          exit();
    }
  else { // Display the errors
     header("location: error.php");
        //    echo '<h2>Error!</h2>
        //    <p class="error">The following error(s) occurred:<br>';
        //    foreach ($errors as $msg) { // Print each error.
        //             echo " - $msg<br>\n";
        // }
          echo '</p><h3>Please try again.</h3><p><br></p>';
        }// End of if (empty($errors)) IF.
  } // End of the main Submit conditional. 
?>
	 <!-- navigation bar -->
    <!-- heading -->

<div class="row">
  <div class="col-md-12">
    <div class="heading-wrapper-background ">
      <div class="heading-color">
      <!-- <div class="heading-wrapper"></div> -->
      <div class="row">
       <div class="col-md-12">

        <!-- <div class="heading-wrapper-background"></div> -->
          <!-- main navbar -->
          <!-- <div class="main-navbar-background"></div> -->
          <div id="main-navbar">
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
      </div>
    <!-- toggle navbar -->
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-2">
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
</div>   <!-- toggle link -->
   <div class="col-md-2">
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
  </div><!-- toggle link -->
<div class="col-md-2">           
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
</div><!-- toggle link -->
    <div class="col-md-2">           
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
    </div><!-- toggle link -->
<div class="col-md-4">     
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
         </div><!--end navigation bar-->
     <!-- ****************************************************************** -->  
  
     <!-- ************************************************************************* -->
     <div class="row">
       <div class="col-md-12">
         <div class="row">
           <div class="col-md-7">
            <!-- <div class="heading-wrapper"> </div> -->
            <div class="heading-wrapper-content">
            <div class="heading-wrapper-def">
              <!-- <p id="heading-border"></p> -->
            <h2>You are welcome . </h2>
             <p>We ecourage you to share your Situation, Concern, Question and or Idea and for we provide solution</p>
            <!-- <div id="open-btn">
               <a href="#"> Open up to us and we to you <span id="arrow-btn"> &#150&#155</span></a>
             </div> -->
          </div>
             
           </div>
        
     
       </div>

<!-- **************************************************************************** -->



       <!-- signup form -->

        <div class="col-md-5">
          <!-- php code for registration -->

          <div class="signup-container">
            <h4>Enter your personal details to create an account</h4>
            <p id="signup-border"></p>
            <form action="signup-finall.php" method="post">
            <!-- <label>Username: *</label>
            <input type="text" name="" placeholder="Names">
            <p></p> -->
            <label>First name: *</label>
            <input type="text" name="fname" placeholder="Name"
            value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>">
            <p></p>
            <label>Last name: *</label>
            <input type="text" name="lname" placeholder="Last name">
            <p></p>
            <label>Email: *</label>
            <input type="text" name="email" placeholder="Ensure your email has @">
            <p></p>
            <label>Password: *</label> <input type="checkbox" onclick="myFunction()">Show Password
            <input type="Password" name="password"value="" id="myInput" placeholder="your Password should be atleast 8-16 characters">
            <p></p>
            <label>Confirm Password: *</label>
            <input type="Password" name="password1" placeholder="Re-enter your Password">
            <p></p>
            <label>Phone Number: *</label>
            <input type="text" name="pnumber" placeholder="Your Phone number with country code e.g +1">
            <p></p>
            <label>Date of Birth: *</label>
            <input type="date" name="dob">
            <p></p>
            <label>Country: *</label>
            <select>
              <option>Zambia</option>
              <option>Zimbabwe</option>
              <option>America</option>
              <option>Uk</option>
            </select>
            <p></p>
            <label>Town / City:</label>
            <input type="text" name="town">
            <p></p>
            <p id="signup-border"></p>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a></p>
            <p>Already have an Account ? <a href="login-final.php">Sign in</a></p>
            <button type="submit" name="submit">Create Account</button>

            </form>
            <p id="signup-border"></p>
            <p>Or Create Using</p>
             <a href="#" id="signup-facebook"><i class="fab fa-facebook-f"></i><strong> Facebook</strong> account</a>
             <a href="#" id="signup-google"><i class="fab fa-google-plus-g"></i><strong> Google plus</strong> account</a>
            </div>
          <!-- <div class="aside-navbar">
            <a href="#"><i class="fas fa-users"></i> About Us</a>
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
    </div>
   </div>
  </div>
</div>


     <!-- *************************************************************************************** -->
<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("main-navbar").style.top = "0";
  } else {
    document.getElementById("main-navbar").style.top = "-20px";
  }
}
</script>



<!-- ############### script to hide and show Password ################### -->
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
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