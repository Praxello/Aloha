<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

 $response = [];
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "darshanvnikumbh@gmail.com";
   

    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['message']; // required
    $email_subject = $_POST['subject'];
  
    $email_message = "<b>Contact Details:</b><br><br>";
 
    $email_message .= "Name: ".$name."<br>";
    $email_message .= "Email: ".$email_from."<br>";
    $email_message .= "Comments: ".$comments."<br>";
 
// create email headers
  $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "From:".$email_from."\r\n";
//$headers = 'From: '.$email_to."\r\n".'Reply-To: '.$email_from."\r\n" .'X-Mailer: PHP/' . phpversion();
if(@mail($email_to, $email_subject, $email_message, $headers)){
   $response['msg'] = 'Thank you for contacting us. we will get back to you soon.';
   }else{
  $response['msg'] = 'Sorry Message has not send please try again';
   }
exit(json_encode($response));
?>
