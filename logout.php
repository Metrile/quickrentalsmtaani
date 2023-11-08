<?php
session_start();
include'dbconfig.php';
// This will handle database connection

// checklogin
if
(isset($_SESSION['userID']))
{

header('location:home.php');
}


if(isset($_POST['login'])){

	// STEP1:store sent data from the form
	$user=$_POST['Email'];
	$pass=$_POST['password'];

	//STEP2:check if fields are empty   
}
 
 ?>