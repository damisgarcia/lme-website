<?php
  require_once("vendor/phpmailer/phpmailer/PHPMailerAutoload.php");

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

    $body  = "Nome: $name\n\nE-mail: $to\n\nMensagem: $message\n";

    if (smtpmailer(GUSER, $to, $name, $subject, $body)) {
   	  Header("location: ". $_POST['references']);
    }
    if (!empty($error)) echo $error;
  }
?>
