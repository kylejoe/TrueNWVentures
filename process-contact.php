<?php

session_start();

$to="Diskin@TrueNWVentures.com";

$name=$_POST['name'];
$from=$_POST['email']; //will switch this to post variable this is TEST
$subject=$_POST['subject'];
$message=$_POST['message'];

$headers = "This message is from $name email address: $from";

if (isset($_POST['submit']))
{
	$_SESSION['success'] = "Your email has been sent thank you";
	
	mail($to, $subject, $message, $headers);
	
	header('location: contact.php');
	die();
}

?>