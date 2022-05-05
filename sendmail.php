<?php
$from = "niconotnicko@gmail.com";
$to = "niconotnicko@gmail.com";
$subject = "Prova Mail PHP";
$message = "Messaggio di prova email PHP";
$headers = "From:".$from;
mail($to,$subject,$message,$headers);
echo "Test Email Sent";
?>
