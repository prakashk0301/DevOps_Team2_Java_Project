<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "pansylyit@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
<!-- ################################################################################ --><!-- ################################################################################ -->
<!-- ################################################################################ --><!-- ################################################################################ -->
<!-- ################################################################################ --><!-- ################################################################################ -->
<!doctype html>

<html><!-- InstanceBegin template="/Templates/MainTemp.dwt" codeOutsideHTMLIsLocked="false" -->

	<head>
		<!-- ################################################################################ -->
			<title>Pansies</title>

						<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic,300italic' rel='stylesheet' type='text/css'>
						<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

						<script src="js/jquery.js" type="text/javascript"></script>
						<script type="text/javascript" src="js/slider.js"></script>
						<script type="text/javascript" src="js/menu.js"></script>
						<script type="text/javascript" src="js/imagegallery.js"></script>
						<script type="text/javascript" src="js/slide_speed.js"></script>
    
						<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
						<link href="css/slider.css" rel="stylesheet" type="text/css" media="screen">
						
						<link href="css/imagegallery.css" rel="stylesheet" type="text/css" media="screen">
	</head>
		
	<!-- ################################################################################ -->
	<!-- ################################################################################ -->
	<!-- ################################################################################ -->
    <body>
		<div id="wrapper">
				<!-- ################################################################################ -->
					<div id="top">
						<div id="logo">
								<img src="images/logo.jpg">
						</div><!--Close logo div-->

						<div id="login">
										<div id="loginlink"> <a href="login.html"><span>Login</span></a> </div>
										<div id ="reglink"> <a href="http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/register.php"><span>Register</span></a></div>
						</div><!--Close login div-->
						
						<div id="phone_addr">
							<ul>
								 (074) - 9123456 <br>
								 Main St. Letterkenny, <br>Co.Donegal, Ireland 
							</ul>
						</div><!--Close phone_addr div-->
						
				</div><!--Close top div-->
				<!-- ################################################################################ -->
				<div id="topnav">
						<ul>
								<li class="active"><a href='index.html'><span>Home</span></a></li>
								<li class="has-sub"><a href='products.html'><span>Products</span></a></li>
								<li class="active"><a href='contact.html'><span>Contact Us</span></a></li>
								<li class="has-sub"><a href='about.html'><span>About Us</span></a></li>
						</ul>
				</div>
				<!-- ################################################################################ -->
            
				<div id="content-wrapper">
					<div id="content"> 
				
						<h1> Please don't hesitate to contact us if you have any queries. </h1>
						
								<div id="contact">
									
										<form name="contact_form" action="" method="post">
													<p>Name</p> <input type="text" name="name">
													<p>Email</p> <input type="text" name="email">
													<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
													<input type="submit" value="Send"><input type="reset" value="Clear">
										</form>
								</div>
											
						
						
					</div> <!-- end content div -->
				</div><!-- end content-wrapper div -->
            <!-- ################################################################################ -->
			
       <div id="footer">
									<p>&copy;Copyright 2017 &bull; All Rights Reserved &bull; Dev Ops Team 2 Project(Pansies) @ LYITLabs  &bull; LYIT Letterkenny Co.Donegal</p>
									<div id="social-media">
								<ul>
										<li><a href="http://www.facebook.com"><img src="images/icons/facebook.png"></a></li>
										<li><a href="http://www.twitter.com"><img src="images/icons/twitter.png"></a></li>
										<li><a href="http://www.instagram.com"><img src="images/icons/Instagram-Icon.png"></a></li>
										<li><a href="http://www.youtube.com"><img src="images/icons/youtube.png"></a></li>
								</ul>
						</div><!--Close social-media div-->
									
						</div><!--Close
		<!-- ################################################################################ -->
		</div>
        </div>	
    </body>

</html>