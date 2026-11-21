<?php
include "koneksi.php";
$id = $_POST['id'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
if (!empty($_FILES['foto']['name'])) {
  $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
  $namaFoto = time() . "_" . rand(100,999) . "." . $ext;
  move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/" . $namaFoto);
  mysqli_query($conn, "UPDATE karya SET judul='$judul', kategori='$kategori', deskripsi='$deskripsi', foto='$namaFoto' WHERE id='$id'");
} else {
  mysqli_query($conn, "UPDATE karya SET judul='$judul', kategori='$kategori', deskripsi='$deskripsi' WHERE id='$id'");
}
header("Location: index.php");
?>