<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>True NW Ventures Real Estate</title>
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

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

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
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="skagit-house.html">Skagit</a></li>
								</ul>
							</li>
							<li><a href="about.html">Who are We</a></li>
							<li class="active"><a href="sell.php">Sell Your House</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
			
			<!-- Main -->
			<div class="light-gray-bg inner-shadow">
				<div class="container">
					<!-- Featured Listings -->
					<div class="row med-margin" data-animate="fadeInUp">
						<div class="col-xs-12">
							<h1 class="main-header">We Buy <span>Houses!</span> </h1>

							<!-- Show success message after message is sent -->
							<?php 
								if (isset($_SESSION['success'])) 
								{
									echo "<p class='success_message'> {$_SESSION['success']} </p>";
									unset($_SESSION['success']);
								}
							?>

							<p class="lead">Please be as thorough as possible. The more information we have 
											the better we can serve you.</p>
						</div>
						<div class="clearfix"></div>
						<!--  -->
									<!-- Your Contact Info -->
						<!--  -->
						<h4 class="col-sm-offset-5"><strong>Your contact Information</strong></h4>
						<form class="form-horizontal" method="post" role="form" action="process-sell.php">
							<!-- Name -->
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Name:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="name" placeholder="Name" required>
								</div>
							</div>
							<!-- Address -->
							<div class="form-group">
								<label for="address" class="col-sm-2 control-label">Address:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="address" placeholder="Address" required>
								</div>
							</div>
							<!-- City -->
							<div class="form-group">
								<label for="city" class="col-sm-2 control-label">City:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="city" placeholder="City" required>
								</div>
							</div>
							<!-- State -->
							<div class="form-group">
								<label for="state" class="col-sm-2 control-label">State:</label>
								<div class="col-sm-3">
									<select class="form-control" name="state">
									  <option value="AL">AL</option>
									  <option value="AK">AK</option>
									  <option value="AZ">AZ</option>
									  <option value="AR">AR</option>
									  <option value="CA">CA</option>
									  <option value="CO">CO</option>
									  <option value="CT">CT</option>
									  <option value="DE">DE</option>
									  <option value="FL">FL</option>
									  <option value="GA">GA</option>
									  <option value="HI">HI</option>
									  <option value="ID">ID</option>
									  <option value="IL">IL</option>
									  <option value="IN">IN</option>
									  <option value="IA">IA</option>
									  <option value="KS">KS</option>
									  <option value="KY">KY</option>
									  <option value="LA">LA</option>
									  <option value="ME">ME</option>
									  <option value="MD">MD</option>
									  <option value="MA">MA</option>
									  <option value="MI">MI</option>
									  <option value="MN">MN</option>
									  <option value="MS">MS</option>
									  <option value="MO">MO</option>
									  <option value="MT">MT</option>
									  <option value="NE">NE</option>
									  <option value="NV">NV</option>
									  <option value="NH">NH</option>
									  <option value="NJ">NJ</option>
									  <option value="NM">NM</option>
									  <option value="NY">NY</option>
									  <option value="NC">NC</option>
									  <option value="ND">ND</option>
									  <option value="OH">OH</option>
									  <option value="OK">OK</option>
									  <option value="OR">OR</option>
									  <option value="PA">PA</option>
									  <option value="RI">RI</option>
									  <option value="SC">SC</option>
									  <option value="SD">SD</option>
									  <option value="TN">TN</option>
									  <option value="TX">TX</option>
									  <option value="UT">UT</option>
									  <option value="VT">VT</option>
									  <option value="VA">VA</option>
									  <option value="WA">WA</option>
									  <option value="WV">WV</option>
									  <option value="WI">WI</option>
									  <option value="WY">WY</option>
									</select>
								</div>
							</div>
							<!-- Zip Code -->
							<div class="form-group">
								<label for="zip" class="col-sm-2 control-label">Zip Code:</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="zip" placeholder="Zip Code" required>
								</div>
							</div>
							<!-- Daytime phone number -->
							<div class="form-group">
								<label for="daytimephone" class="col-sm-2 control-label">Daytime Phone Number:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="phone1" placeholder="Day Phone" required>
								</div>
							</div>
							<!-- Evening phone number -->
							<div class="form-group">
								<label for="eveningphone" class="col-sm-2 control-label">Evening Phone Number:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="phone2" placeholder="Evening Phone" required>
								</div>
							</div>
							<!-- Email address -->
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email:</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" name="email" placeholder="Email" required>
								</div>
							</div>
							<!-- What is the best way for us to contact you? -->
							<div class="form-group">
								<label for="bestcontact" class="col-sm-3 control-label">What is the best way to contact you:</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="bestcontact" placeholder="" required>
								</div>
							</div>
							<!--  -->
										<!-- Your property Info -->
							<!--  -->
							<h4 class="col-sm-offset-5"><strong>Your Property Information</strong></h4>
							<!-- Same as address above -->
							<div class="form-group">
								<label for="propAddressRadio" class="col-sm-2 control-label">Same as my address above?</label>
									<label class="radio-inline">
  										<input type="radio" name="radioOptionsAddress" value="Yes" required> Yes
									</label>
									<label class="radio-inline">
									 	<input type="radio" name="radioOptionsAddress" value="No" require> No
									</label>
							</div>
							<!-- Address -->
							<div class="form-group">
								<label for="propAddress" class="col-sm-2 control-label">Address:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="propAddress" placeholder="Address" required>
								</div>
							</div>
							<!-- City -->
							<div class="form-group">
								<label for="propCity" class="col-sm-2 control-label">City:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="propCity" placeholder="City" required>
								</div>
							</div>
							<!-- Number of Bedrooms -->
							<div class="form-group">
								<label for="bedrooms" class="col-sm-2 control-label">Number of Bedrooms:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="propBedrooms" placeholder="" required>
								</div>
							</div>					
							<!-- Number of Bathrooms -->
							<div class="form-group">
								<label for="bathrooms" class="col-sm-2 control-label">Number of Bathrooms:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="propBathrooms" placeholder="" required>
								</div>
							</div>							
							<!-- Square Footage -->
							<div class="form-group">
								<label for="squarefootage" class="col-sm-2 control-label">Square Footage:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="propSquare" placeholder="" required>
								</div>
							</div>
							<!-- Garage? -->
							<div class="form-group">
								<label for="garage" class="col-sm-2 control-label">Is there a garage?</label>
									<label class="radio-inline">
  										<input type="radio" name="radioOptionsGarage" value="Yes" required> Yes
									</label>
									<label class="radio-inline">
									  <input type="radio" name="radioOptionsGarage" value="No" required> No
									</label>
							</div>							
							<!-- Rental or Residential -->
							<div class="form-group">
								<label for="rentres" class="col-sm-2 control-label">Is this house a rental or your personal residence?</label>
									<label class="radio-inline">
  										<input type="radio" name="radioOptionsRentRes" value="Rental" required> Rental
									</label>
									<label class="radio-inline">
									  <input type="radio" name="radioOptionsRentRes" value="Residence" required> Residence
									</label>
							</div>							
							<!-- If rental is property currently rented -->
							<div class="form-group">
								<label for="currentrent" class="col-sm-2 control-label">If a rental, is your property currently rented?</label>
									<label class="radio-inline">
  										<input type="radio" name="radioOptionsCurrentRent" value="Yes" required> Yes
									</label>
									<label class="radio-inline">
									  <input type="radio" name="radioOptionsCurrentRent" value="No" required> No
									</label>									
									<label class="radio-inline">
									  <input type="radio" name="radioOptionsCurrentRent" value="N/A" required> N/A
									</label>
							</div>
							<!-- How much is the current rent -->
							<div class="form-group">
								<label for="currentrentvalue" class="col-sm-2 control-label">How much is the current rent?</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="propRentValue" placeholder="" required>
								</div>
							</div>
							<!-- Is your property vacant -->
							<div class="form-group">
								<label for="propvaca" class="col-sm-2 control-label">Is your property vacant?</label>
									<label class="radio-inline">
  										<input type="radio" name="radioOptionsVacant" value="Yes" required> Yes
									</label>
									<label class="radio-inline">
										<input type="radio" name="radioOptionsVacant" value="No" required> No
									</label>
							</div>
							<!-- Repairs -->
							<div class="form-group">
								<label for="repairs" class="col-sm-2 control-label">What kinds of repairs or maintenance does the house need?</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="propRepairs"></textarea>
									<!-- <input type="text" class="form-control" name="propRepairs" placeholder="" required> -->
								</div>
							</div>							
							<!-- Why are you selling? -->
							<div class="form-group">
								<label for="selling" class="col-sm-2 control-label">Why are you considering selling your house?</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="propSell" placeholder="" required>
								</div>
							</div>							
							<!-- When would you like to sell? -->
							<div class="form-group">
								<label for="sellwhen" class="col-sm-2 control-label">When would you like to sell your house?</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="propSellWhen" placeholder="" required>
								</div>
							</div>
							<!--  -->
										<!-- Mortgage and Terms -->
							<!--  -->
							<h4 class="col-sm-offset-5"><strong>Mortgage and Terms</strong></h4>
							<!-- How much are your monthly mortgage payments -->
							<div class="form-group">
								<label for="howmuch" class="col-sm-2 control-label">How much are your monthly mortgage payments?</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="monthlyMort" placeholder="" required>
								</div>
							</div>							
							<!-- How much is your 1st mortgage balance -->
							<div class="form-group">
								<label for="firstmort" class="col-sm-2 control-label">How much is your first mortgage balance?</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="firstMort" placeholder="" required>
								</div>
							</div>							
							<!-- How much is your 2st mortgage balance -->
							<div class="form-group">
								<label for="secondmort" class="col-sm-2 control-label">How much is your second mortgage balance?</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="secondMort" placeholder="" required>
								</div>
							</div>							
							<!-- How much are your annual prop tax -->
							<div class="form-group">
								<label for="proptax" class="col-sm-2 control-label">How much are your annual property taxes?</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="propTax" placeholder="" required>
								</div>
							</div>							
							<!-- How much are your annual insurance premium -->
							<div class="form-group">
								<label for="inspre" class="col-sm-2 control-label">How much is your annual insurance premium?</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="insPre" placeholder="" required>
								</div>
							</div>							
							<!-- Taxes and insurance included in mortgage -->
							<div class="form-group">
								<label for="taxins" class="col-sm-2 control-label">Are your property taxes and insurance included in your mortgage payment?</label>
									<label class="radio-inline">
  										<input type="radio" name="radioOptionsTaxIns" value="Yes" required> Yes
									</label>
									<label class="radio-inline">
									  <input type="radio" name="radioOptionsTaxIns" value="No" required> No
									</label>
							</div>
							<!-- Feel house is worth -->
							<div class="form-group">
								<label for="houseworth" class="col-sm-2 control-label">How much do you feel your house is your worth?</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="houseWorth" placeholder="" required>
								</div>
							</div>
							<!-- Sell for what it is owed -->
							<div class="form-group">
								<label for="owed" class="col-sm-2 control-label">Would you sell your house for what is owed?</label>
									<label class="radio-inline">
  										<input type="radio" name="radioOptionsOwed" value="Yes" required> Yes
									</label>
									<label class="radio-inline">
									  <input type="radio" name="radioOptionsOwed" value="No" required> No
									</label>									
									<label class="radio-inline">
									  <input type="radio" name="radioOptionsOwed" value="Undecided" required> Undecided
									</label>
							</div>
							<!-- Let us take mortgage payment -->
							<div class="form-group">
								<label for="takemort" class="col-sm-2 control-label">Would you be willing to let us take over the mortgage payments?</label>
									<label class="radio-inline">
  										<input type="radio" name="radioOptionsTakeMort" value="Yes" required> Yes
									</label>
									<label class="radio-inline">
									  <input type="radio" name="radioOptionsTakeMort" value="No" required> No
									</label>									
									<label class="radio-inline">
									  <input type="radio" name="radioOptionsTakeMort" value="Undecided" required> Undecided
									</label>
							</div>
							<!-- Least accept -->
							<div class="form-group">
								<label for="leastaccept" class="col-sm-2 control-label">If we can buy your house in 7 days or less, what is the least you will accept?</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="leastAcc" placeholder="" required>
								</div>
							</div>							
							<!-- Hear about us LAST OPTION BEFORE SUBMIT -->
							<div class="form-group">
								<label for="hear" class="col-sm-2 control-label">How did you hear about us?</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="hearAbout" placeholder="" required>
								</div>
							</div>
							<!-- Submit -->
							<div class="form-group">
								<div class="col-sm-offset-5 col-sm-10">
									<button type="submit" name="submit" class="btn btn-unique">Submit</button>
									<!-- Reset with JavaScript?!?!?! -->
									<button type="submit" class="btn btn-unique">Reset</button>
								</div>
							</div>
						</form>
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

        <script src="js/responsiveCarousel.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jet-estate.js"></script>

        <script>
			/*
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
			*/
			
			$(document).ready(function() {
				// Set the carousel options
				$('#quote-carousel').carousel({
					pause: true,
					interval: 4000,
				});
				
				// Run Responsive carousels
				$('.crsl-items').responsiveCarousel({visible: 3, itemMinWidth:250, itemMargin:15});
				// Removed autoRotate: 6000, speed: 500
			});
        </script>
		
		<!-- Put this in the last -->
		<script src="js/jquery.inview.js"></script>
	</body>
</html>
<?php session_destroy(); ?>