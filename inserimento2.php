<?php
    $marca = $_POST['marca'];
    $modello = $_POST['modello'];
    $prezzo = $_POST['prezzo'];
    $conn = new mysqli("localhost", "root", "", "DBTelefonini");
	if($conn->connect_errno)
	{
		exit;
	}
	$query = 'INSERT INTO Telefoni(marca, modello, prezzo) VALUES("'.$marca.'", "'.$modello.'", "'.$prezzo.'");';
    $result = $conn->query($query);
    $result->free();
	$conn->close();
    HEADER("location:index.php");
?>