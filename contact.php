<?php 
session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Contact</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width" />

        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type='text/css'>
		<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:300,400|Open+Sans:200,300,500' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css" type='text/css'>
        <link rel="stylesheet" href="css/truenw-ventures.css" type='text/css' data-s="main">
        <link rel="stylesheet" href="css/animate.css" type='text/css' data-s="main">
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
		<div class="page-wrapper boxed">
			<!-- Navigation -->
			<nav class="navbar-nw navbar-static-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="" href="#"><img src="images/True_NW_Ventures_Icon_Text.png" height="100px" width="200px" alt="Jet Estate" /></a>
					</div>
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.html">Home</a></li>
							<li><a href="properties-detail.html">Property</a></li>
							<li><a href="about.html">Who are We</a></li>
							<li><a href="sell.php">Sell Your House</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
			
			<!-- Google Map -->
			<!-- Maybe add this later?!?! -->
<!-- 		<div id="map_canvas" class="map-lrg-height"></div> -->
			
			<!-- Main -->
			<div class="light-gray-bg inner-shadow">
				<div class="container">
					<!-- Contact -->
					<div class="row med-margin" data-animate="fadeInDown">
						<div class="col-xs-12">
							<h1 class="main-header">Contact Us</h1>

							<!-- Show success message after email sends -->
							<?php 
								if (isset($_SESSION['success'])) 
								{
									echo "<p class='success_message'> {$_SESSION['success']} </p>";
									unset($_SESSION['success']);
								}
							?>


							<p>If you would like to talk to us about a property or you have a question, please get in touch. Fill in our contact form below and we’ll get right back to you.</p>
							<p>Whether you’re looking to buy or sell or just need more information about True NW Ventures, we’d love to hear from you.</p>
							<p>Give us a call, drop us an email.</p>
						</div>
						<div class="col-sm-7">
							<h3>Contact Form</h3>
							<hr style="border-bottom: 1px solid #bbb;"/>
							<form id="contact-form" method="post" class="form" role="form" action="process-contact.php">
								<div class="row">
									<div class="col-xs-6 col-md-6 form-group">
										<label for="name">Name</label>
										<input class="form-control" id="name" name="name" placeholder="John Doe" type="text" required autofocus />
									</div>
									<div class="col-xs-6 col-md-6 form-group">
										<label for="email">Email Address</label>
										<input class="form-control" id="email" name="email" placeholder="johndoe@yoursite.com" type="email" required />
									</div>									
									<div class="col-xs-12 form-group">
										<label for="subject">Subject</label>
										<input class="form-control" id="email" name="subject" placeholder="Subject" type="text" required />
									</div>
								</div>
								<label for="message">Message</label>
									<textarea class="form-control" id="message" name="message" placeholder="Message" rows="5" required></textarea>
								<br />
								<div class="row">
									<div class="col-xs-12 col-md-12 form-group">
										<button class="btn btn-unique btn-lg btn-block" name="submit" type="submit">Send</button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-sm-5">
							<h3>Or Reach Us Here</h3>
							<hr style="border-bottom: 1px solid #bbb;"/>
							<p>
								<span class="c-label"><i class="fa fa-phone"></i> Phone:</span>
								<span class="c-text">(360) 524-2515</span>
							</p>
							<p>
								<span class="c-label"><i class="fa fa-envelope"></i> Email:</span>
								<span class="c-text">Diskin@TrueNWVentures.com</span>
							</p>
						</div>
					</div>
				</div>
			</div>
			
			<footer id="footer">
				<div class="container">

					<div class="row">
						<!-- col #1 -->
							<h4 class="col-lg-3 col-sm-3" id="footer-heading">Keep in <strong>Touch</strong></h4>
							<a href="mailto:Diskin@TrueNWVentures.com" target="_top">
								<p class="col-lg-4 col-sm-3">Email: Diskin@TrueNWVentures.com</p>
							</a>
							<p class="col-lg-3 col-sm-3">Phone: (360) 524-2515</p>

							<p class="col-lg-2 col-sm-3"><!-- social -->
								<a class="social social-fb" href="https://www.facebook.com/Truenwventures" target="_blank"><i class="fa fa-facebook"></i></a>
								<a class="social social-linkedin" href="https://www.linkedin.com/pub/diskin-young/36/1a9/a5b" target="_blank"><i class="fa fa-linkedin"></i></a>
							</p><!-- /social -->
						<!-- /col #1 -->
					</div>
				</div>

				<hr>

				<div class="copyright">
					<div class="container text-center">
						Created By <a href="http://www.kylehalterman.com" target="_blank" id="footerLink">Kyle Halterman</a><br>
						<!-- Change date with php tag -->
						&copy; 2015 • All Rights Reserved
					</div>
				</div>
			</footer>
		</div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jet-estate.js"></script>
		
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		
        <script>
			/*
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
			*/
        </script>
		
		<!-- Put this in the last -->
		<script src="js/jquery.inview.js"></script>
	</body>
</html>
<?php session_destroy(); ?>