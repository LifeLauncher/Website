<?php

//Send Mail Function Using SMTP
function sendMail($subject,$message,$to){
    include_once SRV_ROOT.'models/smtp/PHPMailer.php';
    include_once SRV_ROOT.'models/smtp/Exception.php';
    include_once SRV_ROOT.'models/smtp/SMTP.php';

    $mail = new \PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';

    // $mail->SMTPAuth = true;
    // $mail->Username = 'demo@tekhdev.com';
    // $mail->Password = 'demo123@';
    // $mail->Host = 'tekhdev.com'; //Server Host
    //
    // $mail->From = 'demo@tekhdev.com';
    // $mail->FromName = 'Life Launcher 🚀';
    // $mail->Subject = $subject;
    $mail->Host = 'smtp.gmail.com:587';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@lifelauncher.io';
    $mail->Password = 'bovseq-vawkab-2joKda';
    $mail->SMTPSecure = 'tls';
    // $mail->Port = 587;

    $mail->From = 'info@lifelauncher.io';
    $mail->FromName = 'Life Launcher 🚀';
    $mail->Subject = $subject;

    //
    $mail->isHTML();
    $mail->msgHTML($message);
    $mail->addAddress($to);
    $mail->addBCC('karl@lifelauncher.io');

    $mail->send();
}
