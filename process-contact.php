<?php

session_start();


if (isset($_POST['submit']))
{

	// Diskin@TrueNWVentures.com

	$to="halterman.kyle@gmail.com";

	$name=$_POST['name'];
	$from=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$headers = "This message is from $name email address: $from";

		$_SESSION['success'] = "Your email has been sent, we will be in contact with you soon, thank you!";
		
		mail($to, $subject, $message, $headers);
		
		header('location: contact.php');
		die();
}

?>