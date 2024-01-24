<?php

    include_once("config/url.php");
    include_once("config/connection.php");
    include_once("config/process.php");

    //limpa a mensagem
    if(isset($_SESSION['msg'])){
        $print_msg=$_SESSION['msg'];
        $_SESSION['msg']='';
    }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agenda de contatos</title>
	

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="<?=$BASE_URL?>css/estilo.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="">
            <img class="img-fluid" src="<?=$BASE_URL?>img/logo.svg" alt="Agenda">
        </a>

       <div>
       <div class="navbar-nav">
            <a class="nav-link active" href="index.php" id="home-link">Agenda</a>
            <a class="nav-link active" href="create.php" id="home-link">Adicionar contato</a>
        </div>
       </div>
    </nav>

</header>





