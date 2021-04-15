<?php

function sendMail($mail)
{
    if (!empty($mail)) {

        //verification GOOGLE
        $headers = 'From: nestandrew14@gmail.com' . "\r\n" . 
        'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html; charset = utf-8';

        $to      = 'nestandrew14@gmail.com';
        $firstName = $mail["nom"];
        $message = $mail["message"];
 
        mail($to, $firstName, $message, $headers);
    
        }
    else {
        echo 'Remplissez le formulaire SVP';
        }
}

