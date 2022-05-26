<?php
    session_start();
    if(isset($_SESSION['id']))
    {
        if($_SESSION['userlevel'] >= 2)
        {
            $marca = $_POST['marca'];
            $modello = $_POST['modello'];
            $prezzo = $_POST['prezzo'];
            $conn = new mysqli("localhost", "phpmadmin", "amministratore", "DBTelefonini");
            if($conn->connect_errno)
            {
                exit;
            }
            $query = 'INSERT INTO telefoni(marca, modello, prezzo) VALUES("'.$marca.'", "'.$modello.'", "'.$prezzo.'");';
            $result = $conn->query($query);
            $conn->close();
            HEADER("location:index.php");
        }
    }
?>