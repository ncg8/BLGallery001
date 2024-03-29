<?php	
	if(empty($_POST['name_5216']) && strlen($_POST['name_5216']) == 0 || empty($_POST['email_5216']) && strlen($_POST['email_5216']) == 0 || empty($_POST['message_5216']) && strlen($_POST['message_5216']) == 0)
	{
		return false;
	}
	
	$name_5216 = $_POST['name_5216'];
	$email_5216 = $_POST['email_5216'];
	$message_5216 = $_POST['message_5216'];
	
	$to = 'contact@bristol-lisboa-gallery.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "NESSAGE FROM WEBSITE";
	$email_body = "You have received a new message. \n\n".
				  "Name_5216: $name_5216 \nEmail_5216: $email_5216 \nMessage_5216: $message_5216 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: fromsite@bristol-lisboa-gallery.com\n";
	$headers .= "Reply-To: $email_5216";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>