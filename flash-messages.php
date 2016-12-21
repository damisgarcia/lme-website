<?php
  require "vendor/plasticbrain/php-flash-messages/src/FlashMessages.php";
  // A session is required
  if (!session_id()) @session_start();
  
  $msg = new \Plasticbrain\FlashMessages\FlashMessages();
?>

<?php if ($msg->hasMessages($msg::WARNING)) { ?>
  <div id="success_email" class="alert alert-warning alert-dismissible fixed-alert fade in text-center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sua mensagem foi enviada com sucesso.</strong>
  </div>
<? } ?>

<?php if ($msg->hasMessages($msg::ERROR)) { ?>
  <div id="fail_email" class="alert alert-danger alert-dismissible fixed-alert fade in text-center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Não foi possível enviar sua mensagem.</strong>
  </div>
<? } ?>
