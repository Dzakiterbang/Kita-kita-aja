<?php 	
session_start();
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
      	<a href="album.php" class="nav-link">Album</a>
        <a href="foto.php" class="nav-link">Foto</a>
      </div>
       <a href="../config/aksi-logout.php" class="btn btn-outline-danger m-1">Keluar</a>
    </div>
  </div>
</nav>
<?php   
include'../config/koneksi.php';
$albumid = ['albumid'];
$data = mysqli_query($koneksi,"SELECT * FROM album WHERE albumid='$albumid'");
while($data = mysqli_fetch_array($data)){


 ?>
<div class="container">
<div class="row"> 
    <div class="col-md-4">
        <div class="card mt-2">
            <div class="card-header">Edit album</div>    
            <div class="class-body">
              <form action="../config/aksi-album.php" method="POST">
                  <label class="form-label">Nama Album</label>
                  <input type="hidden" name="albumid" class="form-control" value="<?php   echo $data['albumid']; ?>" required>
                  <input type=" text" name="namaalbum" value="<?php   echo $data['namaalbum'] ?>">
                  <label class="form-label">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" required></textarea>
                  <button type="submit" class="btn btn-primary mt-2 " name="tambah">Ubah Data</button>
               </form>
            </div>            
         </div>
    </div>
<?php   } ?>

<footer class="d-flex justify-content-center border-top mt-3
bg-light fixed-bottom">
  <p>&copy; Website | By:Dzaki</p>
</footer>
<script type="text/javascript" src="../asset/js/bootsrtrap.min.js"></script>
</body>
</html>