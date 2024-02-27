<?php 	
session_start();
$user = $_SESSION['userid'];
include'../config/koneksi.php';
if ($_SESSION['status'] != 'login'){
	echo "<script>
        alert('Anda belum login!');
        document.location.href = '../index.php';
        </script>";
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />
</head>
<body>
  

<nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        <a href="home.php" class="nav-link">Home</a>
      	<a href="album.php" class="nav-link">Album</a>
        <a href="foto.php" class="nav-link">Foto</a>
      </div>
       <a href="../config/aksi-logout.php" class="btn btn-outline-danger m-1">Keluar</a>
    </div>
  </div>
</nav>

<footer class="d-flex justify-content-center border-top mt-3
bg-light fixed-bottom">
  <p>&copy; Website | By: Dzaki</p>
</footer>
<script type="text/javascript" src="../asset/js/bootsrtrap.min.js"></script>
</body>
</html>