<?php

    $conn = new mysqli("localhost", "phpmadmin", "amministratore", "DBTelefonini");
    session_start();
    if(isset($_GET['sessionid']))
    {
        if($_GET['sessionid'] == $_SESSION['id'])
        {
            echo($_SESSION['username']);
            $sid = $_GET['sessionid'];
            $query = 'UPDATE users SET attivo = 1 WHERE username = "'.$_SESSION['username'].'";';
            $result = $conn->query($query);
            $query = 'DELETE FROM sessionmanager WHERE sessionid = "'.$sid.'";';
            $result = $conn->query($query);
        } else
        {
            echo("<h1>Forbidden access</h1><br><p>Return to <a href='index.php'>home</a></p>");
        }
    } else
    {
        header("Location: index.php");
    }

?>