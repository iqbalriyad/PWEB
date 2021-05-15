<?php
session_start();

$username = $_POST['email'];
$password = $_POST['password'];
 
if($username == $user && MD5($password) == $pass)
{
   $_SESSION['login'] = TRUE;
   if (isset($_POST['remember']))
   {
      $time = time();
      setcookie('login', $user, $time + 3600);
   }
   header('location:./welcome.php');
   exit();
} else {
   header('location:./index.php');
}
?>