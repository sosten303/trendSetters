<?php require_once("include/mysqli_connect.php"); ?>
<?php require_once("include/session.php"); ?>

<?php 
// Admin Functions
function Redirect_to ($New_Location){
	header("Location:".$New_Location);
	exit;
} 

function Login_Attempt($Email,$Password){
	global $dbcon;
	$Query="SELECT * FROM registration 
	WHERE email = '$Email' AND password = '$Password'";
	$Excute=mysqli_query($dbcon,$Query);
	if ($admin=mysqli_fetch_assoc($Excute)){ 
		return $admin;
	}else{
		return null;
	}
}

function Login(){
	if (isset($_SESSION["User_Id"])) {
		return true;
	}
}
 function Confirm_Login(){
 	if (!Login()) {
 	  $_SESSION["ErrorMessage"]="You have to login first ! ";
      Redirect_to("login.php");
 	}
 }

 // Expert Functions
 function Login_Attempt_Expert($Email,$Password){
	global $dbcon;
	$Query="SELECT * FROM expert_bio 
	WHERE email = '$Email' AND password = '$Password'";
	$Excute=mysqli_query($dbcon,$Query);
	if ($admin=mysqli_fetch_assoc($Excute)){ 
		return $admin;
	}else{
		return null;
	}
}
?>