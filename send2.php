<?php
//Verification GOOGLE
$headers = 'From: nestandrew14@gmail.com' . "\r\n" . 
'MIME-Version: 1.0' . "\r\n" .
'Content-type: text/html; charset = utf-8';

//Fonction Mail
$sendMail=mail(
    'nestandrew14@gmail.com',
    'Andrey NESTEROV',
    'This is my second message!',
    $headers
);
//Verification d'envoie
var_dump($sendMail);
