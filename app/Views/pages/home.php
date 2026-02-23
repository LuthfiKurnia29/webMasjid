<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-pattern"></div>
        <div class="hero-content">
            <div class="hero-text">
                <div class="arabic">بسم الله الرحمن الرحيم</div>
                <h2>Selamat Datang di Masjid An Namiroh Firdaus</h2>
                <p>Masjid kami adalah tempat ibadah, pendidikan, dan pembinaan umat yang berlokasi strategis di Kelurahan Sawangan, Depok. Kami menyediakan berbagai program dakwah dan kegiatan sosial untuk seluruh lapisan masyarakat.</p>
                <div class="hero-buttons">
                    <a href="<?= base_url('/program') ?>" class="btn-primary">Lihat Program</a>
                    <a href="#tentang" class="btn-secondary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="hero-decoration">
                <div class="floating-card">
                    <div class="current-prayer">
                        <h3>Jadwal Sholat Berikutnya</h3>
                    </div>
                    <div style="text-align: center;">
                        <div class="prayer-name">Dzuhur</div>
                        <div class="prayer-time">12:05</div>
                    </div>
                    <div class="next-prayer-info">
                        <p>Sisa waktu: <strong>2 jam 15 menit</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="tentang">
        <div class="section-header">
            <h2>Tentang Kami</h2>
            <div class="section-divider"></div>
        </div>
        <div class="about-content">
            <div class="about-text">
                <h3>Masjid An Namiroh Firdaus</h3>
                <p>Masjid An Namiroh Firdaus didirikan dengan visi untuk menjadi pusat pembinaan umat dan pengembangan dakwah Islam yang komprehensif. Kami memiliki fasilitas lengkap dan program-program berkualitas untuk mendukung aktivitas ibadah dan pengajaran Islam.</p>
                <p>Dengan tim takmir yang berdedikasi dan ustadz-ustadzah berpengalaman, kami berkomitmen untuk memberikan pelayanan terbaik kepada jamaah dari berbagai latar belakang usia dan profesi.</p>
                
                <div class="feature-grid">
                    <div class="feature-item">
                        <div class="feature-icon-small">📚</div>
                        <div>
                            <h4>Pendidikan</h4>
                            <p>Program TPA, TPQ, dan Tahfidz Al-Quran</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-small">🤝</div>
                        <div>
                            <h4>Sosial</h4>
                            <p>Santunan dhuafa dan program bantuan sosial</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-small">🎓</div>
                        <div>
                            <h4>Kajian</h4>
                            <p>Kajian rutin dengan tema beragam</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-small">🕌</div>
                        <div>
                            <h4>Ibadah</h4>
                            <p>Tempat ibadah nyaman dan berkualitas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-image">
                🕌
            </div>
        </div>
    </section>

    <!-- Facilities -->
    <section class="facilities">
        <div class="section-header">
            <h2>Fasilitas Kami</h2>
            <div class="section-divider"></div>
        </div>
        <div class="facility-grid">
            <div class="feature-box">
                <div class="feature-icon">📖</div>
                <h3>Ruang Sholat</h3>
                <p>Ruang sholat yang luas dan nyaman dengan AC untuk semua jamaah</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">👶</div>
                <h3>Ruang Anak</h3>
                <p>Area khusus untuk anak-anak dengan tempat yang aman dan nyaman</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">🧴</div>
                <h3>Sarana Wudhu</h3>
                <p>Fasilitas wudhu lengkap dan bersih yang dirawat dengan baik</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">📚</div>
                <h3>Perpustakaan</h3>
                <p>Koleksi buku-buku Islam dan referensi agama untuk dibaca</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">🅿️</div>
                <h3>Area Parkir</h3>
                <p>Tempat parkir yang aman dan nyaman untuk jamaah</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">♿</div>
                <h3>Akses Disabilitas</h3>
                <p>Fasilitas ramah untuk jamaah berkebutuhan khusus</p>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
