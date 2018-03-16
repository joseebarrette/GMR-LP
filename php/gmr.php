<?php
$firstname  = $_REQUEST["firstname"];
$lastname  = $_REQUEST["lastname"];
$organisation  = $_REQUEST["organisation"];
$telephone  = $_REQUEST["telephone"];
$email = $_REQUEST["email"];
$subject   = $_REQUEST["subject"];
$msg   = $_REQUEST["msg"];
$to    = "j@joseebarrette.com"; // ENTER YOUR EMAIL ADDRESS
if (isset($email) && isset($name) && isset($msg)) {
    $email_subject = "$firstname $lastname vous a envoyé un message au sujet de SITL Paris"; // ENTER YOUR EMAIL SUBJECT
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$firstname." ".$lastname." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "De: $firstname $lastname<br/> Compagnie: $organisation <br/>Téléphone: $telephone<br/>
 Courriel: $email";

   $mail =  mail($to, $email_subject, $msg, $headers);
  if($mail)
	{
		echo 'success';
	}

else
	{
		echo 'failed';
	}
}

?>
