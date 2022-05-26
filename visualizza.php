<?php
	session_start();
?>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma che stamo a visualizzà</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
	
	<center>
		<table class="visualizza">
			<tr>
				<th>ID</th>
				<th>Marca</th>
				<th>Modello</th>
				<th>Prezzo</th>
				<?php
					if(isset($_SESSION['username']))
					{
						if($_SESSION['userlevel'] >= 2)
						{
							echo "<th>Modifica</th>";
							echo "<th>Elimina</th>";
						}
					}
				?>
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
				<td>'.$row["prezzo"].'</td>';
		if(isset($_SESSION['username']))
		{
			if($_SESSION['userlevel'] >= 2)
			{
				echo '<td><a class="button" href="modifica2.php?id='.$row["id"].'">Modifica</a></td>';
				echo '<td><a class="button" href="eliminazione2.php?id='.$row["id"].'">Elimina</a></td>';
			}
		}
		echo
		'
			</tr>
		';
	}
	$result->free();
	$conn->close();
?>
</table>
<br><br><br>
<center><a href="index.php" class="button goback">Torna alla Home</a></center>
</body>
</html>