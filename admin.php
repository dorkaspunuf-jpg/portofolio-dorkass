<?php
session_start();
if(!isset($_SESSION['login'])){ header("Location: login.php"); exit; }
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Tambah Karya - Dorkas</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container" style="max-width:520px;padding:40px 20px;">
  <h2>+ Tambah Karya</h2><br>
  <form action="simpan.php" method="POST" enctype="multipart/form-data" class="contact-form">
    <label>Judul<input type="text" name="judul" placeholder="Contoh: Edit Video Reels Instagram" required></label>
    <label>Kategori
      <select name="kategori" required>
        <option value="">-- Pilih Kategori --</option>
        <option value="Desain Aplikasi">Desain Aplikasi</option>
        <option value="Desain Web">Desain Web</option>
        <option value="Pembuatan Web">Pembuatan Web</option>
        <option value="Pembuatan Web Portofolio">Pembuatan Web Portofolio</option>
        <option value="Bongkar Komputer">Bongkar Komputer</option>
        <option value="Bongkar Laptop">Bongkar Laptop</option>
        <option value="Maintenance Komputer">Maintenance Komputer</option>
        <option value="Service Komputer">Service Komputer</option>
        <option value="Service Laptop">Service Laptop</option>
        <option value="Perakitan Komputer">Perakitan Komputer</option>
        <option value="Install Ulang Windows">Install Ulang Windows</option>
        <option value="Upgrade RAM / SSD">Upgrade RAM / SSD</option>
        <option value="Desain Logo">Desain Logo</option>
        <option value="Desain Poster">Desain Poster</option>
        <option value="Desain Banner">Desain Banner</option>
        <option value="Desain Undangan">Desain Undangan</option>
        <option value="UI / UX Design">UI / UX Design</option>
        <option value="Jaringan / WiFi">Jaringan / WiFi</option>
        <option value="Pembuatan CV">Pembuatan CV</option>
        <option value="Pembuatan CV ATS">Pembuatan CV ATS</option>
        <option value="Edit Video">Edit Video</option>
        <option value="Edit Video Reels / TikTok">Edit Video Reels / TikTok</option>
        <option value="Edit Foto">Edit Foto</option>
        <option value="Jasa Ketik">Jasa Ketik</option>
        <option value="Fotografi">Fotografi</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </label>
    <label>Deskripsi<textarea name="deskripsi" rows="4" placeholder="Ceritakan pekerjaanmu..." required></textarea></label>
    <label>Foto<input type="file" name="foto" accept="image/*"></label>
    <button type="submit" class="btn-primary full">Simpan</button>
    <a href="index.php#karya">← Kembali</a>
  </form>
</div>
</body></html>