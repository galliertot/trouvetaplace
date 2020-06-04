<?php
    include_once('view/build/v_header.php');


    if(!isUserConnected())
        include_once('control/account/c_connect.php');
    include_once('view/build/v_footer.php');
?>

