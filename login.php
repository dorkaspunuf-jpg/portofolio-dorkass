<?php
session_start();
if(isset($_SESSION['login'])){ header("Location: admin.php"); exit; }
$pesan = "";
if($_SERVER['REQUEST_METHOD']=="POST"){
  $user = $_POST['username'];
  $pass = $_POST['password'];
  // GANTI USERNAME & PASSWORD DI SINI
  if($user=="dorkas" && $pass=="dorkas123"){
    $_SESSION['login'] = "dorkas";
    header("Location: admin.php"); exit;
  } else {
    $pesan = "Username / password salah!";
  }
}
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Login Admin - Dorkas</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container" style="max-width:420px;padding:60px 20px;">
  <a href="index.php">← Kembali ke Beranda</a><br><br>
  <h2>Login Admin</h2>
  <p style="color:#64748b;">Hanya Dorkas yang bisa masuk.</p>
  <?php if($pesan) echo '<p style="color:#dc2626;font-weight:600;">'.$pesan.'</p>'; ?>
  <form method="POST" class="contact-form">
    <label>Username<input type="text" name="username" placeholder="dorkas" required></label>
    <label>Password<input type="password" name="password" placeholder="••••••" required></label>
    <button type="submit" class="btn-primary full">Masuk</button>
  </form>
</div>
</body></html>