<?php

session_start();
require 'config/database.php';
require 'includes/functions.php';
require 'includes/constants.php';

//Si le formulaire à été soumis
if (isset($_POST['register'])) {

    // Si tous les champs ont été remplis
    if (not_empty(['name', 'pseudo', 'email', 'password', 'password_confirm'])) {

        $errors = [];

        extract($_POST);

        if (mb_strlen($pseudo) < 3) {
            $errors[] = "Pseudo trop court! (Mimimum 3 caractères)";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Adresse email invalide!";
        }

        if (mb_strlen($password) < 6) {
            $errors[] = "Mot de passe trop court! (Mimimum 6 caractères)";
        } else {
            if ($password != $password_confirm) {
                $errors[] = "Les deux mots de passe ne concordent pas!";
            }
        }


        if (is_already_in_use('pseudo', $pseudo, 'users')) {
            $errors[] = "Pseudo déjà utilisé !";
        }

        if (is_already_in_use('email', $email, 'users')) {
            $errors[] = "Email déjà utilisé !";
        }

        if (count($errors) == 0) {
            // Email d'activation
            $to = $email;
            $subject = WEBSITE_NAME. " - ACTIVATION DE COMPTE";
            $token = sha1($pseudo.$email.$password);

            ob_start();
            require 'templates/emails/activation.tmpl.php';
            $content = ob_get_clean();

            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1'. "\r\n";

            mail($to, $subject, $content, $headers);


            // Informer utilisateur  pour qu'il verifie sa boite
            set_flash("Mail d'activation envoyé !", 'warning');

        }
    } else {
        $errors[] = "Veuillez SVP remplir tous les champs!";
    }

}
?>


<?php require('views/register.view.php'); ?>