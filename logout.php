<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
</head>
<body>
<?php session_start();//access the current session.
// if no session variable exists then redirect the user
if (!isset($_SESSION['user_id'])) {
 header("location: signup-finall.php");
 exit();
  //cancel the session and redirect the user:
   }else{ //cancel the session
   	$_SESSION = array(); // Destroy the variables.
   	session_destroy(); // Destroy the session 
   	setcookie('PHPSESSID', ", time()-3600,'/', ", 0, 0);//Destroy the cookie
    header("location:signup-finall.php");
    exit();
   }
 ?>

</body>
</html>