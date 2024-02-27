<?php 	
include'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['alamat'];

$sql = mysqli_query($koneksi, "INSERT user VALUES ('','$username','$password','$email','$namalengkap','$alamat')");

if ($sql) {
	echo "<script>
        alert('anda berhasil mendaftar');
        document.location.href = '../login.php';
        </script>";
}

 ?>