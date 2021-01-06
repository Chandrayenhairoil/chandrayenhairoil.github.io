<?php
if(isset($_POST['submit'])){
 
  $name = $_POST['name']
  $visitor_email = $_POST['email']
  $phonenumber = $_POST['phonenumber']
  $residentialaddress = $_POST['residentialaddress']
  
  $email_from = 'chandrayenhairoil.github.io';
  $email_subject = 'New Form Submission';
  $email_body = "User Name: $name.\n"
                    "User Email: $visitor_email.\n".
                    "User Phonenumber: $phonenumber.\n".
                    "User Residentaladdress: $residentaladdress\n";

  $to ="vrkrock7@gmail.com"                   
  
  $headers ="From: $email_from \r\n"

  $headers ="Reply-To: $visitor_from \r\n"

  mail($to,$email_subject,$email_body,$headers);

  header("Location: form.html");
}
?>
