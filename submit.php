<?php
  // gestire le sessioni $_SESSION
  session_start();
  // trick per evitare errore doppio redirect
  ob_start();

  // controllo che arrivino i dati
  print_r($_REQUEST);

  // 1. copiare phmailer 5.x legacy nella cartella libs/phpmailer
  // 2. includere il sistema di autoload di phpmailer
  //require 'libs/PHPMailer/PHPMailerAutoload.php';
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'libs/PHPMailer/src/Exception.php';
  require 'libs/PHPMailer/src/PHPMailer.php';
  require 'libs/PHPMailer/src/SMTP.php';

  // inizializzare la libreria
  $mail = new PHPMailer(true);

  // attivare il debug verbose output
  $mail->SMTPDebug = 3;
  // disattivare il debug
  // $mail->SMTPDebug= 0;

  /* ****************************************************************** */
  /* ** IMPOSTAZIONI DI BASE                                         ** */
  /* ****************************************************************** */

  // impostare l'uso di SMTP
  $mail->isSMTP();
  // quale/i sono i server SMTP da usare
  // $mail->Host= 'smtp.cbsolt.net, smtp.gmail.com';
  $mail->Host= 'smtp.gmail.com';
  // Attivo l'autentificazione
  $mail->SMTPAuth= true;
  // impostare i parametri di login al server SMTP
  $mail->Username= 'testesamebootstrap@gmail.com';      // CAMBIARE
  $mail->Password= 'pylfunivbwzbijli';                                   // CAMBIARE

  /* Enable TLS o SSL encryption
    TLS port 587
    SSL port 465
    no encryption port 25
  */
  $mail->SMTPSecure = 'ssl';
  // TCP port to connect to
  $mail->Port = 465;

  /* ****************************************************************** */
  /* ** IMPOSTAZIONI DELLA MAIL DA INVIARE                           ** */
  /* ****************************************************************** */
  $mittenteEmail= 'testesamebootstrap@gmail.com';       // CAMBIARE
  $mittenteName= 'Alessio Albi';
  $requesterEmail= $_REQUEST['email'];

  // impostare il mittente
  // $mail->setFrom(email, [name])
  $mail->setFrom($mittenteEmail, $mittenteName);
  // inserire un recipient o destinatario
  // $mail->addAddress(email, [name])
  $mail->addAddress($requesterEmail);

  // impostare il formato della mail in HTML
  $mail->isHTML(true);

  // dati effettivi della mail
  // soggetto della mail
  // $mail->Subject= soggetto della mail
  $mail->Subject= $mittenteName.' - Richiesta informazioni da '.$requesterName;
  // corpo della mail in versione HTML
  // $mail->Body= 'testo in HTML della mail'
  $emailBody= '<p>Thanks for contacting us</p>';
  $emailBody.= '<p>Content of the request:<br>';
  $emailBody.= $_REQUEST['msg'];
  $emailBody.= '</p><br>';
  $emailBody.= '<strong> '.$mittenteName.'</strong>';
  $mail->Body= $emailBody;

  // corpo della mail in versione puro testo
  // $mail->AltBody= 'solo testo senza tag HTML'
  $emailTextBody= $mittenteName.' - Richiesta informazioni \n';
  $emailTextBody.= 'Thanks for contacting us ...\n';
  $emailTextBody.= '\nContent of the reques\n\n';
  $emailTextBody.= $_REQUEST['msg'];
  $emailTextBody.= 'Lo staff di '.$mittenteName;
  $mail->AltBody= $emailTextBody;

  try {
    $mail->send();
      // invio OK
      // echo 'Messaggio inviato correttamente';
    $page= 'success.php';
    $_SESSION['SendStatus']= 'Message sent correctly';
    $_SESSION['SendError']= '';
  } catch (Exception $e) {
    $page= 'fail.php';
    $_SESSION['SendStatus']= 'Message not sent';
    $_SESSION['SendError']= 'Mailer Error: '.$mail->ErrorInfo;
  } finally {
    // redirect alla pagina specificata
    header('Location: '.$page);
  }
?>
