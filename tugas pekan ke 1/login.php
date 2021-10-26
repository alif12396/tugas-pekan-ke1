<?php 
session_start();
include_once('db_connect.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
    header('location:home.php');
}

if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:home.php');
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($username,$password,$remember))
    {
      header('location:home.php');
    }
}
?>
<!doctype html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css">
  <head>
        
  <body>
    <form class="form-signin" method="post" action="">
    <div class="kotak_login">
  <h1>Login Form</h1>
  
  <label for="username" class="sr-only">Username</label>
  <input type="text" id="username" class="form_login" placeholder="Username" name="username" required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" class="form_login" placeholder="Password" name="password" required>
  <div class="checkbox mb-3">
   
  </div>
  <button class="tombol_login" type="submit" name="login">LOGIN</button>
  <a href="register.php" class="tombol_login">REGISTER</a>
  
</form>
</body>
</html>