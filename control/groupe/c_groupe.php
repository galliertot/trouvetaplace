<?php

    include_once('model/m_groupe.php');

    include_once('model/DbConnector.php');

    if(!isUserConnected())
        header("Location: index.php");
    
    $modelGroupe = new m_groupe(new DbConnector());

    $tabGroupe = $modelGroupe->getAllGroupe();

      
    include_once('view/page/groupe/v_groupe.php');
?>
