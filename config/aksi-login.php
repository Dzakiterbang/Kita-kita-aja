<?php 	
session_start();
include 'koneksi.php';

$username =  $_POST['username'];
$password = md5($_POST['password']);

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

$result = mysqli_num_rows($sql);

if ($result > 0) {
    $data = mysqli_fetch_array($sql);


	$_SESSION['username'] = $data['username'];
    $_SESSION['userid'] = $data['userid'];
	$_SESSION['status'] = 'login';
	echo "<script>
        alert('Berhasil login!');
        document.location.href = '../admin/index.php';
        </script>";
}else{

    echo "<script>
        alert('Password atau Username salah!');
        document.location.href = '../index.php';
        </script>";
}


 ?>