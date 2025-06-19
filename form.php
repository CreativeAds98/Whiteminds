<?php
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST["name"]) && isset($_POST["email"])) {
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "whatsup.chat";
    $mail->SMTPAuth = true;
    $mail->Username = "letstart@whatsup.chat";
    $mail->Password = "Wowelse123#";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom(
        "happychild@whiteminds.in"
    );
    $mail->addAddress("happychild@whiteminds.in");
    $mail->Subject = "White Minds - Contact Form";
    $mail->Body = "<h3>Name : $name <br>Email : $email <br>Subject : $subject <br>Message : $message </h3>";

    if ($mail->send()) {
       echo '<span class="send-true" style="color:#ea1f27;font-size:14px;">Message Sent. Thank you, we will contact you shortly.</span>';
    } else {
        echo '<span style="color:#f89d00;font-size:14px;">All fields must be filled!</span>';
    }
}

?>