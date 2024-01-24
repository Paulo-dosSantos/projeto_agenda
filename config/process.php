<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $contatos=[];

    $query="SELECT * FROM contatos";
    $stmt= $conn->prepare($query);
    $stmt->execute();

    $contatos= $stmt->fetchAll();


?>