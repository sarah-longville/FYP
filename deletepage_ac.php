<?php
SESSION_start();
include("db_class.php");
include("page_class.php");

//Delete data in mysql from row that has this id
$sql="DELETE FROM $page WHERE pageID='$pageID'";
$result=mysql_query($sql);

//if successfully deleted
if($result){
	echo "Deleted successfully";
	echo "<BR>";
	echo "<a href='page.php'>View pages</a>";
}

//unsuccessful
else {
	echo "ERROR";
}
?>

<?php
//close connection
mysql_close();
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
</body>
</html>