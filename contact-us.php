<?php
  // the user has submitted the form
  // Check if the "name" input field is filled out
  if (isset($_POST["submit"]))
    {
    $name = $_POST["name"]; // sender
    $email = $_POST["email"];
	$subject = $_POST["subject"];
    $message = $_POST["message"];
    // send mail
	$headers = "From: ".$name." <".$email.">\r\n";
    mail("sazlongvillage@hotmail.co.uk",$subject, $message, $headers);
    echo "Thank you for your message, we'll get back to you as soon as possible.";
    }
  ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive pricing table.">

    <title>Contact us</title>
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
    <!--<![endif]-->

    <link rel="stylesheet" href="css/layouts/side-menu.css">

</head>

<body>

		<!-- drop down menu -->	
        <div id="demo-horizontal-menu">
            <a href="index.html" class="pure-menu-heading">The Church</a>
            <!-- drop down items --> <ul id="std-menu-items">
                <li>
                    <a href="new-here.html">I'm new here</a>
                    <ul>
                        <li>
                            <a href="find-us.html">Find Us</a>
                        </li>
                        <li>
                            <a href="whos-who.html">Who's Who</a>
                        </li>
                    </ul>
                </li>

                <ul id="std-menu-items">
                    <li>
                        <a href="events.html">Events</a>
                        <ul>
                            <li>
                                <a href="alpha.html">Alpha</a>
                            </li>
                            <li>
                                <a href="house-groups.html">House Groups</a>
                            </li>
                            <li>
                                <a href="sundays.html">Sundays</a>
                            </li>
                        </ul>
                        <li>
                        	<a href="talks.html">Talks</a>
                        </li>

                        <li>
                            <a href="links.html">Links</a>
                        </li>
                        <li>
                            <a href="contact-us.php">Contact Us</a>
                        </li>

        </div>

		<!-- javascript for drop down menu -->
        <script>
            YUI({
                classNamePrefix: 'pure'
            }).use('gallery-sm-menu', function(Y) {

                var horizontalMenu = new Y.Menu({
                    container: '#demo-horizontal-menu',
                    sourceNode: '#std-menu-items',
                    orientation: 'horizontal',
                    hideOnOutsideClick: false,
                    hideOnClick: false
                });

                horizontalMenu.render();
                horizontalMenu.show();

            });
        </script>

        <div class="banner">
            <h1 class="banner-head">
       	Welcome to The Church
    </h1>
        </div>
        
        <div class="l-content">
            <div id="main">
                <div class="header">
                    <h1>Contact us</h1>
                </div>

                <div class="content">

                        <!-- form styled through pure css--><form class="pure-form pure-form-stacked" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
                            <fieldset>
                                <legend>If you have any questions about The Church just ask.</legend>

                                <label for="name">Name</label>
                                <input id="name" type="text" placeholder="Name" name="name">

                                <label for="email">Email</label>
                                <input id="email" type="text" placeholder="Email" name="email">

                                <label for="subject">Subject</label>
                                <input id="subject" type="text" placeholder="Subject" name="subject">

                                <label for="message">Message</label>
                                <textarea rows="10" cols="75" id="message" placeholder="Message" name="message"></textarea>

                                <button type="submit" id ="submit" name="submit" class="pure-button pure-button-primary">Submit</button>
                            </fieldset>
                        </form>
                    
                    <p>
                    <!-- twitter widget -->
                        <a class="twitter-timeline" href="https://twitter.com/sarah_longville" data-widget-id="453847657782333441">Tweets by @sarah_longville</a>
                        <script>
                            ! function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0],
                                    p = /^http:/.test(d.location) ? 'http' : 'https';
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = p + "://platform.twitter.com/widgets.js";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, "script", "twitter-wjs");
                        </script>


                    </p>

                </div>
                
                </div>

                <div class="footer l-box">
                    <p>
                        Header image courtesy of
                        <a href='http://unsplash.com/'>Unsplash</a>.
                    </p>
                </div>
            </div>

    </body>

</html>
