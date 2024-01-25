<?php
    include_once("templates/header.php");
?>
  <div class="container" id="view-contact-container">
    <?php   include_once("templates/back-btn.html")         ?>
    <h1 id="main-title"> <?=$contato['nome']?> </h1>
    <p class="bold">Telefone: </p>
    <p><?=$contato['telefone']?></p>

    <p class="bold">Observações: </p>
    <p><?=$contato['observacoes']?></p>
  </div>



<?php
    include_once("templates/footer.php");
?>


 

