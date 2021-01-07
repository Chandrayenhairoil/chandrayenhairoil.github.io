<?php 
if(isset($_POST['submit'])){
    $to = "77076645+Chandrayenhairoil@users.noreply.github.com";
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $residentialaddress = $_POST['residentialaddress'];
 
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $phonenumber . " " . $residentialaddress . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    
    }
?>

