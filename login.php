<?php

session_start();

if($_GET["logout"]==1 AND $_SESSION['id']) {session_destroy();

$message="You have been logged out succesfully!";

}


include("connection.php");

if($_POST['submit']=="Sign up"){

	if(!$_POST['email']) 
		$error.="<br />Please enter your email";
	else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
		$error.="<br />Please enter valid email"; 

	if(!$_POST['password'])
		$error.="<br />Please enter your password";
	else{
		if(strlen($_POST['password'])<8)

		$error.="<br />Please enter more than 8 character for your password";
	if(!preg_match('`[A-Z]`',$_POST['password']))

		$error.="<br />Please include atleast 1 capital letter in your password";
	}

if($error)
	$error= "There were error(s) in your signup details :".$error;

else{

$query= "SELECT * FROM `users` WHERE email ='".mysqli_real_escape_string($link, $_POST['email'])."'";

$result = mysqli_query($link,$query);

$results = mysqli_num_rows($result);
if($results > 0)
	$error="Email address already registered, Do you want to login?";
else{

$query = "INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";


mysqli_query($link,$query);

echo "Congrats, You've been signed up!";

$_SESSION['id']=mysqli_insert_id($link);



//Redirect to login page

header("location:mainpage.php");
}

}

}

//login checking

if($_POST['submit']=="Login")
{
$emailid = $_POST['loginemail'];
$pass = $_POST['loginpassword'];


$query = "SELECT * FROM users where email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";

$result = mysqli_query($link,$query);

$row = mysqli_fetch_array($result);

if($row)
{

$_SESSION['id']=$row['id'];


//redirect to login page
header("location:mainpage.php");

} else{

	$error ="Error, Could not find a user with these credentials! Please try again";
}

}

?> 
