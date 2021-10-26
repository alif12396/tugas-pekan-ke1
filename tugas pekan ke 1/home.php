<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css">
  <head>
    <main role="main" class="container">

  <div class="kotak_login">
    <h1>Data Diri Anda </h1>
    <p class="lead">1. Nama = <?php echo $_SESSION['nama']; ?></p>
    <p class="lead">2. Kelas = <?php echo $_SESSION['kelas']; ?></p>
    <p class="lead">3. NIS = <?php echo $_SESSION['nis']; ?></p>
    <p class="lead">4. NISN = <?php echo $_SESSION['nisn']; ?></p>
    <p class="lead">5. Jenis Kelamin = <?php echo $_SESSION['jeniskelamin']; ?></p>
    <p class="lead">6. Tanggal Lahir = <?php echo $_SESSION['tanggallahir']; ?></p>
    <p class="lead">7. Alamat = <?php echo $_SESSION['alamat']; ?></p>

    <a class="tombol_login" href="logout.php?id=<?php echo $d['id']; ?>">LOGOUT</a>
    <a href="edit.php?username=<?php echo $row['username'];?>" class="btn btn-success" role="button">Update</a>


    


  </div>


</html>