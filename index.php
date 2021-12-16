<?php

include 'includes/db.php';

$user = R::load('user', 1);


?>

<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta charset="UTF-8">
      <title>Document</title>
      <!-- <link rel="stylesheet" href="/media/css/vendor/reset.css"> -->
      <link rel="stylesheet" type="text/css" href="media/css/style.css">
   </head>
   <body>

      <div class="page">
         
         <?php include 'includes/header.php'?>

         <?php include 'includes/sidebar.php'?>
         
         <main class="main">
            <div class="container">
            
               <?php include 'includes/body.php'?>

            </div>
         </main>
      </div>
      
      <script src="/includes/js/app.js"></script>
   </body>
</html>