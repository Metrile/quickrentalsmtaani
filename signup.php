<?php 
include 'dbconfig.php';

if (!empty($_POST['submit'])) {
	// form is submited
	//echo "Form submited";
	//store form data
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phonenumber=$_POST['phonenumber'];
$gmailaccount=$_POST['gmailaccount'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword']; 

	

	// $Username = $_POST['username'];
	// $Password = $_POST['password'];


if (empty($firstname)&&empty($lastname)&&empty($phonenumber)&& empty($gmailaccount)&&empty($password)&&empty($confirmpassword)) {
	echo "Please provide all fields";
}else{
	

	// Save in the DB
	$sql="INSERT INTO `tbl_users`(`firstname`, `lastname`, `phonenumber`, `gmailaccount`, `password`, `confirmpassword`) VALUES ('$firstname','$lastname','$phonenumber','$gmailaccount','$Password','$confirmpassword')";
	if(mysqli_query($conn,$sql)==true){
		echo "Registration successfull";
		header('location:login.php');
	}else{
		echo "Something went wrong. Please try again..!";
	}

}
}else{
	echo "Please submit your form";
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>QUICK RENTALS MTAANI</title>
</head>
<header>
	<nav>
	<img src="logo2.webp" id="applogo">
	<ul>
	 <li id="applink">
<li id="applink"><a href="index.html"target="_blank" title="Back Home" id="link">HOME</a></li>
<li id="applink"><a href="about.html"id="link">ABOUT</a>title="</li>

<li id="applink"><a href="contact"id="link">CONTACT</a></li>

	</ul>	
	</nav>


</header> 
<body>

	<!-- <img src="logo2.webp"section> -->
	<!-- <start 1st section -->
	<!-- <start login section-->
	<section id="login_section">
	<form id="login_form" action="" method="post">
		<h2 id="sign_up form">Sign up</h2>
		<label>First name</label><br>
		<input type="text" name="firstname"><br>
		<label>Last name</label><br>
		<input type="text" name="lastname"><br>
		<label>Enter your Phone Number</label><br>
		<input type="text" name="phonenumber"><br>
		<label>Enter your gmail Account</label><br>
		<input type="text" name="gmailaccount"><br>
		<label>Enter your Password</label><br>
		<input type="text" name="password"><br>
		<label>Confirm Password</label><br>
		<input type="text" name="confirmpassword"><br>
		<br><input type="submit"name="submit" value="register"><br>
	</form>
	<small><a href="#">Already have an Account?|</a></small>
	<!-- <end login setion -->


	<!-- <start 2nd section	 -->

</section>
</body>
</html>
<style type="text/css">
	html{
font-family: inter;
	}
	header{
		background:#933339;
	}
	nav{
		background:#933339;
	}
	#applogo{
		width:100px;
		height:100px;
		border-radius:100px;
		margin-left:10px;
		margin-top:10px;
	}
ul{
	float: right;
	display: inline;	
}
#appnavmenu{
	list-style:none;
	color:white;
	display: inline;
	text-align:left;
	float:right;
	padding-left: 10px;  
}
#applink{
	color: #933339;
	list-style: none;
	display: inline-block;
	padding-left: 10px;
	margin-right: 12px;
	margin-top: 30px;
}
#link{
	color: white;
	text-decoration: none;
	font-size: 24px;
	font-family: inter;
}
/*login style*/
#appsection_one{
	background: #933339;
	display:inline;
	width: 80px;
	height: 80px;
	border-radius: 100%;
	margin-right:40px;
	margin-bottom:40px;
	padding-left:15px;
}

#login_section{    
	background: #933339;
	align-content:center;
	text-align:center;
	padding-top: 50px;
	padding-bottom: 50px; 
}

#login_form{
	background: black;
	text-align: center;
	color: white;
	padding:top 10px;
	padding-bottom: 10px;
	}
/*	login_form > h2{
		color: white;
	}*/
			
	/*input style*/
	input[type="text"]{
		width: 100px;
		height: 30px;
		border-radius: 6px;
		border-bottom:1px solid;
		border-top:none;
		border: right:none;
		background: white;

	}
	input[type="text"]{
		width: 35%;
		height: 35px;
		border-radius: 6px;
		font-size: 22px;
		
	}
    
     #sign_up{
     	color: white;

     }


</style>