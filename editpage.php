<?php
SESSION_start();
include("db_class.php");
include("page_class.php");

$pageID=$_GET['pageID'];

//Retrieve data from database
$sql="SELECT * FROM $page WHERE pageID='$pageID'";
$result=$db->query("SQL");
$rows=mysql_fetch_array($result);

?>

<!-- displays page details in a table -->
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form name="form" method="post" action="editpage_ac.php">
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="3"><strong>Update page details</strong></td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center"><strong>Page Name</strong></td>
<td align="center"><strong>Page Content</strong></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">
<input name="Page Name" type="text" value="<? echo $rows['pagename']; ?>">
</td>
<td align="center">
<input name="Page Content" type="text" value="<? echo $rows['pagecontent'];?>"size="15">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input name="Page ID" type="hidden" value=<? echo $rows['id'];?>">
</td>
<td align="center">
<input type="submit" name="Submit" value="Submit">
</td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
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

<title>Edit Page</title>
</head>

<body>

<form action=<?php echo $_SERVER["file:///E|/My Documents/Uni/Second Year/comp216/PHP/PHP_SELF"]; ?> method="post">
                    <label>Page name:</label> <input type="text" name="pagename"/> <p></p>
                    <label>Page content:</label> <input type="text" name="pagecontent"/> <p></p>
                    <input type="submit" value="Edit page"/>
                    <label></label>
                </form>

</body>
</html>