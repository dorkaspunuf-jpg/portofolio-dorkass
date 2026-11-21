// HAMBURGER / BURGER MENU
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');

if (hamburger && navLinks) {
  hamburger.addEventListener('click', function() {
    navLinks.classList.toggle('active');
    hamburger.classList.toggle('active');
  });

  // Kalau klik menu, tutup lagi burger-nya
  navLinks.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function() {
      navLinks.classList.remove('active');
      hamburger.classList.remove('active');
    });
  });
}

// DARK MODE
const darkBtn = document.getElementById('dark-toggle');
if (darkBtn) {
  darkBtn.addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    if (document.body.classList.contains('dark-mode')) {
      darkBtn.textContent = '☀️';
    } else {
      darkBtn.textContent = '🌙';
    }
  });
}

// POPUP LIHAT ISI
document.querySelectorAll('.open-popup').forEach(function(btn) {
  btn.addEventListener('click', function() {
    const id = btn.getAttribute('data-popup');
    const popup = document.getElementById(id);
    if (popup) popup.style.display = 'flex';
  });
});

document.querySelectorAll('.close-popup').forEach(function(btn) {
  btn.addEventListener('click', function() {
    btn.closest('.popup').style.display = 'none';
  });
});

// Klik di luar popup untuk tutup
document.querySelectorAll('.popup').forEach(function(popup) {
  popup.addEventListener('click', function(e) {
    if (e.target === popup) popup.style.display = 'none';
  });
});

// FORM KONTAK KE WHATSAPP
const contactForm = document.getElementById('contact-form');
if (contactForm) {
  contactForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const nama = document.getElementById('nama').value;
    const pesan = document.getElementById('pesan').value;
    const text = 'Halo Dorkas, saya ' + nama + '. ' + pesan;
    window.open('https://wa.me/6281339492579?text=' + encodeURIComponent(text), '_blank');
  });
}
