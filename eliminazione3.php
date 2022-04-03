<?php
    $id = $_POST['id'];
    $conn = new mysqli("localhost", "root", "", "DBTelefonini");
    if($conn->connect_errno)
    {
        exit;
    }
    $query = 'DELETE FROM Telefoni WHERE id = '.$id.';';
    $result = $conn->query($query);
	$conn->close();
?>