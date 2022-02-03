<?php
include 'koneksi.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
  header("Location:admin.php");
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($koneksi, $sql);

  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location:admin.php");
  } else {
    echo "<script>alert('Username atau Password Anda Salah, Silihkan Coba Lagi!')</script>";
  }
}


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login</title>
</head>

<body>
  <!--Navbar-->
  <?php include "navbar.php"; ?>


  <section class="main">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-7 col-sm-12 pt-5">
          <p>UNIVERSITAS PANCASAKTI TEGAL</p>
          <h1>LOGIN</h1>
          <form action="" method="POST">
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="Masukan Username" style="border-radius: 50px;" required>
            </div>
            <div class="form-group">
              <br>
              <input type="password" name="password" class="form-control" placeholder="Masukan Password" style="border-radius: 50px;" required>
            </div>
            <br>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary px-5" style="border-radius: 50px;">Masuk</button>
            </div>
          </form>
        </div>
        <div class="col-lg-5 col-sm-12 text-center">
          <img src="../assets/header-img.png" alt="buku" class="buku">
        </div>
      </div>
    </div>
  </section>

</body>

</html>