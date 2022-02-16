<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';
function send(){
//$sql="insert into evenement(nom_event,lieu_event,date_debut,date_fin,nb_par) values (:nom_event,:lieu_event,:date_debut,:date_fin,nb_par)";
$db = config::getConnexion();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    try{
        $mail->isSMTP();
        $mail->host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username= 'rajianacib@gmail.com';
        $mail->Password = 'rajianacib@gmail.com';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setForm('rajianacib@gmail.com');
        $mail->addAdress('rajianacib@gmail.com');

        $mail->isHTML = (true);
        $mail->Subject = 'Message Recieved(Contact Page)';
        $mail->Body = "<h3><br> Name : $name <br>From: $email <br> Subject: $subject <br>  Messagge :$messsage </h3>";

        $mail->send();
        $alert='<div class="alert-success">
        <span>Message Bien Envoyer! Merci Pour Votre Reactivités :) </span>
        </div>';

    }catch(Exception $e){
    $alert = '<div calss = "alert- error">
    <span>'.$e->getMessage().'</span>
    </div>';
   }
}
}
?>
