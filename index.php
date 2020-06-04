<?php
include_once("settings.php");
include_once("utils/fun_utils.php");

ini_set('display_errors',1); 
error_reporting(E_ALL);

if(isset($_GET['a']))
{
    if(getAction("register"))
        include_once('control/account/c_register.php');
    if(getAction("unset"))
        include_once('control/account/c_unset.php');
    else
        header("Location: index.php");
}
else{
    include_once('control/c_index.php');
}

?>
