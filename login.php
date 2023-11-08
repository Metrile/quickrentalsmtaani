<?php 
session_start();
include 'dbconfig.php'; //This will handle database connection
//checklogin
if
	(isset($_SESSION['userID'])){
		header('location:login.php');
	}


if (isset($_POST['login'])) {
	
	//STEP 1: store sent data from the form
	$user=$_POST['gmailaccount'];
	$pass=$_POST['password'];

	// STEP 2: check if fields are empty

	if (empty($user) || empty($pass)) {
		// STEP 3: prompt user to fill all fields.
		echo "Please provide all details";
	}else{
		// STEP 4: continue to run Database Query
		$sql = "SELECT * FROM tbl_users WHERE gmailaccount = '$user'";
		$query = mysqli_query($conn, $sql);

		// STEP 5: check if query is run successfully
		//  $count = mysqli_num_rows($query);
		//  if ($count > 0) {
		// 	echo "Records found";
		// }elseif($count < 1){
		//  	echo "No Records";
		//  }

		if($query == true){
		// STEP 6: use foreach loop to display data from the Database 
			foreach ($query as $key => $loginValue) {
				// echo Database values...
				$db_password =$loginValue['password'];
				$db_id=$loginValue['id'];
				$db_user=$loginValue['gmailaccount'];
				// $db_user_fname=$loginValue['firstname'];
				// $db_user_lname=$loginValue['lastname'];
			// $db_user_phonenumber=$loginValue['phonenumber'];
			}
		// STEP 7 : compare database value with user sent data
		 if ($pass==$db_password) {
		  	echo "Login was successful<br>";
		  	 // redirect page
		  	session_start();
		  	$_SESSION['userID']=$db_id;
		  	$_SESSION['gmailaccount']=$$db_user;
		  	// $_SESSION['userfname']=$db_user_fname;
		  	// $_SESSION['userphonenumber']=$db_user_phonenumber;
		  	   

		  }else{
		  	echo "Login successful";
		  	header ('location:about.php');
		  } 
		}else{
		echo 'Login failed...';
	}
	}


}else{
	echo "Login to continue...";
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
<li id="applink"><a href="#"id="link">ABOUT</a></li>
<li id="applink"><a href="#"id="link">CONTACT</a></li>


	</ul>	
	</nav>


</header>
<body>
	<!-- <img src="logo2.webp"section> -->
	<!-- <start 1st section -->	
	<section id="login_section">
	<form id="login_form" action="" method="post">
		<h2 id="sign_up">Sign</h2>
		<label>gmilaccount</label><br>
		<input type="text" name="gmailaccount"><br>
		<label>Password</label><br>
		<input type="text" name="password"><br>
		<br><input type="submit"name="login" value="Signup"><br>
	</form>
	<small><a href="#">REGISTER|</a> <a href="#">Reset Password</a></small>      

	
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
		background: #933339;
	}
	nav{
		background: #933339;
		

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

