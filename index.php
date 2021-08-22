<?php
include_once("resum.html");
// Please specify your Mail Server - Example: mail.yourdomain.com.
ini_set("SMTP","mail.carefor32dentals.com");
// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");
// Please specify the return address to use
ini_set('sendmail_from', 'info@carefor32dentals.com');


//$to = "quadrisheu64@gmail.com";
$name = $_POST['name'];
$email = $_POST['email'];

$message = $_POST['message'];
$message = wordwrap($message,70);
$subject = $_POST['subject'];
$name = "From:".$email."\r\n"."I am ".$name;

//if(isset($_POST['to']) AND isset($_POST['subject']) AND isset($_POST['message']) AND isset($_POST['email']) AND isset($_POST['name']))
if(!empty($name) AND !empty($email) AND !empty($message) AND !empty($subject))
{

    echo "excell";
    mail("quadrisheu64@gmail.com",$subject,$message,$name);
	
    //mail($to,$name,$subject,$message,$email);
}
else
{
    echo "fill all the boxes";
}

/***
  
$to = "quadri@gmail.com";
//$name = $_POST['name'];
$email = $_POST['email'];
$email = "From:".$email."\r\n";
$message = $_POST['message'];
$message = wordwrap($message,70);
$subject = $_POST['subject'];

mail($to,$subject,$message,$email);
















 $to = 
$name = $_POST['name'];
$email = $_POST['email'];
$email = "From:".$email."\r\n";
$message = $_POST['message'];
$message = wordwrap($message,70);
$subject = $_POST['subject'];

mail("quadri@gmail.com",$subject,$message);

 */


















?>