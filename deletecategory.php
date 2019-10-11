 <?php require_once("include/session.php"); ?>
<?php require_once("include/functions.php"); ?>
<?php require_once("include/mysqli_connect.php"); ?>

<?php
  if (isset($_GET["id"])) {
  	$IdFromURL = $_GET["id"];
  	$Query = "DELETE FROM category WHERE id='$IdFromURL'";
  	$Excute = mysqli_query($dbcon,$Query);
    
    if ($Excute) {
    	$_SESSION["SuccessMessage"]="Cotegory Deleted Successully";
    	Redirect_to("categories.php");
    }else{
    	$_SESSION["ErrorMessage"]="Something Went Wrong. Try Again !";
    	Redirect_to("categories.php");
    }
  }
?>