<?php

$conn = mysqli_connect('localhost', 'root', '', 'ideal_dorm');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/vendor/autoload.php';

if(isset($_POST['inquire'])){


	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact_num = $_POST['contactNum'];
	$courseYear = $_POST['courseAndYear'];
	$roomInterested = $_POST['roomNumber'];
	$room_building = $_POST['building'];
	$inquirer_message = $_POST['message'];
	$subject = "Ideal Dorm Inquiry";
	$message = "Name: ".$name."<br>"."Email: ".$email."<br>"."Contact Number: ".$contact_num."<br>".
	"Room interested: ".$roomInterested."<br>"."Building: ".$room_building."<br><br>"."Inquirer's Message: "."<br>".
	$inquirer_message."<br>";

	$mail = new PHPMailer();

	$mail->isSMTP(true);
	$mail->isSMTPDebug = 2;
	$mail->Host = 'smtp.gmail.com:465';
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true;
	$mail->FromName = "Ideal Dorm Inquirer";

	$mail->addAddress('idealdormwebsite@gmail.com');

	// Email Sending Details
	$mail->Username = "idealdormwebsite@gmail.com";
	$mail->Password = "idealadmin";
	$mail->Subject = $subject;
	$mail->setfrom('idealdormwebsite@gmail.com');
	$mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 
	'verify_peer_name' => false, 'allow_self_signed' => true));

	$mail->msgHTML($message); 
	$result = $mail->Send();

	if ($result) {
		$insert_inquiry = mysqli_query($conn,"INSERT INTO inquiry(Name, Email, ContactNum, CourseYear, RoomNum, Building, Message) VALUES ('$name', '$email', '$contact_num', '$courseYear', '$roomInterested', '$room_building', '$inquirer_message')");
		echo "<script>alert('Email Sent!')</script> <meta http-equiv='refresh' content='0; url=landlord_inquiry.php'>";
	}
	else{
		echo "<script>alert('Insert failed!'); </script>". $mail->ErrorInfo;
	}
}


?>