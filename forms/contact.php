<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  //$receiving_email_address = 'sales@ddreams.org';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];



  // $contact->smtp = array(
  //   'host' => 'ddreams.org',
  //   'username' => 'sales@ddreams.org',
  //   'password' => 'TweedsWelderAllayChewed84',
  //   'port' => '587'
  // );
  

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);
  // $contact->recaptcha_secret_key = '6LcPV9kpAAAAAOdRdrBtGpOVDRINe1AY3vsml2cl';
  // echo $contact->send();

date_default_timezone_set('Asia/Manila');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../assets/src/Exception.php';
require '../assets/src/PHPMailer.php';
require '../assets/src/SMTP.php';

$receiving_email_address = 'sales@ddreams.org';
//$receiving_email_address = 'martin11ph@gmail.com';

 $mail = new PHPMailer;
 
$mail->isSMTP();

$mail->Host     = 'ddreams.org';
$mail->SMTPAuth = true;
$mail->Username = "sales@ddreams.org";
$mail->Password = "TweedsWelderAllayChewed84";
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;
//$mail->SMTPDebug=2;



$mail->setFrom('sales@ddreams.org', 'Web Contact Form | DDreams ');
$mail->addReplyTo('sales@ddreams.org', 'Digital Dreams Solutions');


$mail->addAddress($receiving_email_address);


$mail->Subject = $_POST['subject'];
//$mail->Subject ='test subject';

$mail->isHTML(true);

// Email body content
 $mail->Body = "Name: " .  $_POST['name'] . "<br>" . "Email: " .  $_POST['email'] . "<br><br>" .  $_POST['message'];



// Send email
 $mail->recaptcha_secret_key = '6LcPV9kpAAAAAOdRdrBtGpOVDRINe1AY3vsml2cl';
echo $mail->send();

 
                     

?>
