<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_subject = "New form submission";

	$email_body = "User Name: $name.\n".
				"User Email: $visitor_email.\n".
				"User Message: $message.\n";

	$to = "oleksandr.stasenko@gmail.com";

	mail($to,$email_subject,$email_body);

	header('Location: thanks_ru.html');
exit;
?>