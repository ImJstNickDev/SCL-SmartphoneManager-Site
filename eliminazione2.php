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
                        <link rel="stylesheet" href="styles.css">
                    </head>
                    <body>
                        <div class="fcontainer">
                            <form action="eliminazione3.php" method="post" class="forms">
                '
            );
                        if(isset($_POST['id']))
                        {
                            $id = $_POST['id'];
                        }
                        else
                        {
                            $id = $_GET['id'];
                        }
                        $conn = new mysqli("localhost", "phpmadmin", "amministratore", "DBTelefonini");
                        if($conn->connect_errno)
                        {
                            exit;
                        }
                        $query = 'SELECT * FROM telefoni WHERE id = '.$id.';';
                        $result = $conn->query($query);
                        $row = $result->fetch_assoc();
                        echo
                        '
                            <input type="text" name="id" placeholder="ID" value="'.$id.'" readonly>
                            <br>
                            <input type="text" name="marca" placeholder="Marca" value="'.$row['marca'].'" readonly>
                            <br>
                            <input type="text" name="modello" placeholder="Modello" value="'.$row['modello'].'" readonly>
                            <br>
                            <input type="text" name="prezzo" placeholder="Prezzo" value="'.$row['prezzo'].'" readonly>
                            <br>
                        ';
                        $result->free();
                        $conn->close();
            echo
            (
                '
                                <input type="submit" value="Conferma">
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