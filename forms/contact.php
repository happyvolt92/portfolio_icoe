<?php
 
// if(isset($_POST['email'])) {

//     $email_to = "elodiegage@gmail.com";
 
//     $email_subject = "Contact Form Submission";
 
  
//     function died($error) {
 
 
//         echo "<h1>Whoops!</h1><h2>There appears to be something wrong with your completed form.</h2>";
 
//         echo "<strong><p>The following items are not specified correctly.</p></strong><br />";
 
//         echo $error."<br /><br />";
 
//         echo "Return to the form and try again.";
// 	    	echo "<a href='index.html'>return to the homepage";
//         die();
		
 
//     }
  
 
 
 
//     $last_name = $_POST['name']; 
 
//     $email = $_POST['email']; 
    
//     $subject = $_POST['subject']; 
 
//     $message = $_POST['message']; 
 
     
 
//     $error_message = "";
 
//     $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
//   if(!preg_match($email_exp,$email)) {
 
//     $error_message .= 'The completed e-mail address appears to be incorrect';
 
//   }
 
//     $string_exp = "/^[A-Za-z .'-]+$/";

 
//   if(!preg_match($string_exp,$name)) {
 
//     $error_message .= 'name appears to be wrong';
 
//   }
 
//   if(strlen($message) < 2) {
 
//     $error_message .= 'Message appears to be incorrect';
 
//   }
 
//   if(strlen($error_message) > 0) {
 
//     died($error_message);
 
//   }
 
//     $email_message = "Form details are given below.\n\n";
 
     
 
//     function clean_string($string) {
 
//       $bad = array("content-type","bcc:","to:","cc:","href");
 
//       return str_replace($bad,"",$string);
 
//     }
 

 
 
//     $email_message .= "Name: ".clean_string($name)."\n";
 
//     $email_message .= "Email Adress: ".clean_string($email)."\n";
 
 
//     $email_message .= "Message: ".clean_string($message)."\n";
 
      
 

 
// $headers = 'From: '.$email."\r\n".
 
// 'Reply-To: '.$email_from."\r\n" .
 
// 'X-Mailer: PHP/' . phpversion();
//  print_r($email_to, $email_subject, $email_message, $headers);
// @mail($email_to, $email_subject, $email_message, $headers);