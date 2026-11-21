const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');

if (hamburger && navLinks) {
  hamburger.addEventListener('click', function() {
    navLinks.classList.toggle('active');
  });
  navLinks.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function() {
      navLinks.classList.remove('active');
    });
  });
}

const darkBtn = document.getElementById('dark-toggle');
if (darkBtn) {
  darkBtn.addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    darkBtn.textContent = document.body.classList.contains('dark-mode') ? '☀️' : '🌙';
  });
}

document.querySelectorAll('.open-popup').forEach(function(btn) {
  btn.addEventListener('click', function() {
    const popup = document.getElementById(btn.getAttribute('data-popup'));
    if (popup) popup.style.display = 'flex';
  });
});
document.querySelectorAll('.close-popup').forEach(function(btn) {
  btn.addEventListener('click', function() {
    btn.closest('.popup').style.display = 'none';
  });
});
document.querySelectorAll('.popup').forEach(function(popup) {
  popup.addEventListener('click', function(e) {
    if (e.target === popup) popup.style.display = 'none';
  });
});

const contactForm = document.getElementById('contact-form');
if (contactForm) {
  contactForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const nama = document.getElementById('nama').value;
    const pesan = document.getElementById('pesan').value;
    window.open('https://wa.me/6281339492579?text=' + encodeURIComponent('Halo Dorkas, saya ' + nama + '. ' + pesan), '_blank');
  });
}
