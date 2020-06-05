<?php

    include_once('model/m_user.php');
    include_once('model/DbConnector.php');

    if(isUserConnected())
        unsetUserConnected();
    
        if(!empty($_POST) && isset($_POST))
    {
        if(isset($_POST['prenom'])
        && isset($_POST['nom'])
        && isset($_POST['email'])
        && isset($_POST['password'])
        && isset($_POST['repassword'])
        && isset($_POST['role']))
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            $role = $_POST['role'];

            $pattern_email = "#[a-zA-Z0-9\.]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,6}#";
            if(preg_match($pattern_email, $email))
            {
                $registerUser = new m_user(new DbConnector());
                if($password == $repassword) {
                    if($registerUser->newUser($nom, $prenom, $email, $password, $role))
                        $messagePHPSuccess = "Enregistrement réussi";
                    else
                        $messagePHPError = "Erreur inconnue lors de l'enregistrement";
                }else
                    $messagePHPError = "Les mots de passes de sont pas identiques";
            }else
                $messagePHPError = "E-mail invalide";
        }else
            $messagePHPError = "Veuillez remplir tous les champs";
    }
    include_once('view/page/account/v_register.php');
?>
