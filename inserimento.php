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
                        <link rel="stylesheet" href="styles.css">
                    </head>
                    <body>
                        <div class="fcontainer">
                            <form action="inserimento2.php" method="post" class="forms">
                                <input class="imput" type="text" name="marca" placeholder="Marca">
                                <br>
                                <input class="imput" type="text" name="modello" placeholder="Modello">
                                <br>
                                <input class="imput" type="text" name="prezzo" placeholder="Prezzo">
                                <br>
                                <input class="imput" type="submit" value="Inserisci">
                            </form>
                        </div>
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