<?php 
session_start();
function Message(){
	if(isset($_SESSION["ErrorMessage"])){
		$OutPut = "<div style = \"background-color:red; color:white\">";
		$OutPut.= htmlentities($_SESSION["ErrorMessage"]);
		$OutPut.= "</div>";
		$_SESSION["ErrorMessage"] = null;
        return $OutPut;
	}
} 

function SuccessMessage(){
	if(isset($_SESSION["SuccessMessage"])){
		$OutPut = "<div style = \"background-color:green; color:white\">";
		$OutPut.= htmlentities($_SESSION["SuccessMessage"]);
		$OutPut.= "</div>";
		$_SESSION["SuccessMessage"] = null;
        return $OutPut;
	}
} 
?>