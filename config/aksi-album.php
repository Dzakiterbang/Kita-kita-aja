<?php 
session_start();
include 'koneksi.php';

if (isset($_POST['tambah'])){
	$namaalbum = $_POST['namaalbum'];
	$deskripsi = $_POST['deskripsi'];
	$tanggal = date('Y-m-d');
	$userid =$_SESSION['userid'];

	$sql = mysqli_query($koneksi, "INSERT INTO album VALUES('','$namaalbum','$deskripsi','$tanggal','$userid')");
	echo "<script>
        alert('Album berhasil ditambahkan!');
        document.location.href = '../admin/album.php';
        </script>";
}

if (isset($_POST['edit'])){
	$albumid = $_POST['albmid'];
	$namaalbum = $_POST['namaalbum'];
	$deskripsi = $_POST['deskripsi'];
	$tanggal = date('Y-m-d');
	$userid =$_SESSION['userid'];

	$sql = mysqli_query($koneksi, "UPDATE album SET namaalbum='$namalbum', deskripsi='$deskripsi', tanggalbuat='$tanggal' WHERE albumid='$albumid' ");
	echo "<script>
        alert('Album berhasil diperbarui!');
        document.location.href = '../admin/album.php';
        </script>";
}

 ?>