<?php
SESSION_start();
include("db_class.php");
include("page_class.php");

$sql="SELECT * FROM $page";
$result=$db->query("SQL");
?>

<!-- table created to hold page details -->
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="5" bgcolor="#ffffff"><strong>Delete data in mysql</strong></td>
<td>
</tr>

<tr>
<td align="center" bgcolor="#FFFFFF"><strong></>Page ID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong></>Page Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong></>Page Content</strong></td>
<td bgcolor="#FFFFFF">&nbsp;</td>
</tr>

<?php 
while($rows=mysql_fetch_array($result)){
	?>
    
<tr> 
<td bgcolor="#FFFFFF"><? echo $rows['pageID']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['pageName']; ?></td>    
<td bgcolor="#FFFFFF"><? echo $rows['pageContent']; ?></td>
<td bgcolor="#FFFFFF"><a href="deletepage_ac.php"?id=<? echo $rows['pageID']; ?>">Delete</a></td>

<?php
//close while loop
}
?>

</table>

<?php
//close connection
mysql_close();
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="file:///E|/My Documents/Uni/Second Year/comp216/PHP/css.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<title>Delete Page</title>
</head>

<body>

<form action=<?php echo $_SERVER["file:///E|/My Documents/Uni/Second Year/comp216/PHP/PHP_SELF"]; ?> method="post">
                    <label>Page name:</label> <input type="text" name="pagename"/> <p></p>
                    <label>Page content:</label> <input type="text" name="pagecontent"/> <p></p>
                    <input type="submit" value="Delete page"/>
                    <label></label>
                </form>

</body>
</html>