<?php
$from = "Pippo";
$to = "sozio.racigno@gmail.com";
$subject = "Ciao?";
$message = '<h1>Ciao? Sai che tecnicamente i cani sono un liquido? Ah no? Beh ora lo sai...</h1>
<br><img src="https://www.pngall.com/wp-content/uploads/4/Golden-Retriever-Puppy-PNG-High-Quality-Image.png">';
$headers = "From:".$from."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
if(mail($to,$subject,$message,$headers))
{
	echo "Test Email Sent";
} else
{
	echo "
    <div class=\"MsgError\">
        <h1>Error&hellip;</h1>
        <p>Disculpa <b><?=$name;?></b>, tu mensaje fall&oacute; en ser enviado. Por favor vuelve a intentar.</p>
</div>";
}
?>
