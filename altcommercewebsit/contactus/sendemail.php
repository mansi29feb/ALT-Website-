<?php
require_once('../class.smtp.php');
require_once('../class.phpmailer.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name']; // Get Name value from HTML Form
    $email_id = $_POST['email']; // Get Email Value
    $sub= $_POST['subject']; // 
   $mesg = $_POST['message']; // Get Message Value
  $mail = new PHPMailer();  
  $mail->CharSet = 'UTF-8';
  $mail->isSMTP();   // by SMTP
  $mail->SMTPAuth   = false;   // user and password
  $mail->Host       = "www.altdigital.tech";
  //$mail->Port       = 25;
  $mail->Username   = 'ramcharangoel46@gmail.com';  
  $mail->Password   = "@ltbig@123";
  $mail->SMTPSecure = "";    // options: 'ssl', 'tls' , ''  
  $mail->setFrom('info@altdigital.tech','altdigital');   // From (origin)
 // $mail->addCC($from,$namefrom);      // There is also addBCC
  //$mail->Subject  = $subject;
  //$mail->AltBody  = $altmess;
 // $mail->Body = $message;
  $mail->isHTML(true);   // Set HTML type
  $mail->Subject =$_POST['subject'];
  $htmlContent  = $_POST['message'];
  $mail->Body = $htmlContent ;
  //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//$mail->addAttachment("attachment");  
  $mail->addAddress('laxmiputra@altdigital.tech', 'Laxmiputra');
  //$mail->addAddress('vikas@altdigital.tech', 'Vikas');
  //$mail->addAddress('goutam@altcommerce.com', 'Goutam');
 // $mail->addAddress('vikash@altcommerce.com', 'vikash');
  //$mail->addAddress('cheg@boeingdistribution.com', 'Chinna');
  //$mail->addAddress('vzk@boeingdistribution.com', 'vikas.kumar');
 // $mail->addAddress('vikas.goyal@boeingdistribution.com', 'vikas');
  //$mail->addAddress('ebkallur@gmail.com', 'Eshwar');
  
  //return $mail->send();
  
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   // echo $htmlContent;
}

}
 $response['message'] = 'Thank you for contacting us will get back to you soon.';
echo json_encode($response);
?>