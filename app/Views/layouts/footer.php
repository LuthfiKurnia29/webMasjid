    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Masjid An Namiroh Firdaus</h3>
                <p>Masjid yang berkomitmen untuk menjadi pusat pembinaan umat dan pengembangan dakwah Islam.</p>
                <div class="social-links">
                    <a href="#" class="social-link">📘</a>
                    <a href="#" class="social-link">📷</a>
                    <a href="#" class="social-link">🐦</a>
                    <a href="#" class="social-link">📹</a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Link Cepat</h3>
                <a href="<?= base_url('/jadwal') ?>">Jadwal Sholat</a>
                <a href="<?= base_url('/program') ?>">Program & Kegiatan</a>
                <a href="<?= base_url('/donasi') ?>">Cara Berdonasi</a>
                <a href="<?= base_url('/kontak') ?>">Hubungi Kami</a>
            </div>
            <div class="footer-section">
                <h3>Program Unggulan</h3>
                <a href="#">TPA & TPQ</a>
                <a href="#">Tahfidz Al-Quran</a>
                <a href="#">Kajian Islam</a>
                <a href="#">Santunan Sosial</a>
            </div>
            <div class="footer-section">
                <h3>Newsletter</h3>
                <p>Dapatkan informasi terbaru tentang kegiatan masjid</p>
                <p style="margin-top: 15px;">📧 newsletter@annamirohfirdaus.or.id</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Masjid An Namiroh Firdaus. Semua hak cipta dilindungi.</p>
            <p style="margin-top: 5px;">Dibuat dengan ❤️ untuk kejayaan Islam</p>
        </div>
    </footer>

    <script>
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>
