<?php

    include_once('model/account/m_user.php');
    include_once('model/DbConnector.php');

    if(isUserConnected())
        unsetUserConnected();

    if(!empty($_POST) && isset($_POST))
    {
        if(isset($_POST['email'])
        && isset($_POST['password']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $connectUser = new m_user(new DbConnector());
            $connect = $connectUser->connectUser($email, $password);
            if($connect)
            {
                $_SESSION['user'] = $email;
                header("Location: index.php");
            }
            else
                $messagePHPError = "E-mail ou mot de passe incorrect";
        }else
            $messagePHPError = "Veuillez remplir tous les champs";
    }

    
    include_once('view/page/account/v_connect.php');
?>
