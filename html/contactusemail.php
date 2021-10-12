<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home8/hubbuddi/public_html/asiatopu/html/PHPMailer/Exception.php';
require '/home8/hubbuddi/public_html/asiatopu/html/PHPMailer/PHPMailer.php';
require '/home8/hubbuddi/public_html/asiatopu/html/PHPMailer/SMTP.php';

include_once("dbconnect.php");

if (isset($_POST['contactus'])) {
$email = $_POST['email'];
$name = $_POST['fullname'];
$message = $_POST['message'];

echo "<script type='text/javascript'>alert('Your message successfully sent to the admin.Thank you.');history.go(-1)</script>";
            sendEmail($email,$name,$message); 
}

if (isset($_POST['submitfeedback'])) {
$email = $_SESSION['email'];
$subject = $_POST['subject'];
$feedback = $_POST['feedback'];

echo "<script type='text/javascript'>alert('Your feedback successfully sent to the admin.Thank you.');history.go(-1)</script>";
            sendFeedback($email,$subject,$feedback); 
}


function sendEmail($email,$name,$message){
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0; 
    $mail->isSMTP(); 
    $mail->Host= 'mail.hubbuddies.com'; 
    $mail->SMTPAuth= true; 
    $mail->Username= 'asiatopu@hubbuddies.com'; 
    $mail->Password= '6p$=8zACNSDa';
    $mail->SMTPSecure= 'tls';         
    $mail->Port= 587;
    
    $mail->setFrom("asiatopu@hubbuddies.com",$name);
    $mail->addAddress("AsiaTopUmailbox@gmail.com");
    $mail->isHTML(true);
    $mail->Subject = "Contact Message";
    $mail->Body  = "<strong>Full Name&nbsp;&nbsp;:</strong>&nbsp;&nbsp;$name<br><br><strong>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;&nbsp;$email<br><br><strong>Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;&nbsp;$message<br>";

    $mail->send();
}

function sendFeedback($email,$subject,$feedback){
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0; 
    $mail->isSMTP(); 
    $mail->Host= 'mail.hubbuddies.com'; 
    $mail->SMTPAuth= true; 
    $mail->Username= 'asiatopu@hubbuddies.com'; 
    $mail->Password= '6p$=8zACNSDa';
    $mail->SMTPSecure= 'tls';         
    $mail->Port= 587;
    
    $mail->setFrom("asiatopu@hubbuddies.com",$name);
    $mail->addAddress("AsiaTopUmailbox@gmail.com");
    $mail->isHTML(true);
    $mail->Subject = "Feedback Message";
    $mail->Body  = "<strong>Email&nbsp;&nbsp;:</strong>&nbsp;&nbsp;$email<br><br><strong>Subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;&nbsp;$subject<br><br><strong>Feedback&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;&nbsp;$feedback<br>";

    $mail->send();
}
?>