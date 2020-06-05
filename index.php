<?php
include_once("settings.php");
include_once("utils/fun_utils.php");

ini_set('display_errors',1); 
error_reporting(E_ALL);

if(isset($_GET['a']))
{
    if(getAction("register"))
        include_once('control/account/c_register.php');
    else if(getAction("unset"))
        include_once('control/account/c_unset.php');
    else if(getAction("student"))
        include_once('control/student/c_student.php');
    else if(getAction("groupe"))
        include_once('control/groupe/c_groupe.php');
    else
        header("Location: index.php");
}
else{
    include_once('control/c_index.php');
}

?>
