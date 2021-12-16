<?php

require 'includes/db.php';

?>

<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta charset="UTF-8">
      <title>Document</title>
      <link rel="stylesheet" type="text/css" href="/media/css/style.css">
      <link rel="stylesheet" type="text/css" href="/media/css/login.css">
   </head>
   <body>

      <div class="page">
         
         <?php include 'includes/header.php'?>

         <?php include 'includes/sidebar.php'?>
         
         <main class="main">
            <div class="profile__page">
               <h1 class="profile__title">Профиль</h1>
               <div class="profile__info">
                  <form class="profile__form" action="/" method="post">
                  <input type="text" class="login__input">
                  <input type="text" class="login__input">
                  <input type="text" class="login__input">
                  <input type="text" class="login__input">
                  <button class="btn btn--blue btn--br5">Сохранить</button>
                  </form>
               </div>
               <div class="profile__avatar profile__avatar--nbr">
                  <img src="#" alt="Ваш аватар">
                  <a href="#">Выбрать аватар</a>
               </div>
            </div>
         </main>
      </div>
      
      <script src="includes/js/app.js"></script>
   </body>
</html>