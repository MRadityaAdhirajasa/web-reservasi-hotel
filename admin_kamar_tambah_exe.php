<?php
include 'koneksi.php';

	if(ISSET($_POST['submit'])){
		$tipe = $_POST['tipe'];
		$harga = $_POST['harga'];
		$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
		$foto_name = addslashes($_FILES['foto']['name']);
		$foto_size = getimagesize($_FILES['foto']['tmp_name']);
		move_uploaded_file($_FILES['foto']['tmp_name'],"images/" . $_FILES['foto']['name']);
		$conn->query("INSERT INTO kamar (foto, tipe, harga) VALUES('$foto_name', '$tipe', '$harga')");
		header("location:admin_kamar.php");
	}
?>