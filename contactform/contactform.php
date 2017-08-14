<?php


// Create connection
//$conn = new mysqli($servername, $username, $password);
$connect=mysqli_connect('localhost','root','','oilgas');
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 
echo "Connected successfully";
$name=$_POST['name'];
$email=$_POST['email'];
$phoneno=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];

mysqli_query($connect,"INSERT INTO contact (Name,mail,Phoneno,Subject,Message)
		        VALUES ('$name','$email','$phoneno','$subject','$message')");

if(mysqli_affected_rows($connect) > 0){
	//echo "<p>guest Added</p>";
} else {
	//echo "guest NOT Added<br />";
	echo mysqli_error ($connect);
    }

// Enter your email, where you want to receive the messages.
$contact_email_to = "";

// Subject prefix
$contact_subject_prefix = "Contat Form Message: ";

// Name too short error text
$contact_error_name = "Name is too short or empty!";

// Email invalid error text
$contact_error_email = "Please enter a valid email!";

// Phone invalid
$contact_error_phone = "Please enter a valid phone number!";

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
    $phoneno = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    
    if(strlen($name)<4){ 
        die($contact_error_name);
    }
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  
        die($contact_error_email);
    }
    
    if(!empty($phoneno)) // phone number is not empty
    {   
    if(preg_match('/^\d{10}$/',$phoneno)) // phone number is valid
    {
      $phoneNumber = '0' . $phoneNumber;

      // your other code here
    }
    else // phone number is not valid
    {
       die($contact_error_phone);
    }
}
else // phone number is empty
{
   die($contact_error_phone);
}
    /*if (!preg_match('/^0\d{9}$/',$_POST["phone"]){
        die($contact_error_phone);
    }*/
    
    if(strlen($message)<3){ 
        die($contact_error_subject);
    }
    
    if(strlen($message)<3){ 
        die($contact_error_message);
    }

    $sendemail = mail($contact_email_to, $contact_subject_prefix . $subject, $message,
         "From: ".$name." <".$email.">" . PHP_EOL
        ."Reply-To: ".$email . PHP_EOL
        ."X-Mailer: PHP/" . phpversion()
    );
    
    if( $sendemail ) {
        echo 'OK';
    } else {
        echo 'Could not send mail! Please check your PHP mail configuration.';
    }
}
?>