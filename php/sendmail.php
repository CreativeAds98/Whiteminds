<?php
if($_POST)
{
	$to_email   	= "happychild@whiteminds.in"; //Recipient email, Replace with own email here
	
	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		
		$output = json_encode(array( //create JSON data
			'type'=>'error', 
			'text' => 'Sorry Request must be Ajax POST'
		));
		die($output); //exit script outputting json data
    } 
	
	//Sanitize input data using PHP filter_var().
	$user_name		= filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
	$user_email		= filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
	$subject		= filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
	$message		= filter_var($_POST["msg"], FILTER_SANITIZE_STRING);
	
	
	//email body
	$message_body = $message."\r\n\r\n-".$user_name."\r\nEmail : ".$user_email;
	
	//proceed with PHP email.
	$headers = 'From: '.$user_name.'' . "\r\n" .
	'Reply-To: '.$user_email.'' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
	$send_mail = mail($to_email, $subject, $message_body, $headers);
	
	if(!$send_mail)
	{
		//If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
		$output = json_encode(array('type'=>'error', 'text' => '<p>Could not send mail! Please check your PHP mail configuration.</p>'));
		die($output);
	}else{
		// you can edit your success message below  
		$output = json_encode(array('type'=>'message', 'text' => '<div class="alert alert-success" role="alert">
		Hi '.$user_name .', Thank you for your message. We will contact you soon.</div>'));
		die($output);
	}
}
?>