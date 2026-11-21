<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM karya WHERE id='$id'"));
if ($data['foto'] && file_exists("uploads/".$data['foto'])) unlink("uploads/".$data['foto']);
mysqli_query($conn, "DELETE FROM karya WHERE id='$id'");
header("Location: index.php");
?>