<?php

    include_once('model/m_user.php');
    include_once('model/DbConnector.php');

    $connectedUser = new m_user(new DbConnector());

    // GET ACTION

    function getAction($action)
    {
        if($_GET["a"] == $action)
            return true;
        else
            return false;
    }

    function getUserConnected()
    {
        if(isset($_SESSION['user']) && !empty($_SESSION['user']))
            return $connectedUser->getUser($_SESSION['user']);
        else
            return null;
    }

    function isUserConnected()
    {
        if(isset($_SESSION['user']) && !empty($_SESSION['user']))
            return true;
        else
            return false;
    }

    function unsetUserConnected()
    {
        if(isset($_SESSION['user']) && !empty($_SESSION['user']))
            unset($_SESSION['user']);
    }

    

