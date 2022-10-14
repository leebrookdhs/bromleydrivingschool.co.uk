<?php
// Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'info@bromleydrivingschool.co.uk';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }
  
  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->bcc = array('lee.brook@dragons-digital.co.uk');
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->from_phone = $_POST['phone'];
  
  

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['phone'], 'Phone');
  if($_POST['privacy'] !='accept') { die('Please, accept our terms of service and privacy policy');}
  $contact->honeypot = $_POST['first_name'];
  
  echo $contact->send();
?>
