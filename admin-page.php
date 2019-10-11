<?php
 session_start();
 if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1)) {
      header("Location: login-finall.php");
      exit();
   }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
</head>
<body>
      <h1>THIS IS THE ADMIN PAGE!!!</h1>
      <?php
      echo '<h2>Welcome to the Admin Page ';
       if (isset($_SESSION['fname'])){ echo "{$_SESSION['fname']}"; } echo '</h2>'; 

       ?> 
       <img src="img/37.jpg">
       <p><b>Manage Users and Experts</b></p>
       <p>Assign Positions to Experts</p>
       <p>Deleting and editing records</p>
       <p>Paginating the displayed record</p>
       <p>Searching for an individual record</p>

      <a href="signup-finall.php">Back to the main menu</a>
       <ul>
       	<li><a href="logout.php">Logout</a></li>
       	<li><a href="view-users.php">View Members</a></li>
       	<li><a href="#">Search</a></li>
       	<!-- <li><a href="register-password.php">New Password</a></li> -->
       </ul> 
</body>
</html>