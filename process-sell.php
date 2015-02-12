<?php 

session_start();

if (isset($_POST['submit'])) 
{

	//Send to
	// Diskin@TrueNWVentures.com
	$to="halterman.kyle@gmail.com";

	//Mailing Info

	$name = $_POST['name'];
	$from = $_POST['email'];
	$subject = 'Contact, property, and mortgage information from potential client';

	//Contact Info
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	$daytimePhone=$_POST['phone1'];
	$eveningPhone=$_POST['phone2'];
	$bestContact=$_POST['bestcontact'];

	//Property Info
	$propAddressRadio=$_POST['radioOptionsAddress'];
	$propAddress=$_POST['propAddress'];
	$propCity=$_POST['propCity'];
	$propBedrooms=$_POST['propBedrooms'];
	$propBathrooms=$_POST['propBathrooms'];
	$propSquareFootage=$_POST['propSquare'];
	$propGarage=$_POST['radioOptionsGarage'];
	$propRentRes=$_POST['radioOptionsRentRes'];
	$propCurrentRent=$_POST['radioOptionsCurrentRent'];
	$propRentValue=$_POST['propRentValue'];
	$propVacant=$_POST['radioOptionsVacant'];
	$propRepairs=$_POST['propRepairs'];
	$propSell=$_POST['propSell'];
	$propSellWhen=$_POST['propSellWhen'];

	//Mortgage and Terms
	$monthlyMort=$_POST['monthlyMort'];
	$firstMort=$_POST['firstMort'];
	$secondMort=$_POST['secondMort'];
	$propTax=$_POST['propTax'];
	$insPre=$_POST['insPre'];
	$taxIns=$_POST['radioOptionsTaxIns'];
	$houseWorth=$_POST['houseWorth'];
	$houseOwed=$_POST['radioOptionsOwed'];
	$takeMort=$_POST['radioOptionsTakeMort'];
	$leastAccept=$_POST['leastAcc'];
	$hearAbout=$_POST['hearAbout'];

	//Create message and headers after all variables have been posted
	//Add word wrap?!?!?

	$message = //Contact Info
			   'CONTACT INFORMATION' . "\r\n" .
			   "\r\n" .'Name: ' . $name . "\r\n".
			   'Address: ' . $address . "\r\n".
			   'City: ' . $city . "\r\n".
			   'State: ' . $state . "\r\n".
			   'Zip Code: ' . $zip . "\r\n".
			   'Daytime Phone Number: ' . $daytimePhone . "\r\n".
			   'Evening Phone Number: ' . $eveningPhone . "\r\n".
			   'Email: ' . $from . "\r\n".
			   'What is the best way to contact you: ' . $bestContact . "\r\n".
			   // Prop Info
			   "\r\n" . 'PROPERTY INFORMATION' . "\r\n" .
			   "\r\n" . 'Is the address you have given the same as above: ' . $propAddressRadio . "\r\n".
			   'Address: ' . $propAddress . "\r\n" .
			   'City: ' . $propCity . "\r\n" .
			   "Number of Bedrooms: " . $propBedrooms . "\r\n" .
			   "Number of Bathrooms: " . $propBathrooms . "\r\n" .
			   "Square Footage: " . $propSquareFootage . "\r\n" .
			   "Is there a garage: " . $propGarage . "\r\n" .
			   "Is this house a rental or a residence: " . $propRentRes . "\r\n" .
			   "If a rental, is your property currently rented: " . $propCurrentRent . "\r\n" .
			   "How much is the current rent: " . $propRentValue . "\r\n" .
			   "Is your property vacant: " . $propVacant . "\r\n" .
			   "What kinds of repairs or maintenance does the house need: " . $propRepairs . "\r\n" .
			   "Why are you considering selling your house: " . $propSell . "\r\n" .
			   "When would you like to sell your house: " . $propSellWhen . "\r\n" .
			   // Mortgage and Terms
			   "\r\n" . "MORTGAGE AND TERMS" . "\r\n" . 
			   "\r\n" . "How much are your monthly mortgage payments: " . $monthlyMort . "\r\n" .
			   "How much is your first mortgage balance: " . $firstMort . "\r\n" . 
			   "How much is your second mortgage balance: " . $secondMort  . "\r\n" .
			   "How much are your annual property taxes: " . $propTax . "\r\n" .
			   "How much is your annual insurace premium: " . $insPre . "\r\n" . 
			   "Are your property taxes and insurance included in your mortgage payment: " . $taxIns . "\r\n" .
			   "How much do you feel your house is worth: " . $houseWorth . "\r\n" . 
			   "Would you sell your house for what is owed: " . $houseOwed . "\r\n" .
			   "Would you be willing to let us take over the mortgage payments: " . $takeMort . "\r\n" .
			   "If we can buy your house in 7 days or less, what is the least you will accept: " . $leastAccept . "\r\n" . 
			   "How did you hear about us: " . $hearAbout . "\r\n";



	$headers = "This message is from $name email address: $from";

		$_SESSION['success'] = "Your information has been sent we will be in contact with you shortly, thank you!";

		mail($to, $subject, $message, $headers);
		header('location: sell.php');
		die();
}

?>