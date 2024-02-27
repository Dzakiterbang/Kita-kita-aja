<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
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
      </div>
       <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
    </div>
  </div>
</nav>
<div class="container py-5">
<div class="row justify-content-center">
<div class="col-md-4"> 
<div class="card-body bg-tertiary outline-primary"> 

<div class="text-center"> 
<h5>  Login </h5>
</div>
<form action="config/aksi-login.php" method="POST">
      <label class="form-label">Username </label>
      <input type=" text" name="username" class="form-control"required>
       <label class="form-label">Password </label>
      <input type="password" name="password" class="form-control"required>
      <div class="d-grid mt-2"><button class="btn btn-primary" type="submit" name="kirim">Masuk </button></div>
  </form>
  <hr>  <p> Belum punya akun? <a href="register.php">Daftar disini!</a></p>
</div>
</div>
</div> </div>
<footer class="d-flex justify-content-center border-top mt-3
bg-light fixed-bottom">
  <p>&copy; Website | By:Tasya love Dzaki</p>
</footer>
<script type="text/javascript" src="asset/js/bootsrtrap.min.js"></script>
</body>
</html>