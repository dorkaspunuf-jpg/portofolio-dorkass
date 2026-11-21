<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV - Dorkas Punuf</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
  <style>
    *{margin:0;padding:0;box-sizing:border-box}
    body{font-family:'Poppins',sans-serif;background:#e2e8f0;padding:24px;color:#0f172a}
    .cv{max-width:850px;margin:0 auto;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.1)}
    .header{background:#0ea5e9;color:#fff;padding:24px 32px;display:flex;gap:16px;align-items:center}
    .header img{width:70px;height:70px;border-radius:50%;object-fit:cover;border:3px solid #fff}
    .header h1{font-size:24px}
    .header p{font-size:13.5px;opacity:.9}
    .pdf-box{padding:20px}
    .pdf-box iframe{width:100%;height:750px;border:1px solid #e2e8f0;border-radius:12px}
    .btns{display:flex;gap:10px;justify-content:center;padding:0 0 24px;flex-wrap:wrap}
    .btn{padding:11px 20px;border-radius:999px;border:none;cursor:pointer;font-weight:600;font-family:inherit;text-decoration:none;display:inline-block;font-size:14px}
    .btn-print{background:#0ea5e9;color:#fff}
    .btn-back{background:#e2e8f0;color:#0f172a}
    .btn-down{background:#f97316;color:#fff}
    @media(max-width:600px){.header{flex-direction:column;text-align:center}.pdf-box iframe{height:500px}}
  </style>
</head>
<body>
  <div class="cv">
    <div class="header">
      <img src="logo-dorkas.png" alt="Dorkas Punuf">
      <div>
        <h1>CV - Dorkas Punuf</h1>
        <p>Kreator & Profesional Muda dari Kupang | dorkas.punuf@email.com | 081339492579</p>
      </div>
    </div>
    <div class="pdf-box">
      <!-- INI FILE CV ASLI KAMU -->
      <iframe src="cv-dorkas.pdf"></iframe>
    </div>
    <div class="btns">
      <a href="cv-dorkas.pdf" class="btn btn-down" download>⬇️ Unduh CV</a>
      <a href="index.php" class="btn btn-back">← Kembali ke Beranda</a>
    </div>
  </div>
</body>
</html>