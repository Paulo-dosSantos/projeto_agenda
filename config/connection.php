<?php

    $host="localhost";
    $dbname="agenda";
    $user= "root";
    $password="23/04/2003";

    try{
        $conn= new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
        //ativar o modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        //erro na conexão
        $error= $e->getMessage();
        echo "erro: $error";

    }

?>