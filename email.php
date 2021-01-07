<?php 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $name = $_POST['name'];
    $homeaddress = $_POST['residentialaddress'];
    $message = $_POST['message'];
    
    $mailto = "77076645+Chandrayenhairoil@users.noreply.github.com";
    $headers = "From: ".$mailfrom;
    $txt = "you have received an email from ".$name.".\n\n".$message;
    
    mail($mailto, $txt, $headers);
    
    }
?>

