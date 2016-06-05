<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<title>Admin</title>
</head>

<body>

<form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
                    <label>Username:</label> <input type="text" name="username"/> <p></p>
                    <label>Password:</label> <input type="password" name="password"/> <p></p>
                    <input type="submit" value="Login"/>
                    <label></label>
                </form>

</body>
</html>
