<?php
 //Create connection
//$conn = new mysqli($servername, $username, $password);
/*$connect=mysqli_connect('localhost','root','','iadmin');
 //Check connection
//if ($connect->connect_error) {
    //die("Connection failed: " . $connect->connect_error);
//} 
//echo "Connected successfully";
$name=$_POST['name'];
$email=$_POST['email'];
//$phoneno=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];
mysqli_query($connect,"INSERT INTO contactus(Name,mail,Subject,Message)
		        VALUES ('$name','$email','$subject','$message')");
/*
if(mysqli_affected_rows($connect) > 0){
	//echo "<p>guest Added</p>";
} else {
	//echo "guest NOT Added<br />";
	echo mysqli_error ($connect);
    }
*/
// Enter your email, where you want to receive the messages.
$contact_email_to = "";
// Subject prefix
$contact_subject_prefix = "Contat Form Message: ";
// Name too short error text
$contact_error_name = "Name is too short or empty!";
// Email invalid error text
$contact_error_email = "Please enter a valid email!";
// Phone invalid
//$contact_error_phone = "Please enter a valid phone number!";
// Subject too short error text
$contact_error_subject = "Subject is too short or empty!";
// Message too short error text
$contact_error_message = "Too short message! Please enter something.";
/********** Do not edit from the below line ***********/
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    die('Sorry Request must be Ajax POST'); 
}
if( isset($_POST) ) {
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    //$phoneno = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    
    if(strlen($name)<4){ 
        die($contact_error_name);
    }
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  
        die($contact_error_email);
    }
    
    if(strlen($message)<3){ 
        die($contact_error_subject);
    }
    
    if(strlen($message)<3){ 
        die($contact_error_message);
    }
    
}
        
//    send_mail($to, $body);
	require 'PHPMailer/PHPMailerAutoload.php';
    $to="admin@unitedgulfsafety.com";
	$mail = new PHPMailer;
	
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'unitedgulfsafety@gmail.com';
	$mail->Password = 'sumeetproject';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;
	
	$mail->From = 'unitedgulfsafety@gmail.com';
	$mail->FromName = $name;
	$mail->addAddress($to);
	
	$mail->isHTML(true); 
	$mail->Subject = "NewUser";
	$mail->Body    = "\nThe person visited your site is  ".$name."\nHis/Her Email  ".$email."\nHis/Her Subject  ".$subject."\nHis/Her Message  ".$message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	if(!$mail->send())
	{
		echo 'Email could not be sent.';
	} 
	else 
	{
		echo 'Your Details have been received ..Will come back to you soon!';
	}