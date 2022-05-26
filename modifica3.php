<?php
    session_start();
    if(isset($_SESSION['id']))
    {
        if($_SESSION['userlevel'] >= 2)
        {
            echo
            (
                '
                    <html lang="it">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Ma che stamo a inserì</title>
                        <link rel="stylesheet" href="css/styles.css">
                    </head>
                    <body>
                    <center>
                '
            );
                        $id = $_POST['id'];
                        $marca = $_POST['marca'];
                        $modello = $_POST['modello'];
                        $prezzo = $_POST['prezzo'];
                        $conn = new mysqli("localhost", "phpmadmin", "amministratore", "DBTelefonini");
                        if($conn->connect_errno)
                        {
                            exit;
                        }
                        $query = 'UPDATE telefoni SET marca = "'.$marca.'", modello = "'.$modello.'", prezzo = "'.$prezzo.'" WHERE id = '.$id.';';
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
            echo
            (
                '
                    </center>
                    </body>
                    </html>
                '
            );
        }
    } else
    {
        header("Location: index.php");
    }
?>