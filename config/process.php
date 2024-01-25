<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");


$data= $_POST;
//modificações no banco
if(!empty($data)){

    //criar contato
    if($data["type"]==="create"){
        $nome=$data['name'];
        $telefone=$data['phone'];
        $observacoes= $data['observations'];

        $query="INSERT INTO contatos (nome,telefone,observacoes) VALUES (:nome,:telefone,:observacoes)";
        $stmt= $conn->prepare($query);
        $stmt->bindParam(":nome",$nome);
        $stmt->bindParam(":telefone",$telefone);
        $stmt->bindParam(":observacoes",$observacoes);
       


        try{
            $stmt->execute();
            $_SESSION["msg"]="Contato criado com sucesso";
            
        }
        catch(PDOException $e){
            //erro na conexão
            $error= $e->getMessage();
            echo "erro: $error";
    
        }
        header("Location:".$BASE_URL.'../index.php');
    }
    //atualizar
    else if($data["type"]==="edit"){
        $nome= $data['name'];
        $telefone=$data['phone'];
        $observacoes=$data['observations'];
        $id=$data['id'];

        $query= "UPDATE  contatos SET nome=:nome, telefone=:telefone,observacoes=:observacoes WHERE id=:id";
        $stmt= $conn->prepare($query);
        $stmt->bindParam(":nome",$nome);
        $stmt->bindParam(":telefone",$telefone);
        $stmt->bindParam(":observacoes",$observacoes);
        $stmt->bindParam(":id",$id);

        try{
            $stmt->execute();
            $_SESSION["msg"]="Contato atualizado com sucesso";
            
        }
        catch(PDOException $e){
            //erro na conexão
            $error= $e->getMessage();
            echo "erro: $error";
    
        }
        header("Location:".$BASE_URL.'../index.php');


    }
   
    //seleção de dados

}
 
else{

}





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

    //fechar conexão
    $conn=null;
   

?>