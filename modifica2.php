<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma che stamo a modificà</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Modifica i dati</h1>
    <form action="modifica3.php" method="post">
<?php
    $id = $_POST['id'];
    $conn = new mysqli("localhost", "root", "", "DBTelefonini");
    if($conn->connect_errno)
    {
        exit;
    }
    $query = 'SELECT * FROM Telefoni WHERE id = '.$id.';';
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    echo'
        <input type="text" name="id" placeholder="ID" value="'.$id.'" readonly>
        <br>
        <input type="text" name="marca" placeholder="Marca" value="'.$row['marca'].'">
        <br>
        <input type="text" name="modello" placeholder="Modello" value="'.$row['modello'].'">
        <br>
        <input type="text" name="prezzo" placeholder="Prezzo" value="'.$row['prezzo'].'">
        <br>
    ';
    $result->free();
	$conn->close();
?>
        <input type="submit" value="Modifica">
    </form>
</body>
</html>