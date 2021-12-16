<?php

require "libs/rb-mysql.php";
R::setup('mysql:host=127.0.0.1;dbname=personal_blog', 'mysql', 'mysql');

if (!R::testConnection())
{
   exit('Not Found!');
}

session_start();
?>