<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP(); 
    $mail->Host       = 'smtp.gmail.com';  
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aishwaryapbhoir@gmail.com';                     //SMTP username
    $mail->Password   = 'yrlq htjj opas gfef';   
    $mail->Port       = 587; 
    $mail->setFrom('aishwaryapbhoir@gmail.com', 'Office Id');
    $mail->addAddress($_POST["email-id"]);

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';


    $name =  $_POST['name'];
    $phoneno = $_POST['phone-no'];
    $emailid = $_POST['email-id'];
    $city = $_POST['city'];
    // $mail->Body = 'This is the body in plain text for non-HTML mail clients xxxxxxxxxxx send your input.'. '<br>';
    $mail->Body .= 'Name: '. $name;''. '\n';
    $mail->Body .= 'Phone No: '. $phoneno;''. '\n';
    $mail->Body .= 'Email Id: '. $emailid;''. '\n';
    $mail->Body .= 'City: '. $city; 

    // echo $mail->Body;
    // exit;
    
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients xxxxxxxxxxx';

    $mail->send();
    echo "
    <script>
    alert('Email sent successfully!');
    document.location.href = 'https://labindiadigital.com/reynard/';
    </script> ";
}
else
echo "
    <script>
    alert('Failed to sent!');
    document.location.href = 'https://labindiadigital.com/reynard/';
    </script> ";

?>