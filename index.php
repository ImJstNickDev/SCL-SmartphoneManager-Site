<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphone Manager</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="header">
        <nav role="navigation">
            <div id="menuToggle">

              <input type="checkbox" />

              <span></span>
              <span></span>
              <span></span>

              <ul id="menu">
                <a href="#"><li>Home</li></a>
                <a href="inserimento.php"><li>Aggiungi Smartphone</li></a>
                <a href="eliminazione.php"><li>Elimina Smartphone</li></a>
                <a href="modifica.php"><li>Modifica Smartphone</li></a>
                <a href="ricerca.php"><li>Cerca Smartphone</li></a>
		<a href="visualizza.php"><li>Lista Smartphone</li></a>
		<a href="sendmail.php"><li>Test SendMail</li></a>
                <a href="" target="_blank"><li>Show me more</li></a>
              </ul>
            </div>
          </nav>
          <center><h1>Gestione Smartphone</h1></center>
    </div>
    <div id="pagina">
        <div class="container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <div class="cardicon">
                            <img src="lista.png"/>
                        </div>
                        <h3>Lista</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Telefoni Presenti: 
                            <?php
                                $conn = new mysqli("localhost", "phpmadmin", "amministratore", "DBTelefonini");
                                if($conn->connect_errno)
                                {
                                    exit;
                                }
                                $query = 'SELECT COUNT(id) as totale FROM telefoni';
                                $result = $conn->query($query);
                                $row = $result->fetch_assoc();
                                echo $row['totale'];
                                $result->free();
                                $conn->close();
                            ?>
                        </p>
                            <center><a href="visualizza.php">Visualizza</a></center>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <div class="cardicon">
                            <img src="aggiungi.png">
                        </div>
                        <h3>Aggiungi</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Inserisci Nuovo Dispositivo</p>
                            <a href="inserimento.php">Inserisci nuovo dispositivo</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <div class="cardicon">
                            <img src="ricerca.png"/>
                        </div>
                        <h3>Cerca</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Cerca un dispositivo</p>
                            <a href="ricerca.php">Cerca un dispositivo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
    </div>
</body>
</html>
