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
						<img src="images/icon_text.png" width="200px" height="100px" alt="True NW Ventures" />
					</div>
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.html">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="skagit-house.html">Skagit</a></li>
									<li><a href="illinois-st-house.html">Illinois St.</a></li>									
								</ul>
							</li>
							<li><a href="about.html">Who are We</a></li>
							<li><a href="testimonials.html">Testimonials</a></li>
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

							<p class="lead text-center">Please be as thorough as possible. The more information we have the better we can serve you.</p>
						</div>
						<div class="clearfix"></div>
						<!--  -->
									<!-- Your Contact Info -->
						<!--  -->
						<h4 class="col-sm-12 text-center"><strong>Your contact Information</strong></h4>
						<form method="post" role="form" id="myForm" action="process-sell.php">
							<!-- Name -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="name" class="col-sm-2 control-label">Name:</label>
									<input type="text" class="form-control" name="name" placeholder="" required>
								</div>	
							</div>
							<!-- Address -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="address" class="col-sm-2 control-label">Address:</label>
									<input type="text" class="form-control" name="address" placeholder="" required>
								</div>	
							</div>
							<!-- City -->
							<div class="col-sm-offset-1 col-sm-3">
								<div class="form-group">
									<label for="city" class="col-sm-2 control-label">City:</label>
									<input type="text" class="form-control" name="city" placeholder="" required>
								</div>	
							</div>
							<!-- State -->
							<div class="col-sm-3">
								<div class="form-group">
									<label for="state" class="col-sm-2 control-label">State:</label>
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
							<div class="col-sm-4">
								<div class="form-group" id="formZip">
									<label for="zip" class="col-sm-12 control-label">Zip Code:</label>
									<input type="text" class="form-control" name="zip" placeholder="" required>
								</div>
							</div>
							<!-- Daytime phone number -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="daytimephone" class="col-sm-12 control-label">Daytime Phone Number:</label>
									<input type="text" class="form-control" name="phone1" placeholder="" required>
								</div>
							</div>
							<!-- Evening phone number -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="eveningphone" class="col-sm-12 control-label">Evening Phone Number:</label>
									<input type="text" class="form-control" name="phone2" placeholder="" required>
								</div>
							</div>
							<!-- Email address -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="email" class="col-sm-2 control-label">Email:</label>
									<input type="email" class="form-control" name="email" placeholder="" required>
								</div>
							</div>
							<!-- What is the best way for us to contact you? -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="bestcontact" class="col-sm-5 control-label">What is the best way to contact you:</label>
									<input type="text" class="form-control" name="bestcontact" placeholder="" required>
								</div>
							</div>
							<!--  -->
										<!-- Your property Info -->
							<!--  -->
							<h4 class="col-sm-12 text-center"><strong>Your Property Information</strong></h4>
							<!-- Same as address above -->
							<div class="col-sm-offset-1 col-sm-10">
								<label for="propAddressRadio" class="col-sm-12 control-label">Same as my address above?</label>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="radio-inline">
	  										<input type="radio" name="radioOptionsAddress" value="Yes" required> Yes
										</label>
										<label class="radio-inline">
										 	<input type="radio" name="radioOptionsAddress" value="No" require> No
										</label>
									</div>	
								</div>
							</div>
							<!-- Address -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="propAddress" class="col-sm-2 control-label">Address:</label>
									<input type="text" class="form-control" name="propAddress" placeholder="" required>
								</div>
							</div>
							<!-- City -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="propCity" class="col-sm-2 control-label">City:</label>
									<input type="text" class="form-control" name="propCity" placeholder="" required>
								</div>
							</div>
							<!-- Number of Bedrooms -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="bedrooms" class="col-sm-4 control-label">Number of Bedrooms:</label>
									<input type="text" class="form-control" name="propBedrooms" placeholder="" required>
								</div>
							</div>					
							<!-- Number of Bathrooms -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="bathrooms" class="col-sm-4 control-label">Number of Bathrooms:</label>
									<input type="text" class="form-control" name="propBathrooms" placeholder="" required>
								</div>
							</div>							
							<!-- Square Footage -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="squarefootage" class="col-sm-12 control-label">Square Footage:</label>
									<input type="text" class="form-control" name="propSquare" placeholder="" required>
								</div>
							</div>
							<!-- Garage? -->
							<div class="col-sm-offset-1 col-sm-10">
								<label for="garage" class="col-sm-12 control-label">Is there a garage?</label>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="radio-inline">
	  										<input type="radio" name="radioOptionsGarage" value="Yes" required> Yes
										</label>
										<label class="radio-inline">
										  <input type="radio" name="radioOptionsGarage" value="No" required> No
										</label>
									</div>
								</div>	
							</div>							
							<!-- Rental or Residential -->
							<div class="col-sm-offset-1 col-sm-10">
								<label for="rentres" class="col-sm-12 control-label">Is this house a rental or your personal residence?</label>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="radio-inline">
	  										<input type="radio" name="radioOptionsRentRes" value="Rental" required> Rental
										</label>
										<label class="radio-inline">
										  <input type="radio" name="radioOptionsRentRes" value="Residence" required> Residence
										</label>
									</div>
								</div>	
							</div>							
							<!-- If rental is property currently rented -->
							<div class="col-sm-offset-1 col-sm-10">
								<label for="currentrent" class="col-sm-12 control-label">If a rental, is your property currently rented?</label>
								<div class="col-sm-12">
									<div class="form-group">
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
								</div>	
							</div>
							<!-- How much is the current rent -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="currentrentvalue" class="col-sm-12 control-label">How much is the current rent?</label>
									<input type="text" class="form-control" name="propRentValue" placeholder="" required>
								</div>
							</div>
							<!-- Is your property vacant -->
							<div class="col-sm-offset-1 col-sm-10">
								<label for="propvaca" class="col-sm-12 control-label">Is your property vacant?</label>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="radio-inline">
	  										<input type="radio" name="radioOptionsVacant" value="Yes" required> Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="radioOptionsVacant" value="No" required> No
										</label>
									</div>
								</div>	
							</div>
							<!-- Repairs -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="repairs" class="col-sm-12 control-label">What kinds of repairs or maintenance does the house need?</label>
									<textarea class="form-control" name="propRepairs"></textarea>
								</div>
							</div>							
							<!-- Why are you selling? -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="selling" class="col-sm-12 control-label">Why are you considering selling your house?</label>
									<textarea class="form-control" name="propSell" placeholder="" required></textarea>
								</div>
							</div>							
							<!-- When would you like to sell? -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="sellwhen" class="col-sm-12 control-label">When would you like to sell your house?</label>
									<textarea class="form-control" name="propSellWhen" placeholder="" required></textarea>
								</div>
							</div>
							<!--  -->
										<!-- Mortgage and Terms -->
							<!--  -->
							<h4 class="col-sm-12 text-center"><strong>Mortgage and Terms</strong></h4>
							<!-- How much are your monthly mortgage payments -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="howmuch" class="col-sm-12 control-label">How much are your monthly mortgage payments?</label>
									<input type="text" class="form-control" name="monthlyMort" placeholder="" required>
								</div>
							</div>							
							<!-- How much is your 1st mortgage balance -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="firstmort" class="col-sm-12 control-label">How much is your first mortgage balance?</label>
									<input type="text" class="form-control" name="firstMort" placeholder="" required>
								</div>
							</div>							
							<!-- How much is your 2st mortgage balance -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="secondmort" class="col-sm-12 control-label">How much is your second mortgage balance?</label>
									<input type="text" class="form-control" name="secondMort" placeholder="" required>
								</div>
							</div>							
							<!-- How much are your annual prop tax -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="proptax" class="col-sm-12 control-label">How much are your annual property taxes?</label>
									<input type="text" class="form-control" name="propTax" placeholder="" required>
								</div>
							</div>							
							<!-- How much are your annual insurance premium -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="inspre" class="col-sm-12 control-label">How much is your annual insurance premium?</label>
									<input type="text" class="form-control" name="insPre" placeholder="" required>
								</div>
							</div>							
							<!-- Taxes and insurance included in mortgage -->
							<div class="col-sm-offset-1 col-sm-10">
								<label for="taxins" class="col-sm-12 control-label">Are your property taxes and insurance included in your mortgage payment?</label>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="radio-inline">
	  										<input type="radio" name="radioOptionsTaxIns" value="Yes" required> Yes
										</label>
										<label class="radio-inline">
										  <input type="radio" name="radioOptionsTaxIns" value="No" required> No
										</label>
									</div>
								</div>	
							</div>
							<!-- Feel house is worth -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="houseworth" class="col-sm-12 control-label">How much do you feel your house is your worth?</label>
									<input type="text" class="form-control" name="houseWorth" placeholder="" required>
								</div>
							</div>
							<!-- Sell for what it is owed -->
							<div class="col-sm-offset-1 col-sm-10">
								<label for="owed" class="col-sm-12 control-label">Would you sell your house for what is owed?</label>
								<div class="col-sm-12">
									<div class="form-group">
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
								</div>	
							</div>
							<!-- Let us take mortgage payment -->
							<div class="col-sm-offset-1 col-sm-10">
								<label for="takemort" class="col-sm-12 control-label">Would you be willing to let us take over the mortgage payments?</label>
								<div class="col-sm-12">
									<div class="form-group">
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
								</div>	
							</div>
							<!-- Least accept -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="leastaccept" class="col-sm-12 control-label">If we can buy your house in 7 days or less, what is the least you will accept?</label>
									<input type="text" class="form-control" name="leastAcc" placeholder="" required>
								</div>
							</div>							
							<!-- Hear about us LAST OPTION BEFORE SUBMIT -->
							<div class="col-sm-offset-1 col-sm-10">
								<div class="form-group">
									<label for="hear" class="col-sm-6 control-label">How did you hear about us?</label>
									<textarea class="form-control" name="hearAbout" placeholder="" required></textarea>
								</div>
							</div>
							<!-- Submit -->
							
							<div class="col-sm-12">
								<div class="form-group text-center">
									<button type="submit" name="submit" class="btn btn-unique">Submit</button>
									<!-- Reset with JavaScript?!?!?! -->
									<button type="submit" class="btn btn-unique" onclick="resetForm()">Reset</button>
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
							<h4 class="col-sm-3 col-lg-3 text-center" id="footer-heading">Keep in <strong>Touch</strong></h4>
							<a href="mailto:Diskin@TrueNWVentures.com" target="_top">
								<p class="col-sm-3 col-lg-4 text-center">Email: Diskin@TrueNWVentures.com</p>
							</a>
							<p class="col-sm-3 col-lg-3 text-center">Phone: (360) 524-2515</p>

							<p class="col-sm-3 col-lg-2 text-center"><!-- social -->
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
        <script src="js/truenw-ventures.js"></script>

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

			// Reset Form
			function resetForm() {
    			document.getElementById("myForm").reset();
			}
        </script>
		
		<!-- Put this in the last -->
		<script src="js/jquery.inview.js"></script>
	</body>
</html>
<?php session_destroy(); ?>