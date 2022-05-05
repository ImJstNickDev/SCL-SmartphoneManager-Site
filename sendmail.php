<?php
$from = "niconotnicko@gmail.com";
$to = "niconotnicko@gmail.com";
$subject = "Prova Mail PHP";
$message = '<h1>Messaggio di prova email PHP</h1>
<br><img src="https://www.pngall.com/wp-content/uploads/4/Golden-Retriever-Puppy-PNG-High-Quality-Image.png">';
$headers = "From:".$from;
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
mail($to,$subject,$message,$headers);
echo "Test Email Sent";
?>
