<?php
SESSION_start();
include("db_class.php");
include("page_class.php");

//update data in database
$sql="UPDATE $page SET pagename='$pagename', pagecontent='$pagecontent' WHERE pageID='$pageID'";
$result=mysql_query($sql);

//if successfully updated
if($result){
	echo "Successful";
	echo "<BR>";
	echo "<a href='page.php'>View Pages</a>";
}

else{
	echo "ERROR";
}

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