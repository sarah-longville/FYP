<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
</head>

<body>

 <?php 

 $past = time() - 100; 

 //this makes the time in the past to destroy the cookie 

 setcookie(ID_my_site, gone, $past); 

 setcookie(Key_my_site, gone, $past); 

 header("Location: login.php"); 

 ?> 

</body>
</html>