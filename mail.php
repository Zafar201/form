<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$mobilenumber= $_POST['phone'];
$age= $_POST['age'];


$to = "zafarirshad201@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n mobilenumber =". $mobilenumber .
"\r\n age =". $age ;
$headers = "From: noreply@ayshasawaab@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>