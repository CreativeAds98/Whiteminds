<?php
$to = 'happychild@whiteminds.in';
$subject = 'Hi Enquiry From Your Site - whiteminds.in';
$from     = $_POST['email'];
$headers  = "From: " . $from . "\r\n".'Content-type: text/html; charset=utf-8';
$message = '
<html>
<head>
<title>Enquiry Form</title>
</head>
<body>
<h3>Name: <span style="font-weight: normal;">' . $_POST['name'] . '</span></h3>
<h3>Email Address: <span style="font-weight: normal;">' . $_POST['email'] . '</span></h3>
<h3>Mobile Number: <span style="font-weight: normal;">' . $_POST['mobile'] . '</span></h3>
<h3>Location: <span style="font-weight: normal;">' . $_POST['location'] . '</span></h3>
<h3>Message: <span style="font-weight: normal;">' . $_POST['message'] . '</span></h3>
<div>
</div>
</body>
</html>';
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile'])  && !empty($_POST['location']) && !empty($_POST['message'])) {
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
mail($to, $subject, $message, $headers) or die('<span style="color:#bc5151;font-size:12px;">Error sending Mail</span>');
echo '<span class="send-true" style="color:#01a602;font-size:12px;">Message Sent. Thank you.</span>';
}
} else {
echo '<span style="color:#f89d00;font-size:12px;">All fields must be filled!</span>';
}
?> 