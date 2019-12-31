<?php
    session_start();
    // New session - french as default
    if(!isset($_SESSION['lang'])) {
       $_SESSION['lang']= 'fr';
    }
?>

<!--

   Luis Costa
   
   23/12/2019
   
   index.php

-->

<!DOCTYPE html>

<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Luis Costa Portfolio</title>
        
        <link rel="stylesheet" type="text/css" href="MyCSS/index.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>

   <body>
       <!-- nav bar -->
       <?php include('MyPHP/navbar.php') ?>
      
       <!-- content -->
       <?php include('MyPHP/content.php') ?>

       <!-- ribbon -->
       <?php include('MyPHP/ribbon.php') ?>
      
       <!-- footer -->
       <?php include('MyPHP/footer.php') ?>
   </body>
   
   <script>displayContent("HOME")</script>
</html>