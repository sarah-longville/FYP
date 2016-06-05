<?php 
include("includes.php");

$user = new user;

if(!$user->isloggedin()){
	header("Location: error.php"); 
	exit;
}

$user->getsession();

if(!empty($_POST)){
	$newuser = new user;
	$newuser->username = $_POST['username'];
	$newuser->emailaddress = $_POST['emailaddress'];
	$newuser->password = $_POST['password'];
	
	$user->add();	
}

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add user</title>
</head>

<body>
</body>
</html>