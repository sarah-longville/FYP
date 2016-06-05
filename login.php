<?php
include("includes.php");

if (isset($_POST)){
	$user = new user;
	if ($user->login) {
		header ('Location: admin.php');
	}

}

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>

					<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">
                    <label for:"username">Username:</label> <input type="text" name="username"/> <p></p>
                    <label for:"password">Password:</label> <input type="password" maxlength="20" name="password"/> <p></p>
                    <input type="submit" value="Login"/>
                    <label></label>
                </form>
                
</body>
</html>