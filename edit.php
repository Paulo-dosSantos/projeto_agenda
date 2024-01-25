<?php
    include_once("templates/header.php");
?>
<div class="container">
<div id="back-link-container">
    <a href="<?=$BASE_URL?>index.php" id="back-link">voltar</a>
</div>
<h1 id="main-title">Atualizar contato</h1>
<form id="create-form" action="<?=$BASE_URL?>config/process.php" method="POST">
<input type="hidden" name="type" value="edit"  >
<input type="hidden" name="id" value="<?=$contato['id']?>" >
<div class="form-group">
    <label for="name">Nome do contato: </label>
    <input id="name" name="name" type="text" class="form-control" value="<?=$contato['nome']?>" required>
</div>

<div class="form-group">
    <label for="phone">Telefone do contato: </label>
    <input id="phone" name="phone" type="text" class="form-control" value="<?=$contato['telefone']?>" required>
</div>

<div class="form-group">
    <label for="observations">Observações: </label>
    <textarea id="observations" name="observations" rows=3 type="text" class="form-control"  ><?=$contato['observacoes']?></textarea>
</div>
<button type="submit" class="btn btn-primary">Atualizar</button>
</form>

</div>




<?php
    include_once("templates/footer.php");
?>
