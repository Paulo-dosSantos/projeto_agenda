<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");
    //retorna o dado de um contato
    $id;
    if(!empty($_GET)){
        $id=$_GET['id'];
    }

    if(!empty($id)){
        $query= "SELECT * FROM contatos WHERE id= :id";
        $stmt= $conn->prepare($query);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $contato= $stmt->fetch();

    }
    else{
         //retorna todos os contatos
    $contatos=[];

    $query="SELECT * FROM contatos";
    $stmt= $conn->prepare($query);
    $stmt->execute();

    $contatos= $stmt->fetchAll();


    }
   

?>