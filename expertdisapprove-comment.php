<?php require_once("include/session.php"); ?>
<?php require_once("include/functions.php"); ?>
<?php require_once("include/mysqli_connect.php"); ?>

<?php
  if (isset($_GET["id"])) {
  	$IdFromURL = $_GET["id"];
  	$Query = "UPDATE comments SET status = 'OFF' WHERE id='$IdFromURL'";
  	$Excute = mysqli_query($dbcon,$Query);
    
    if ($Excute) {
    	$_SESSION["SuccessMessage"]="Comment Dis-Approved Successully";
    	Redirect_to("expertcomment.php");
    }else{
    	$_SESSION["ErrorMessage"]="Something Went Wrong. Try Again !";
    	Redirect_to("expertcomment.php");
    }
  }
?>