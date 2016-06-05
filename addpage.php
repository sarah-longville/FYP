<?php
SESSION_start();
include("db_class.php");
include("page_class.php");

if (isset($_POST)){
	$page = new page;
	if ($page->addpage) {
		header ('Location: addpage.php');
	}
	else {
		echo "page was unsuccessfully added. Please try again";
	}
}

if ($_SESSION['checkLogin'] == TRUE){
    
}

?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-wysihtml5-0.0.2/libs/css/bootstrap.min.css">
    <link href="css.css" rel="stylesheet" type="text/css">
    
        <!-- wysihtml5 parser rules -->
    <script src="xing-wysihtml5-fb0cfe4/parser_rules/advanced.js"></script>
    <!-- Library -->
    <script src="xing-wysihtml5-fb0cfe4/dist/wysihtml5-0.3.0.min.js"></script>
    
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    
    <script src="bootstrap-wysihtml5-0.0.2/libs/js/bootstrap.min.js"></script>
    <script src="bootstrap-wysihtml5.js"></script>


</head>

<body>

  	 <form>
  	<label for:"pageName">Page Name:</label> <input type="text" name="pageName"/> <p></p>
    <div id="wysihtml5-toolbar" style="display: none;">
        <li><a data-wysihtml5-command="bold">Bold</a></li>
        <li><a data-wysihtml5-command="italic">Italic</a></li>
        <li><a data-wysihtml5-command="insertUnorderedList">Insert unordered list</a></li>
        <li><a data-wysihtml5-command="insertOrderedList">Insert ordered list</a></li>
        <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="PageTitle">Page title</a></li>		        
        <li><a data-wysihtml5-command-value="MainText">Main text</a></li>
        <li><a data-wysihtml5-command-value="LinkText">Link text</a></li>
        <li><a data-wysihtml5-command="justifyCenter">align center</a></li>
        <li><a data-wysihtml5-command="justifyLeft">align left</a></li>
		<li><a data-wysihtml5-command="justifyRight">align right</a></li>
       <li><a data-wysihtml5-command="underline">underline</a></li>

        <!-- Some wysihtml5 commands like 'createLink' require extra paramaters specified by the user (eg. href) -->
        <li><a data-wysihtml5-command="insertImage">Insert image</a>
        <div data-wysihtml5-dialog="insertImage" style="display: none;">
            <label>
                Image:
                <input data-wysihtml5-dialog-field="src" value="http://">
            </label></li>
            <li><a data-wysihtml5-command="createLink">Insert link</a>
            <div data-wysihtml5-dialog="createLink" style="display: none;">
                <label>
                    Link:
                    <input data-wysihtml5-dialog-field="href" value="http://" class="text">
                </label></li>
            </div>
        </div>

 </ul>
    </div>

          <textarea id="wysihtml5-textarea" placeholder="Enter your text ..." autofocus></textarea>

    <br>
    <input type="reset" value="Reset form!">
    <input type="submit" value="submit">
    </form>

    <script type="text/javascript">

	var editor = new wysihtml5.Editor("wysihtml5-textarea", { // id of textarea element
  	toolbar:      "wysihtml5-toolbar", // id of toolbar element
 	parserRules:  wysihtml5ParserRules // defined in parser rules set 
});

        $(document).ready(function() {
            $('#wysihtml5-textarea').val();

            $('#wysihtml5-textarea').load({
                "events": {
                    "load": function() {
                        console.log("Loaded!");
                    },
                    "blur": function() {
                        console.log("Blured");
                    }
                }
            });

            $('#wysihtml5-textarea').load({
                "font-styles": true,
                "emphasis": true,
                "list": true,
                "html": false,
                "link": true,
                "image": true,
                "color": false
            });

        });
    </script>

</body>

</html>
