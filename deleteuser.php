<?php
SESSION_start();
include("db_class.php");
include("functions.php");

login();

if ($_SESSION['checkLogin'] == TRUE){
    
}

?>

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

<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">I'm new here <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Find Us</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Who's Who</a></li>
        </ul>
      <li><a href="#">Calendar</a></li>
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Sundays</a></li>
          <li><a href="#">House Groups</a></li>
          <li><a href="#">Youth Club</a></li>
          <li><a href="#">Alpha</a></li>
        </ul>
      <li><a href="#">Links</a></li>
      <li><a href="#">Contact</a></li>	

      </li>
    </ul>
    </div>
   </nav>

<form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
                    <label>Username:</label> <input type="text" name="username"/> <p></p>
                    <label>Password:</label> <input type="text" name="password"/> <p></p>
                    <input type="submit" value="Delete user"/>
                    <label></label>
                </form>

</body>
</html>
