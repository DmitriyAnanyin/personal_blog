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
      <link rel="stylesheet" type="text/css" href="./media/css/style.css">
   </head>
   <body>

      <div class="page">
         
         <?php include 'includes/header.php'?>

         <?php include 'includes/sidebar.php'?>
         
         <main class="main">
            <div class="container">

               <h1 class="page__title">Мои работы</h1>

               <div class="work">

                  <div class="work__preview">
                     <img class="work__preview--img" src="media/images/work1.jpg" alt="">
                  </div>
                  <div class="work__content">
                     <h2 class="work__title">
                        <a href="#" target="blank">altermono.com</a>
                     </h2>
                     <div class="work__description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum volutpat orci turpis urna. Et vestibulum, posuere tortor lacinia sit. Sagittis porttitor orci auctor in at tincidunt arcu egestas. Fusce arcu sodales lacinia eu auctor nunc nam id. Diam sit sed volutpat massa. Egestas ornare vel volutpat.</p>
                     </div>
                     <ul class="tags">
                        <li class="tags__item">дизайн</li>
                        <li class="tags__item">создание сайта</li>
                        <li class="tags__item">SMM</li>
                     </ul>
                     <a class="btn btn--blue btn--rounded btn--sm" href="#" target="blank">Перейти на сайт</a>
                  </div>
               
               </div>

            </div>
         </main>
      </div>
      
      <script src="/includes/js/app.js"></script>
   </body>
</html>