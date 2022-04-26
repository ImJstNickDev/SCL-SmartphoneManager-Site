<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma che stamo a inserì</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<center>
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
    $result = $conn->query($query);
    if($result)
    {
        echo 'Modifica avvenuta con successo, torno alla pagina principale';
    } else
    {
        echo 'Qualcosa non è andato come doveva';
    }
	$conn->close();
    header("refresh: 1; URL=index.php");
?>
</center>
</body>
</html>