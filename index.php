<?php
session_start();
include 'koneksi.php';
$is_login = isset($_SESSION['login']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portofolio Dorkas Punuf</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="nav-container">
    <a href="#" class="logo"><img src="logo-dorkas.png" class="logo-img" alt=""> Dorkas Punuf</a>
    <ul class="nav-links" id="navLinks">
      <li><a href="#beranda">Beranda</a></li>
      <li><a href="#tentang">Tentang</a></li>
      <li><a href="#keahlian">Keahlian</a></li>
      <li><a href="#karya">Karya</a></li>
      <li><a href="#pengalaman">Pengalaman</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>
    <div class="nav-actions">
      <button class="icon-btn" id="darkToggle">🌙</button>
      <?php if($is_login){ ?>
        <a href="logout.php" class="btn-outline" style="padding:9px 14px;font-size:14px;">Logout</a>
      <?php } else { ?>
        <a href="login.php" class="btn-primary small">🔐 Login</a>
      <?php } ?>
      <button class="hamburger" id="hamburger"><span></span><span></span><span></span></button>
    </div>
  </div>
</nav>

<!-- BERANDA -->
<section class="hero" id="beranda">
  <div class="container hero-grid">
    <div class="hero-text">
      <span class="badge">✨ Kreator & Profesional Muda</span>
      <h1>Halo, Saya <span class="highlight">Dorkas Punuf</span></h1>
      <h2>Mahasiswa TI Universitas San Pedro, Semester 3, NTT</h2>
      <p>Saya membantu personal dan brand tampil profesional lewat desain 【entity-Figma¦canonical_name=Figma】, Maintenance Komputer, dan Website Portofolio yang Modern.</p>
      <div class="hero-buttons">
        <a href="#karya" class="btn-primary">Lihat Karya →</a>
        <a href="cv.php" class="btn-outline">📄 Lihat CV</a>
      </div>
      <div class="stats">
        <div><strong>3+</strong><span>Tahun Pengalaman</span></div>
        <div><strong>20+</strong><span>Proyek Selesai</span></div>
        <div><strong>15+</strong><span>Klien Puas</span></div>
      </div>
    </div>
    <div class="profile-card">
      <img src="logo-dorkas.png" class="avatar-img" alt="Dorkas Punuf">
      <h3>Dorkas Punuf</h3>
      <p>Kupang, Nusa Tenggara Timur</p>
      <div class="status"><i></i> Tersedia untuk proyek</div>
      <div class="socials">
        <a href="https://instagram.com/dorkaspunuf" target="_blank">📸 Instagram</a>
        <a href="https://facebook.com/100069550090005" target="_blank">📘 Facebook</a>
        <a href="https://wa.me/6281339492579" target="_blank">💬 WhatsApp</a>
      </div>
    </div>
  </div>
</section>

<!-- TENTANG -->
<section class="section alt" id="tentang">
  <div class="container">
    <span class="section-label">Tentang Saya</span>
    <h2 class="section-title">Kenalan Lebih Dekat</h2>
    <div class="about-grid">
      <div class="about-text">
        <p>Halo! Saya <b>Dorkas Punuf</b>, Saya Mahasiswa TI San Pedro Semester 3. Saya suka membuat desain yang rapi, komputer yang ngebut lagi, dan website yang enak dilihat di HP maupun laptop.</p><br>
        <p>Saya percaya karya yang bagus itu yang <b>bermanfaat dan mudah dipakai</b>, bukan cuma bagus dilihat.</p>
      </div>
      <div class="info-card">
        <div><span>Nama</span><b>Dorkas Punuf</b></div>
        <div><span>Lokasi</span><b>Kupang, NTT</b></div>
        <div><span>Email</span><b>dorkas.punuf@email.com</b></div>
        <div><span>WhatsApp</span><b class="green">0813-3949-2579</b></div>
      </div>
    </div>
  </div>
</section>

<!-- KEAHLIAN -->
<section class="section" id="keahlian">
  <div class="container">
    <span class="section-label">Keahlian</span>
    <h2 class="section-title">Apa yang Bisa Saya Bantu?</h2>
    <div class="skills-grid">
      <div class="card">
        <div class="card-icon">🎨</div>
        <span class="card-label">DESAIN APLIKASI</span>
        <h3>Desain Aplikasi Menggunakan 【entity-Figma¦canonical_name=Figma】</h3>
        <p>Desain UI/UX mobile & web modern di Figma, prototipe interaktif siap handoff ke developer.</p>
        <div style="padding:0 20px 20px;display:flex;gap:8px;flex-wrap:wrap;">
          <button class="btn-primary small open-modal" data-title="Desain Aplikasi Menggunakan Figma" data-img="logo-dorkas.png" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ" data-desc="Desain UI/UX mobile & web modern. Dapat file Figma + prototipe interaktif + siap handoff ke developer." data-wa="https://wa.me/6281339492579?text=Halo%20Dorkas,%20saya%20mau%20pesan%20desain%20Figma">▶️ Lihat Isi</button>
          <a href="https://wa.me/6281339492579?text=Halo%20Dorkas,%20saya%20mau%20tanya%20desain%20Figma" target="_blank" class="btn-outline" style="padding:9px 14px;font-size:14px;">💬 Tanya</a>
        </div>
      </div>
      <div class="card">
        <div class="card-icon">🛠</div>
        <span class="card-label">MAINTENANCE KOMPUTER</span>
        <h3>Maintenance Komputer</h3>
        <p>Perawatan berkala hardware & software, optimasi performa, pembersihan, dan troubleshooting menyeluruh.</p>
        <div style="padding:0 20px 20px;display:flex;gap:8px;flex-wrap:wrap;">
          <button class="btn-primary small open-modal" data-title="Maintenance Komputer" data-img="logo-dorkas.png" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ" data-desc="Pembersihan, ganti pasta, install ulang, optimasi Windows, perbaikan hardware ringan. Komputer jadi ngebut lagi." data-wa="https://wa.me/6281339492579?text=Halo%20Dorkas,%20komputer%20saya%20mau%20di-service">▶️ Lihat Isi</button>
          <a href="https://wa.me/6281339492579?text=Halo%20Dorkas,%20saya%20mau%20service%20komputer" target="_blank" class="btn-outline" style="padding:9px 14px;font-size:14px;">💬 Tanya</a>
        </div>
      </div>
      <div class="card">
        <div class="card-icon">💻</div>
        <span class="card-label">DESIGN WEB</span>
        <h3>Design Web Portofolio</h3>
        <p>Pembuatan website portofolio responsif, modern, SEO-friendly untuk personal dan brand profesional.</p>
        <div style="padding:0 20px 20px;display:flex;gap:8px;flex-wrap:wrap;">
          <button class="btn-primary small open-modal" data-title="Design Web Portofolio" data-img="logo-dorkas.png" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ" data-desc="Website responsif HP & laptop, desain modern, SEO-friendly, lengkap dengan CRUD + upload foto seperti web ini." data-wa="https://wa.me/6281339492579?text=Halo%20Dorkas,%20saya%20mau%20buat%20website">▶️ Lihat Isi</button>
          <a href="https://wa.me/6281339492579?text=Halo%20Dorkas,%20saya%20mau%20buat%20website" target="_blank" class="btn-outline" style="padding:9px 14px;font-size:14px;">💬 Tanya</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- KARYA -->
<section class="section alt" id="karya">
  <div class="container">
    <span class="section-label">Karya Pilihan</span>
    <h2 class="section-title">Karya Terbaru Saya</h2>
    <?php if($is_login){ ?>
      <a href="admin.php" class="btn-primary small" style="margin-bottom:20px;">+ Tambah Karya</a>
    <?php } else { ?>
      <a href="login.php" class="btn-primary small" style="margin-bottom:20px;">🔐 Login Admin</a>
    <?php } ?>
    <div class="works-grid">
      <?php
      $q = mysqli_query($conn, "SELECT * FROM karya ORDER BY id DESC");
      if($q && mysqli_num_rows($q)>0){
        while($row = mysqli_fetch_assoc($q)){
          echo '<div class="work">';
          if($row['foto']) echo '<img src="uploads/'.$row['foto'].'" style="width:100%;height:180px;object-fit:cover;">';
          else echo '<div class="work-img g1">🖼️</div>';
          echo '<span>'.$row['kategori'].'</span><h3>'.$row['judul'].'</h3><p>'.$row['deskripsi'].'</p>';
          if($is_login){
            echo '<div style="padding:0 18px 18px;display:flex;gap:8px;"><a href="edit.php?id='.$row['id'].'" class="btn-outline" style="padding:7px 12px;font-size:13px;">✏️ Edit</a><a href="hapus.php?id='.$row['id'].'" onclick="return confirm(\'Yakin hapus?\')" class="btn-outline" style="padding:7px 12px;font-size:13px;color:#dc2626;">🗑️ Hapus</a></div>';
          }
          echo '</div>';
        }
      } else {
        echo '<div class="work"><div class="work-img g1">🎨</div><span>DESAIN</span><h3>Contoh Karya Figma</h3><p>Tambah karyamu lewat tombol + Tambah Karya di atas.</p></div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- PENGALAMAN -->
<section class="section" id="pengalaman">
  <div class="container">
    <span class="section-label">Pengalaman</span>
    <h2 class="section-title">Perjalanan Saya</h2>
    <div class="timeline">
      <div class="timeline-item"><span class="dot"></span><small>2023 - SEKARANG</small><h3>Freelance Desainer & Teknisi Komputer</h3><p>Melayani klien personal dan UMKM di Kupang untuk desain, service, dan website.</p></div>
      <div class="timeline-item"><span class="dot"></span><small>2022 - 2023</small><h3>Belajar Desain & Web Development</h3><p>Mendalami Figma, HTML, CSS, PHP & MySQL lewat proyek nyata.</p></div>
    </div>
  </div>
</section>

<!-- KONTAK -->
<section class="section alt" id="kontak">
  <div class="container">
    <span class="section-label">Kontak</span>
    <h2 class="section-title">Mari Kerjasama</h2>
    <div class="contact-grid">
      <div>
        <p style="color:var(--muted)">Punya proyek desain, service komputer, atau mau buat website? Kirim pesan saja.</p>
        <div class="contact-info">
          <span>📧 dorkas.punuf@email.com</span>
          <span>📱 0813-3949-2579</span>
          <span>📍 Kupang, NTT</span>
        </div>
      </div>
      <form class="contact-form" id="contactForm">
        <label>Nama<input type="text" placeholder="Nama kamu" required></label>
        <label>Email<input type="email" placeholder="email@kamu.com" required></label>
        <label>Pesan<textarea rows="4" placeholder="Ceritakan proyekmu..." required></textarea></label>
        <button type="submit" class="btn-primary full">Kirim via WhatsApp</button>
        <p class="form-msg" id="formMsg"></p>
      </form>
    </div>
  </div>
</section>

<footer>© 2026 Dorkas Punuf - Kupang, NTT. Dibuat dengan ❤️</footer>

<!-- POPUP / MODAL -->
<div id="modalKeahlian" class="modal">
  <div class="modal-box">
    <button class="modal-close" id="closeModal">✕</button>
    <img id="modalImg" src="" alt="" style="width:100%;height:220px;object-fit:cover;border-radius:14px;">
    <h3 id="modalTitle" style="margin:14px 0 6px;"></h3>
    <p id="modalDesc" style="color:#64748b;font-size:14.5px;"></p>
    <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;border-radius:14px;margin:14px 0;">
      <iframe id="modalVideo" src="" style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;" allowfullscreen></iframe>
    </div>
    <a id="modalWa" href="#" target="_blank" class="btn-primary" style="display:block;text-align:center;">💬 Pesan via WhatsApp</a>
    <a href="#karya" class="btn-outline" style="display:block;text-align:center;margin-top:8px;" onclick="document.getElementById('modalKeahlian').classList.remove('show')">🔗 Lihat Karya Terkait</a>
  </div>
</div>

<script src="script.js"></script>
</body>
</html>