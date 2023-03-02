<?php
$name = $_POST['name'];
$visitor = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@skillseekho.org';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
				"User Email: $visitor.\n".
				"Subject: $subject.\n".
				"User Message: $message.\n";

$to	= 'prabhatsrivastava06077@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor \r\n";

email($to,$email_subject,$email_body,$headers); 

header("Location: contact.html");
?>