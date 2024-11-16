<?php 
$name = $_POST['name'];
$mobile  = $_POST['mobile'];
$email = $_POST['email'];
$message = $_POST['message'];

$msg="Hello yazh pure life,"."\r\n";

$msg .="Name:".$name."\r\n";

$msg .="Mobile:".$mobile."\r\n";

$msg .="Email:".$email."\r\n";

$msg .="Message:".$message."\r\n";

$msg .="\r\n\r\n"."Regards,"."\r\n".$name;

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'Cc:yamee.mari@gmail.com' . "\r\n";

mail("yamee.mari@gmail.com","Enquiry from".$name ,$msg ,$headers);

exit;
?>