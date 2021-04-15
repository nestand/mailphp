<?php
function sendMail($mail)
{
    if (!empty($mail)) {
        $to      = 'nestandrew14@gmail.com';
        $firstName = $mail["prenom"];
        $lastName = $mail["nom"];
 
        mail($to, $firstName, $lastName, $additional_params=[], $additional_params="");
    
        }
    else {
        echo 'Remplissez le formulaire SVP;
    }
}
