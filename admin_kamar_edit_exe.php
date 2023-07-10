<?php
include 'koneksi.php';


if(ISSET($_POST['submit'])){
    $id = $_POST['id'];
    $tipe = $_POST['tipe'];
    $harga = $_POST['radit'];

    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $foto_name = addslashes($_FILES['foto']['name']);
    $foto_size = getimagesize($_FILES['foto']['tmp_name']);
    move_uploaded_file($_FILES['foto']['tmp_name'],"images/" . $_FILES['foto']['name']);
    $conn->query("UPDATE kamar SET `foto`='$foto_name',`tipe`='$tipe',`harga`='$harga' WHERE id='$id'");
    header("location:admin_kamar.php");
}