<?php
 if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phonenumber=$_POST['phonenumber'];
  $residentialaddress=$_POST['residentialaddress'];
  
  $to ='vrkrock7@gmail.com'
  $subject='New Form Submission';
  $message="Name: ".$name"\n"."Phone: ".$phone."\n". "Residentialaddress: "."\n\n".$residentialaddress;
  $headers="From: ".$email;

  if(mail($to, $subject, $message, $headers)){
     echo"<h1>Submitted successfully! Thank you"." ".$name.",We will cotact you later</h1>";
  }
  else{
    echo "oops! Something went wrong!";
  }

}
  
?>
