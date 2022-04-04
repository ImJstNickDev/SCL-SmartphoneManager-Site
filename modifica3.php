<?php
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $modello = $_POST['modello'];
    $prezzo = $_POST['prezzo'];
    $conn = new mysqli("localhost", "root", "", "DBTelefonini");
    if($conn->connect_errno)
    {
        exit;
    }
    $query = 'UPDATE Telefoni SET marca = "'.$marca.'", modello = "'.$modello.'", prezzo = "'.$prezzo.'" WHERE id = '.$id.';';
    echo $query;
    $result = $conn->query($query);
	$conn->close();
    //HEADER("location:index.php");
?>