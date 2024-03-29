<?php	
	if(empty($_POST['name_25675']) && strlen($_POST['name_25675']) == 0 || empty($_POST['message_25675']) && strlen($_POST['message_25675']) == 0 || empty($_POST['email_25675']) && strlen($_POST['email_25675']) == 0)
	{
		return false;
	}
	
	$name_25675 = $_POST['name_25675'];
	$message_25675 = $_POST['message_25675'];
	$email_25675 = $_POST['email_25675'];
	
	$to = 'contact@bristol-lisboa-gallery.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "SUBMIT ART";
	$email_body = "You have received a new message. \n\n".
				  "Name_25675: $name_25675 \nMessage_25675: $message_25675 \nEmail_25675: $email_25675 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: fromsite@bristol-lisboa-gallery.com\n";
	$headers .= "Reply-To: $email_25675";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>