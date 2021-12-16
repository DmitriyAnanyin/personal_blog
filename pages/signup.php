<?php

require '../includes/db.php';

$data = $_POST;

if (isset($data['do_signup']))
{
   $errors = array();
   if (trim($data['login']) == '')
   {
      $errors[] = 'Введите логин!';
   }
   if (trim($data['email']) == '')
   {
      $errors[] = 'Введите Email!';
   }
   if (trim($data['email']) == '')
   {
      $errors[] = 'Введите пароль!';
   }
   if (trim($data['check_password']) != $data['password'])
   {
      $errors[] = 'Пароли не совпадают!';
   }
   if (R::count('users', "login = ?", array($data['login'])) > 0)
   {
      $errors[] = 'Пользователь с таким логином уже существует!';
   }
   if (R::count('users', "email = ?", array($data['email'])) > 0 )
   {
      $errors[] = 'Пользователь с таким email-адресом уже существует!';
   }

   if (empty($errors))
   {
      $user = R::dispense('users');
      $user->login = $data['login'];
      $user->email = $data['email'];
      $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
      
      R::store($user);
      $signup = 'Вы успешно зарегистрировались!';
   }
   else
   {
      $signup = array_shift($errors);
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
                     <h2 class="post__title">Регистрация</h2> 
                  </div>
                  <h5><?php echo $signup; ?></h5>
                  <form class="login__form" action="signup.php" method="POST">
                     <input name="login" value="<?php echo @$data['login'];?>" class="login__input" type="text" placeholder="Логин">
                     <input name="email" value="<?php echo @$data['email'];?>" class="login__input" type="email" placeholder="Email">
                     <input name="password" value="<?php echo @$data['password'];?>" class="login__input" type="password" placeholder="Пароль">                         
                     <input name="check_password" value="<?php echo @$data['check_password'];?>" class="login__input" type="password" placeholder="Повторите пароль">                         
                     <button name="do_signup" class="btn btn-login" style="background-color: #3137c9;" type="submit">Зарегистрироваться</button>
                  </form>
                     
                  
               </div>
            </div>
         </main>
      </div>
      
      <script src="../includes/js/app.js"></script>
   </body>
</html>