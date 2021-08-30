<?php
 
if(isset($_POST['email'])) {
 
 
    
 
    $email_to = elodiegage@gmail.com";
 
    $email_subject = "Contact Form Submission";
 
     
 
     
 
    function died($error) {
 
 
        echo "<h1>Whoops!</h1><h2>There appears to be something wrong with your completed form.</h2>";
 
        echo "<strong><p>The following items are not specified correctly.</p></strong><br />";
 
        echo $error."<br /><br />";
 
        echo "<p>Return to the form and try again.</p><br />";
		echo "<p><a href='index.html'>return to the homepage</a></p>";
        die();
		
 
    }
  
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email = $_POST['email']; // required
 
 
    $message = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= '<li><p>The completed e-mail address appears to be incorrect<p></li>';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";

 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= '<li><p>name appears to be wrong</p></li>';
 
  }
 
  if(strlen($message) < 2) {
 
    $error_message .= '<li><p>Message appears to be incorrect</p></li>';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details are given below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 

 
 
    $email_message .= "Last Name: ".clean_string($name)."\n";
 
    $email_message .= "Email Adress: ".clean_string($email)."\n";
 
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
      
 

 
$headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 

 

 
 
 
<h1>Thank you for your message!</h1> <h2>Icontact you as soon as possible.</h2>

?>