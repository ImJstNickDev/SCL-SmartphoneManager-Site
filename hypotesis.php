<?php
    // Variabili: Marca, Modello, Prezzo
    $marca = "iPhone";
    $modello = "X";
    $prezzo = "1000";
    $sqlquery = "SELECT * FROM telefoni";
    $sqlwhere = "WHERE ";
    // Controlla se la marca non è nulla
    if($marca != "")
    {
        $sqlwhere = $sqlwhere . "marca = '".$marca."'";
    }
    // Controlla se il Modello è nullo
    if($modello != "")
    {
        $sqlwhere = $sqlwhere . " AND modello = '".$modello."'";
    }
    // Controlla se il Prezzo non è nullo
    if($prezzo != "")
    {
        $sqlwhere = $sqlwhere . " AND prezzo = '".$prezzo."'";
    }
    // Aggiunge l'ultima parte della query
    if($sqlwhere != "WHERE")
    {
        $sqlquery = $sqlquery." ".$sqlwhere;
    }
    // Aggiunge il punto e virgola
    $sqlquery = $sqlquery.";";
    echo($sqlquery);


?>