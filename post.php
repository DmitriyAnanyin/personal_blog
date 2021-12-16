<?php

include 'includes/db.php';

$user = R::load('user', 4);
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
            
               

            <article class="post">
               
               <div class="post__actions">
                  <a class="post__actions--link" href="#">вернуться назад</a>
                  <a class="post__actions--link" href="#">поделиться<img class="post__actions--icon" src="media\images\share.svg" alt="поделиться">
                  </a>
               </div>
               
               <div class="post__header">
                  <h1 class="post__title post__title--mb0">Как я сходил на FrontEnd Conf 2021</h1>
                  <ul class="post__data">
                     <li class="post__data-item">
                        <time datetime="2020-06-21 19:20">21.06.2020</time>
                     </li>
                     <li class="post__data-item">
                        <a href="#">создание сайтов</a>
                     </li>
                  </ul>
               </div>

               <div class="post__content">
                  <div class="post__text">
                     <h2>Title h2</h2>
                     <p>
                        Lorem <a href="#">ipsum dolor sit amet,</a> consectetur adipiscing
                        elit. Elementum volutpat orci turpis urna. Et 
                        vestibulum, posuere tortor lacinia sit. Sagittis
                        porttitor orci auctor in at tincidunt arcu egestas.
                        Fusce arcu sodales lacinia eu auctor nunc nam id. 
                        Diam sit sed volutpat massa. Egestas ornare vel 
                        volutpat.
                     </p>
                     <h3>Title h3</h3>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Elementum volutpat orci turpis urna. Et 
                        vestibulum, posuere tortor lacinia sit. Sagittis
                        porttitor orci auctor in at tincidunt arcu egestas.
                        Fusce arcu sodales lacinia eu auctor nunc nam id. 
                        Diam sit sed volutpat massa. Egestas ornare vel 
                        volutpat.
                     </p>
                     <h4>Title h4</h4>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Elementum volutpat orci turpis urna. Et 
                        vestibulum, posuere tortor lacinia sit. Sagittis
                        porttitor orci auctor in at tincidunt arcu egestas.
                        Fusce arcu sodales lacinia eu auctor nunc nam id. 
                        Diam sit sed volutpat massa. Egestas ornare vel 
                        volutpat.
                     </p>
                     <p><img src="media\images\image.jpg" alt=""></p>

                     <ul>
                        <li>item</li>
                        <li>item</li>
                        <li>item</li>
                        <li>item</li>
                     </ul>

                     <ol>
                        <li>item</li>
                        <li>item</li>
                        <li>item</li>
                        <li>item</li>
                     </ol>

                     <table>
                        <tr>
                           <td>1</td>
                           <td>2</td>
                           <td>3</td>
                           <td>4</td>
                        </tr>
                     </table>

                     <p>
                        <span class="fr-video">
                           <iframe src="https://www.youtube.com/embed/p4zbV1MBJNs" 
                           frameborder="0" allow="accelerometer; autoplay; 
                           clipboard-write; encrypted-media; gyroscope; 
                           picture-in-picture" allowfullscreen></iframe>
                        </span>
                     </p>

                  </div>   

                  <div class="related">
                     <h3 class="post__subtitle">Интересно почитать</h3>
                     
                     <ul class="related__list">
                        <li class="related__list-item">
                           <h4 class="related__list-title">
                              <a href="#">Как я сходил на FrontEnd Conf 2021 Как я сходил на FrontEnd Conf 2021</a>
                           </h4>
                           <time class="related__list-date" datetime="2020-06-21 19:21">21.06.2020</time>
                        </li>
                        <li class="related__list-item">
                           <h4 class="related__list-title">
                              <a href="#">Как я сходил на FrontEnd Conf 2021</a>
                           </h4>
                           <time class="related__list-date" datetime="2020-06-21 19:21">21.06.2020</time>
                        </li>
                        <li class="related__list-item">
                           <h4 class="related__list-title">
                              <a href="#">Как я сходил на FrontEnd Conf 2021</a>
                           </h4>
                           <time class="related__list-date" datetime="2020-06-21 19:21">21.06.2020</time>
                        </li>
                        <li class="related__list-item">
                           <h4 class="related__list-title">
                              <a href="#">Как я сходил на FrontEnd Conf 2021</a>
                           </h4>
                           <time class="related__list-date" datetime="2020-06-21 19:21">21.06.2020</time>
                        </li>
                     </ul>
                  </div>

                  <h3 class="post__subtitle">Обсуждение</h3>

                  <form class="form" action="/" method="POST">
                     <div class="form__group">
                        <textarea class="form__control form__control--textarea" name="comment-text" placeholder="Текст комментария"></textarea>
                        <span class="form__line"></span>
                        <button class="btn btn--blue btn--rounded btn--sm" type="submit">Отправить</button>
                     </div>
                  </form>

                  <ul class="comments">
                     <li class="comments__item">
                        <div class="comments__header">
                           <img class="comments__avatar" src="http://placehold.it/30" alt="">

                           <div class="comments__author">
                              <div class="comments__name">Дмитрий Валак</div>
                              <time class="comments__pubdate" datetime="2020-12-21 19:21">1 неделю назад</time>
                           </div>
                        </div>

                        <div class="comments__text">
                           Et vestibulum, posuere tortor lacinia sit. Sagittis porttitor orci auctor in at tincidunt arcu egestas. Fusce arcu sodales lacinia eu auctor nunc nam id. Diam sit sed volutpat massa. Egestas ornare vel volutpat.
                        </div>
                        <button class="comments__reply" type="submit">ответить</button>
                        <li>
                           <ul class="comments subcomments">
                              <li class="comments__item">
                                 <div class="comments__header">
                                    <img class="comments__avatar" src="http://placehold.it/30" alt="">
                                    
                                    <div class="comments__author">
                                       <div class="comments__name">Дмитрий Валак</div>
                                       <time class="comments__pubdate" datetime="2020-12-21 19:21">1 неделю назад</time>
                                    </div>
                                 </div>

                                 <div class="comments__text">
                                    Et vestibulum, posuere tortor lacinia sit. Sagittis porttitor orci auctor in at tincidunt arcu egestas. Fusce arcu sodales lacinia eu auctor nunc nam id. Diam sit sed volutpat massa. Egestas ornare vel volutpat.
                                 </div>
                                 <button class="comments__reply" type="submit">ответить</button>
                                 <ul class="comments subcomments">
                                    <li class="comments__item">
                                       <div class="comments__header">
                                          <img class="comments__avatar" src="http://placehold.it/30" alt="">
                                          
                                          <div class="comments__author">
                                             <div class="comments__name">Дмитрий Валак</div>
                                             <time class="comments__pubdate" datetime="2020-12-21 19:21">1 неделю назад</time>
                                          </div>
                                       </div>

                                       <div class="comments__text">
                                          Et vestibulum, posuere tortor lacinia sit. Sagittis porttitor orci auctor in at tincidunt arcu egestas. Fusce arcu sodales lacinia eu auctor nunc nam id. Diam sit sed volutpat massa. Egestas ornare vel volutpat.
                                       </div>
                                       <button class="comments__reply" type="submit">ответить</button>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                     </li>
                  </ul>

               </div>

               </article> <!-- /post -->

            </div>
         </main>
      </div>
      
      <script src="/includes/js/app.js"></script>
   </body>
</html>