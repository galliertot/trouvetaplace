<!doctype html>
<html>
    <head>
        
        <title>TrouveTaPlace</title>
        
        <!-- 
            META
            ///////////////////////////
        -->

        <meta charset="utf-8" />
        <meta name="keywords" content="" />
        <meta name="robots" content="" />
        <meta name="title" content="">
        <meta name="description" content="">
        <meta name="author" content="Thomas Gallier">
        <meta name="Copyright" content="Copyright TrouveTaPlace 2020. All Rights Reserved.">
        <meta name="google-site-verification" content="">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

        <!-- 
            CSS
            ///////////////////////////
        -->

        <link href="view/css/global.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">

        <!-- 
            SCRIPT
            ///////////////////////////
        -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
        <script src="view/js/notify.js"></script>


        
    </head>

    <body>
                  
        <?php if(isset($messagePHPSuccess)){
        ?><script type="text/javascript">$.notify("<?php echo $messagePHPSuccess ?>", "success")</script>
        <?php }else if(isset($messagePHPError)){
        ?><script type="text/javascript">$.notify("<?php echo $messagePHPError ?>", "error")</script>
        <?php } ?>
        
       <?php include_once('v_menu.php'); ?>


