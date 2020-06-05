<?php

    include_once('model/m_user.php');
    include_once('model/DbConnector.php');

    if(isUserConnected())
        unsetUserConnected();
    header("Location: index.php");

?>