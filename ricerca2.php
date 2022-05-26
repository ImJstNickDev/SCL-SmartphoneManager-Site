<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma che stamo a cercà</title>
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
	// Intestazione di una variabile gate di tipo booleano che servirà più avanti per aggiungere l'end nella parte where della query SQL in modo da mantenere una corretta sintassi anche se non viene inserita nessuna marca.
	$gate = false;
	// Intestazione variabile sqlquery per la query SQL da eseguire e la variabile sqlwhere per la parte WHERE della query SQL da eseguire.
    $sqlquery = "SELECT * FROM telefoni";
    $sqlwhere = "WHERE ";

	// Apertura bridge con il database MySQL e la connessione al database MySQL. Se la connessione non è andata a buon fine, stampo un messaggio di errore.
	$conn = new mysqli("localhost", "phpmadmin", "amministratore", "DBTelefonini");
	if($conn->connect_errno)
	{
		echo("Connessione fallita: ".$conn->connect_error);
		exit;
	}

    // Prendo i dati dal form e li salvo in variabili locali per poterli usare nella query SQL. Se la variabile è vuota (""), non aggiungo la condizione al WHERE.
	$marca = $_POST['marca'];
	$modello = $_POST['modello'];
	$prezzo = $_POST['prezzo'];
	//echo("Marca: ".$marca." Modello: ".$modello." Prezzo: ".$prezzo);
	
    // Controlla se la marca non è nulla
    if($marca != "")
    {
        $sqlwhere = $sqlwhere . "marca = '".$marca."'";
	$gate = true;
    }
	
    // Controlla se il Modello è nullo
    if($modello != "")
    {
		if($gate)
		{
			$sqlwhere = $sqlwhere . " AND ";
		}
        $sqlwhere = $sqlwhere . "modello = '".$modello."'";
    }
    // Controlla se il Prezzo non è nullo
    if($prezzo != "")
    {
		if($gate)
		{
			$sqlwhere = $sqlwhere . " AND ";
		}
        $sqlwhere = $sqlwhere . "prezzo = '".$prezzo."'";
    }
    // Aggiunge l'ultima parte della query
    if($sqlwhere != "WHERE ")
    {
        $sqlquery = $sqlquery." ".$sqlwhere;
    }
    // Aggiunge il punto e virgola
    $sqlquery = $sqlquery.";";
    echo($sqlquery);
	// Esegue la query SQL e salva il risultato in una variabile $result (risultato della query SQL) e controlla se ci sono risultati. se non ci sono risultati, stampo un messaggio di errore.
	$result = $conn->query($sqlquery);
	if(!$result)
	{
		echo("Nessun record trovato nel database con i seguenti campi");
		exit;
	} else
	{
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
	}
	$result->free();
	$conn->close();
?>
</table>
<br><br><br>
<center><a href="index.php" class="button">Torna alla Home</a></center>
</body>
</html>
