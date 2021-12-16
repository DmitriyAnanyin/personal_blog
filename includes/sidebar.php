<aside class="sidebar">
   <div class="sidebar__header">
      <img class="sidebar__header_image" src="/media/images/<?php echo $user->sidebar_header_image?>" alt="">
   </div>

   <div class="sidebar__content">
      <div class="profile">
         <img class="profile__avatar" src="/media/images/<?php echo $user->avatar_image;?>" alt="">
         <div class="profile__name"><?php echo $user->name;?></div>
         <div class="profile__prof"><?php echo $user->prof;?></div>
         
         <ul class="social">
            <li class="social__item">
               <a class="social__link" href="<?php echo $user->ref_instagram?>" target="_blank">
                  <img src="/media/images/instagram.svg" alt="Дмитрий Ананьин Instagram">
               </a>
            </li>
            
            <li class="social__item">
               <a class="social__link" href="<?php echo $user->ref_vk?>" target="_blank">
                  <img src="/media/images/vk.svg" alt="Дмитрий Ананьин VK">
               </a>
            </li>

            <li class="social__item">
               <a class="social__link" href="<?php echo $user->ref_pinterest?>" target="_blank">
                  <img src="/media/images/pinterest.svg" alt="Дмитрий Ананьин Pinterest">
               </a>
            </li>
         </ul>

         <div class="profile__text">
            <p>
               <?php echo $user->about_me?>
            </p>
         </div>
      </div>
   </div>
   <div class="sidebar__footer">
      <a class="btn btn--red " href="works.php">Мои работы</a>
      <button class="btn btn--blue" type="button">Написать мне</button>
   </div>
</aside>