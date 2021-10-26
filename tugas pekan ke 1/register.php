<?php 
include_once('db_connect.php');
$database = new database();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nis = $_POST['nis'];
    $nisn = $_POST['nisn'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tanggallahir = $_POST['tanggallahir'];
    $alamat = $_POST['alamat'];
    if($database->register($username,$password,$nama,$kelas,$nis,$nisn,$jeniskelamin,$tanggallahir,$alamat))
    {
      header('location:login.php');
    }
}

?>
<!doctype html>
<html lang="en" class="h-100">
<link rel="stylesheet" type="text/css" href="style.css">
  <head>
  <body> 
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Register Form</h1>
    <h1 class="lead">Masukkan Data Diri Anda Dengan Benar</h1>
    <form method="post" action="">
    <div class="kotak_login">
    <label for="username" class="form_login">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form_login" id="username" name="username" placeholder="Username">
      
        <label for="nama" class="form_login">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form_login" id="nama" name="nama" placeholder="Nama">

      <label for="password" class="form_login">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form_login" id="password" name="password" placeholder="Password">
   
      <label for="kelas" class="form_login">Kelas</label>
    <div class="col-sm-10">
      <input type="text" class="form_login" id="kelas" name="kelas" placeholder="Kelas">

    <label for="nis" class="form_login">NIS</label>
    <div class="col-sm-10">
      <input type="text" class="form_login" id="nis" name="nis" placeholder="NIS">

    <label for="nisn" class="form_login">NISN</label>
    <div class="col-sm-10">
      <input type="text" class="form_login" id="nisn" name="nisn" placeholder="NISN">

    <label for="jeniskelamin" class="form_login">Jenis Kelamin</label>
    <div class="col-sm-10">
      <input type="text" class="form_login" id="jeniskelamin" name="jeniskelamin" placeholder="Jenis Kelamin">

    <label for="tanggallahir" class="form_login">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form_login" id="tanggallahir" name="tanggallahir" placeholder="00/00/0000">

    <label for="alamat" class="form_login">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form_login" id="alamat" name="alamat" placeholder="Alamat">

      <button type="submit" class="tombol_login" name="register">Register</button>
    </div>

</form>
  </div>
</main>
  </div>
</footer>
</body>
</html>