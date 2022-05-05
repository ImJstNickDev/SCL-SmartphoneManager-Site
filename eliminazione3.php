<?php
    $id = $_POST['id'];
    $conn = new mysqli("localhost", "phpmadmin", "amministratore", "DBTelefonini");
    if($conn->connect_errno)
    {
        exit;
    }
    $query = 'DELETE FROM telefoni WHERE id = '.$id.';';
    $result = $conn->query($query);
	$conn->close();
    HEADER("location:index.php");
?>