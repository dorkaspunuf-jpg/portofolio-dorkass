<?php
include "koneksi.php";
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$namaFoto = "";
if (!empty($_FILES['foto']['name'])) {
  if (!file_exists("uploads")) mkdir("uploads");
  $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
  $namaFoto = time() . "_" . rand(100,999) . "." . $ext;
  move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/" . $namaFoto);
}
mysqli_query($conn, "INSERT INTO karya (judul, kategori, deskripsi, foto) VALUES ('$judul','$kategori','$deskripsi','$namaFoto')");
header("Location: index.php");
?>