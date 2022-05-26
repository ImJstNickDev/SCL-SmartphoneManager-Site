<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        if($_SESSION['userlevel'] >= 3)
        {
            include('wip.php');
        }
    } else
    {
        header("Location: index.php");
    }
?>