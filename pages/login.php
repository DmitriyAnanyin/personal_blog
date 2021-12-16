<?php

include '../includes/db.php';



$data = $_POST;

if (isset($data['do_login']))
{
   $errors = array();
   $user = R::findOne('users', 'login = ?', array($data['login']));

   if ($user)
   {
      if(password_verify($data['password'], $user->password))
      {
         $_SESSION['logged_user'] = $user;
      }
      else
      {
         $errors[] = 'Пароль не существует!';
      }
   }
   else
   {
      $errors[] = 'Логин не существует!';
   }

   if (empty($errors))
   {
      $login = 'Вы вошли!';   
   }
   else
   {
      $login = array_shift($errors); 
   }

}

?>

<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta charset="UTF-8">
      <title>Document</title>
      <link rel="stylesheet" type="text/css" href="../media/css/style.css">
      <link rel="stylesheet" type="text/css" href="../media\css\login.css">
   </head>
   <body>

      <div class="page">
         
         <?php include '../includes/header.php'?>

         <?php include '../includes/sidebar.php'?>
         
         <main class="main">
            <div class="container">
               <div class="login">
                  <div class="login__text">
                     <h2 class="post__title">Вход</h2> 
                  </div>
                  <h5><?php echo $login; ?></h5>
                  <form class="login__form" action="login.php" method="POST">
                     <input name="login" value="<?php echo @$data['login']?>" class="login__input" type="text" placeholder="Логин">
                     <input name="password" value="<?php echo @$data['password']?>" class="login__input" type="password" placeholder="Пароль">                         
                     <div class="login__btn">
                        <button name="do_login" class="btn btn-login" style="background-color: #3137c9;" type="submit">Войти</button>
                     </div>
                  </form>
                  
                  <div class="login__recovery">
                     <a class="login__recovery__link" href="signup.php">восстановить   регистрация</a>
                  </div>

               </div>
            </div>
         </main>
      </div>
      
      <script src="../includes/js/app.js"></script>
   </body>
</html>