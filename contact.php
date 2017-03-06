<?php
  require_once "vendor/plasticbrain/php-flash-messages/src/FlashMessages.php";
  require_once("vendor/phpmailer/phpmailer/PHPMailerAutoload.php");

  // A session is required
  if (!session_id()) @session_start();
  $msg = new \Plasticbrain\FlashMessages\FlashMessages();

  define('GUSER', 'digitalclass.noreplay@gmail.com');
  define('GPWD', '6f119f98');

  function smtpmailer($to, $to, $from, $subject, $body) {
  	global $error;
  	$mail = new PHPMailer();
  	$mail->IsSMTP();		// Ativar SMTP
  	$mail->SMTPDebug = 0;
  	$mail->SMTPAuth = true;
  	$mail->SMTPSecure = 'ssl';
  	$mail->Host = 'smtp.gmail.com';
  	$mail->Port = 465;
  	$mail->Username = GUSER;
  	$mail->Password = GPWD;
  	$mail->SetFrom($to, $from);
  	$mail->Subject = $subject;
  	$mail->Body = $body;
  	$mail->AddAddress($to);
  	if(!$mail->Send()) {
  		$error = 'Mail error: '.$mail->ErrorInfo;
  		return false;
  	} else {
  		$error = 'Mensagem enviada!'. $_POST['email'] . '' . $_POST['references'];
  		return true;
  	}
  }

  if ($_POST) {
    $name = $_POST['name'];
    $to = $_POST['email'];
    $subject = "New Message from ". $_POST['name'] . " - " . $to;
    $message = $_POST['message'];

    $body  = "Nome: $name\n\nE-mail: $to\n\nMensagem: \n\n$message\n";

    if (smtpmailer($to, GUSER, $name, $subject, $body)) {
      // $msg->warning('Sua mensagem foi enviada com sucesso.', $_POST['references']);
    } else{
      // $msg->error('Não foi possível enviar sua mensagem.', $_POST['references']);
    }
    if (!empty($error)) echo $error;
  }
?>
