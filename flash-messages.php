<?php
  session_start();
?>

<?php if(isset($_SESSION['success']) && !empty($_SESSION['success'])) { ?>
  <div id="success_email" class="alert alert-warning alert-dismissible fixed-alert fade in text-center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sua mensagem foi enviada com sucesso.</strong>
  </div>
<?php } ?>

<?php if(isset($_SESSION['danger']) && !empty($_SESSION['danger'])) {?>
  <div id="fail_email" class="alert alert-danger alert-dismissible fixed-alert fade in text-center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Não foi possível enviar sua mensagem.</strong>
  </div>
<?php } ?>

<?php
  // Clear old messages
  unset($_SESSION['success']);
  unset($_SESSION['danger']);
?>
