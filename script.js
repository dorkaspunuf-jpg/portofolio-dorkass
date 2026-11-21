document.addEventListener('DOMContentLoaded', () => {
  const darkToggle = document.getElementById('darkToggle');
  if (darkToggle) {
    if (localStorage.getItem('theme') === 'dark') {
      document.body.classList.add('dark');
      darkToggle.textContent = '☀';
    }
    darkToggle.addEventListener('click', () => {
      const isDark = document.body.classList.toggle('dark');
      darkToggle.textContent = isDark ? '☀' : '🌙';
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
    });
  }
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.getElementById('navLinks');
  if (hamburger && navLinks) {
    hamburger.addEventListener('click', () => navLinks.classList.toggle('show'));
    navLinks.querySelectorAll('a').forEach(l => l.addEventListener('click', () => navLinks.classList.remove('show')));
  }
  const form = document.getElementById('contactForm');
  const formMsg = document.getElementById('formMsg');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const nama = form.querySelector('input[type="text"]').value.trim();
      const email = form.querySelector('input[type="email"]').value.trim();
      const pesan = form.querySelector('textarea').value.trim();
      if (!nama || !email || !pesan) {
        formMsg.style.color = '#dc2626';
        formMsg.textContent = 'Mohon isi semua kolom dulu ya.';
        return;
      }
      formMsg.style.color = '#16a34a';
      formMsg.textContent = `Terima kasih ${nama}! Membuka WhatsApp...`;
      const text = encodeURIComponent(`Halo Dorkas, saya ${nama} (${email}).\n${pesan}`);
      setTimeout(() => window.open(`https://wa.me/6281339492579?text=${text}`, '_blank'), 800);
      form.reset();
    });
  }

  // ===== POPUP KEAHLIAN =====
  const modal = document.getElementById('modalKeahlian');
  const closeModal = document.getElementById('closeModal');
  document.querySelectorAll('.open-modal').forEach(btn => {
    btn.addEventListener('click', () => {
      document.getElementById('modalTitle').textContent = btn.dataset.title;
      document.getElementById('modalDesc').textContent = btn.dataset.desc;
      document.getElementById('modalImg').src = btn.dataset.img;
      document.getElementById('modalVideo').src = btn.dataset.video;
      document.getElementById('modalWa').href = btn.dataset.wa;
      modal.classList.add('show');
    });
  });
  if (closeModal) closeModal.addEventListener('click', () => {
    modal.classList.remove('show');
    document.getElementById('modalVideo').src = '';
  });
  if (modal) modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.classList.remove('show');
      document.getElementById('modalVideo').src = '';
    }
  });
});