<?php include 'stories.php'?>
            
<div class="add-post">
   <form class="add-post__form" action="/" method="POST">
      <textarea class="add-post__textarea" name="post-text" placeholder="Напишите что-нибудь"></textarea>
      <div class="add-post__form-actions">
         <label class="add-post__file" for="add-post-file">
            <input type="file" id="add-post-file">
         </label>
         <button class="add-post__send" type="submit">
            <img class="add-post__send-image" src="/media/images/send.svg" alt="Отправить">
         </button>
      </div>
   </form>
</div>

<div class="post">

   <div class="post__content">
      <p class="post__description">
         Lorem ipsum dolor sit amet, consectetur adipiscing
         elit. Elementum volutpat orci turpis urna. Et 
         vestibulum, posuere tortor lacinia sit. Sagittis
         porttitor orci auctor in at tincidunt arcu egestas.
         Fusce arcu sodales lacinia eu auctor nunc nam id. 
         Diam sit sed volutpat massa. Egestas ornare vel 
         volutpat.
      </p>
   </div>

   <div class="post__footer">
      <ul class="post__data">
         <li class="post__data-item">
            <time datetime="2020-06-21 19:20">21.06.2020</time>
         </li>
      </ul>
   </div>

</div> <!-- /post -->

<article class="post">

   <div class="post__header post__header--preview">
      <img class="post__preview" src="/media/images/post2.jpg" alt="Как писать код быстро и безболезненно?">
   </div>

   <div class="post__content">
      <h2 class="post__title"><a href="/">Как писать код быстро и безболезненно?</a></h2>
      <p class="post__description">
         Lorem ipsum dolor sit amet, consectetur adipiscing
         elit. Elementum volutpat orci turpis urna. Et 
         vestibulum, posuere tortor lacinia sit. Sagittis
         porttitor orci auctor in at tincidunt arcu egestas.
         Fusce arcu sodales lacinia eu auctor nunc nam id. 
         Diam sit sed volutpat massa. Egestas ornare vel 
         volutpat.
      </p>
   </div>

   <div class="post__footer">
      <ul class="post__data">
         <li class="post__data-item">
            <time datetime="2020-06-21 19:20">21.06.2020</time>
         </li>
         <li class="post__data-item">
            <a href="post.php">создание сайтов</a>
         </li>
      </ul>

      <a class="post__read" href="post.php">читать</a>
   </div>

</article> <!-- /post -->

<article class="post">

   <div class="post__header">
      <div class="embed">
         <iframe src="https://www.youtube.com/embed/p4zbV1MBJNs" 
         frameborder="0" allow="accelerometer; autoplay; 
         clipboard-write; encrypted-media; gyroscope; 
         picture-in-picture" allowfullscreen></iframe>
      </div>
   </div>

   <div class="post__content">
      <h2 class="post__title"><a href="post.php">Купил новый ноутбук за 150 000 руб</a></h2>
   </div>

   <div class="post__footer">
      <ul class="post__data">
         <li class="post__data-item">
            <time datetime="2020-06-21 19:20">21.06.2020</time>
         </li>
         <li class="post__data-item">
            <a href="post.php">продвижение видео</a>
         </li>
      </ul>

      <a class="post__add-comment" href="">оставить комментарий</a>
   </div>

</article> <!-- /post -->

<article class="post">

   <div class="post__header post__header--preview">
      <img class="post__preview" src="/media/images/post4.jpg" alt="Как я сходил на FrontEnd Conf 2021">
   </div>

   <div class="post__content">
      <h2 class="post__title"><a href="post.php">Как я сходил на FrontEnd Conf 2021</a></h2>
      <p class="post__description">
         Lorem ipsum dolor sit amet, consectetur adipiscing
         elit. Elementum volutpat orci turpis urna. Et 
         vestibulum, posuere tortor lacinia sit. Sagittis
         porttitor orci auctor in at tincidunt arcu egestas.
         Fusce arcu sodales lacinia eu auctor nunc nam id. 
         Diam sit sed volutpat massa. Egestas ornare vel 
         volutpat.
      </p>
   </div>

   <div class="post__footer">
      <ul class="post__data">
         <li class="post__data-item">
            <time datetime="2020-06-21 19:20">21.06.2020</time>
         </li>
         <li class="post__data-item">
            <a href="post.php">создание сайтов</a>
         </li>
      </ul>

      <a class="post__read" href="post.php">читать</a>
   </div>

</article> <!-- /post -->

<?php include 'pagination.php'?>