<?php
session_start();
if(!isset($_SESSION['login'])){ header("Location: login.php"); exit; }
include 'koneksi.php';
$id = $_GET['id'];
$q = mysqli_query($conn, "SELECT * FROM karya WHERE id='$id'");
$data = mysqli_fetch_assoc($q);
$kategori_list = ["Desain Aplikasi","Desain Web","Pembuatan Web","Pembuatan Web Portofolio","Bongkar Komputer","Bongkar Laptop","Maintenance Komputer","Service Komputer","Service Laptop","Perakitan Komputer","Install Ulang Windows","Upgrade RAM / SSD","Desain Logo","Desain Poster","Desain Banner","Desain Undangan","UI / UX Design","Jaringan / WiFi","Pembuatan CV","Pembuatan CV ATS","Edit Video","Edit Video Reels / TikTok","Edit Foto","Jasa Ketik","Fotografi","Lainnya"];
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Edit Karya - Dorkas</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container" style="max-width:520px;padding:40px 20px;">
  <h2>✏️ Edit Karya</h2><br>
  <form action="update.php" method="POST" enctype="multipart/form-data" class="contact-form">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <label>Judul<input type="text" name="judul" value="<?php echo $data['judul']; ?>" required></label>
    <label>Kategori
      <select name="kategori" required>
        <?php foreach($kategori_list as $k){ ?>
          <option value="<?php echo $k; ?>" <?php if($data['kategori']==$k) echo 'selected'; ?>><?php echo $k; ?></option>
        <?php } ?>
      </select>
    </label>
    <label>Deskripsi<textarea name="deskripsi" rows="4" required><?php echo $data['deskripsi']; ?></textarea></label>
    <label>Ganti Foto (kosongkan kalau tidak ganti)<input type="file" name="foto" accept="image/*"></label>
    <button type="submit" class="btn-primary full">Update</button>
    <a href="index.php#karya">← Kembali</a>
  </form>
</div>
</body></html>