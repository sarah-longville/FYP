<?php
SESSION_start();
include("db_class.php");
include("page_class.php");


if ($_SESSION['isloggedin'] == TRUE){
    
}
?>

<!-- create table to hold page details -->
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="400" border="1" cellspacing="0" cellpadding="3">

<tr>
<td align="center"><strong>Page Name</strong></td>
<td align="center"><strong>Page Content</strong></td>
<td align="center"><strong>Edit</strong></td>
<td align="center"><strong>Delete</strong></td>
</tr>

<!-- get page details and display in table -->
<?php
while($rows=mysql_fetch_array($result)){
	?>
    <tr>
    <td><? echo $rows['pagename']; ?></td>
    <td><? echo $rows['pagecontent']; ?></td>

<td align="center"><a href="editpage.php?id=<? echo $rows['id']; ?>">edit</a></td>
<td align="center"><a href="deletepage.php?id=<? echo $rows['id']; ?>">delete</a></td>

<?php 
}
?>

</table>
</td>
</tr>
</table>

<?php 
mysql_close();
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a responsive pricing table.">

    <title>Home</title>
    <script src="http://yui.yahooapis.com/3.15.0/build/yui/yui-min.js"></script>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">

	   <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/main-grid-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/main-grid.css">
    <!--<![endif]-->

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/pricing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/pricing.css">
    <!--<![endif]--><title>Pages</title>
</head>

<body>
</body>
</html>