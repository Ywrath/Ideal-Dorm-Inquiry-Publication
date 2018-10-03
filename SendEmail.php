<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$email = "idealdormwebsite@gmail.com";
$password = "idealadmin";
$to_id = "idealdorm.inquiry@gmail.com";
$message = "Inquire";
$subject = "Test";

// Configuring SMTP server settings
$mail = new PHPMailer;
$mail->isSMTP(true);
$mail->isSMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->FromName = "Ideal Dorm Inquirer";

// Email Sending Details
$mail->addAddress($to_id);
$mail->addReplyTo($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);

if (!$mail->send()) {
    
    echo "<script>
        alert('Fail');
    </script>".$mail->ErrorInfo;
} else {

    echo "<script>
        alert('Message Sent');
    </script>";
}

/*$mail->send();
echo '<p>Message sent!</p>';
}
catch(Exception $e){
echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
} */
?>