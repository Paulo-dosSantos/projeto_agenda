<?php
    include_once("templates/header.php");
?>
  <div class="container">
    <?php
    if(isset($print_msg) && $print_msg!=''): ?>
    <p id="msg"> <?=$print_msg?> </p>
    <?php endif;?>

    <h1 id="main-title">Minha agenda</h1>
    <?php  if(count($contatos)>0):?>
        <table class="table" id="contacts-table">
            <thread>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nome</th>
                    <th scope="col">telefone</th>
                    <th scope="col"></th>
                </tr>
            </thread>



            <tbody>
                <?php  foreach($contatos as $contato):   ?>

                    <tr>
                        <td scope="col" class="col-id"> <?= $contato['id'];?>  </td>
                        <td scope="col"> <?= $contato['nome'];?>  </td>
                        <td scope="col"> <?= $contato['telefone'];?>  </td>
                        <td class="actions"> 
                        <a href="<?=$BASE_URL?>show.php?id=<?= $contato['id'];?>"> <i class="fas fa-eye check-icon"></i>    </a>
                        <a href="<?=$BASE_URL?>edit.php?id=<?= $contato['id'];?>"> <i class="far fa-edit edit-icon"></i>    </a>
                        <button type="submit" class="delete-btn"> <i class="fas fa-times delete-icon"></i> </button>
                    

                    
                    
                    </td>
                    </tr>


                    <?php endforeach;?>
            </tbody>
        </table>
    <?php else:
        ?>
        <p id="empty-list-text">Ainda não há contatos, <a href="<?=$BASE_URL?>create.php">
    clique para adicionar</a>.</p>

    <?php endif;?>

    

      
      

  </div>




<?php
    include_once("templates/footer.php");
?>


 

