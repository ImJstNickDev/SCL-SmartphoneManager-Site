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
                        <title>Ma che stamo a eliminà</title>
                        <link rel="stylesheet" href="css/styles.css">
                    </head>
                    <body>
                        <div class="fcontainer">
                            <form action="eliminazione2.php" method="post" clasS="forms">
                                <input class="imput" type="text" name="id" placeholder="ID">
                                <br>
                                <input class="imput" type="submit" value="Elimina">
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