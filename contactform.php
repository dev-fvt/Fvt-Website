<?php

if (isset($_POST['submit'])){
	$name = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$mailTo = "ewiafe@fvt-l.com";
	$headers = "From:".$mailFrom;
	$txt = "You have received an email from ".$name.".\n\n".message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}
//erro handling
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	if (empty($name) || empty($email) ||empty($phone) ||empty($message)) {
		echo "cannot be left empty";
	}
	else {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "enter a valid email";
		}
	}
}
else{
	echo "Form cannot be left blank";
}
?>