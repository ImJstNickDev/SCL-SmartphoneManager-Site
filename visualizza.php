<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma che stamo a visualizzà</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
	
	<center>
		<table>
			<tr>
				<th>ID</th>
				<th>Marca</th>
				<th>Modello</th>
				<th>Prezzo</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
				
<?php
	$conn = new mysqli("localhost", "phpmadmin", "amministratore", "DBTelefonini");
	
	if($conn->connect_errno)
	{
		exit;
	}
	$query = 'SELECT * FROM telefoni';
	$result = $conn->query($query);
	while($row = $result->fetch_assoc())
	{
		
		echo
		'
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["marca"].'</td>
				<td>'.$row["modello"].'</td>
				<td>'.$row["prezzo"].'</td>
			</tr>
			
		';
	}
	$result->free();
	$conn->close();
?>
</table>
<br><br><br>
<center><a href="index.php" class="button">Torna alla Home</a></center>
</body>
</html>