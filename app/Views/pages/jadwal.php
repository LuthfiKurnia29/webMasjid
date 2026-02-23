<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <!-- Jadwal Section -->
    <section class="jadwal-section">
        <div class="section-header">
            <h2>Jadwal Sholat</h2>
            <div class="section-divider"></div>
            <p style="margin-top: 20px; color: #666; font-size: 1.1rem;">Jadwal sholat untuk Kelurahan Sawangan, Depok, Jawa Barat</p>
        </div>

        <div class="prayer-schedule">
            <div class="prayer-grid">
                <div class="prayer-card">
                    <h3>Subuh</h3>
                    <div class="time">04:45</div>
                    <p>Dini Hari</p>
                </div>
                <div class="prayer-card">
                    <h3>Dzuhur</h3>
                    <div class="time">12:05</div>
                    <p>Siang Hari</p>
                </div>
                <div class="prayer-card">
                    <h3>Ashar</h3>
                    <div class="time">15:20</div>
                    <p>Sore Hari</p>
                </div>
                <div class="prayer-card">
                    <h3>Maghrib</h3>
                    <div class="time">18:15</div>
                    <p>Malam Awal</p>
                </div>
                <div class="prayer-card">
                    <h3>Isya</h3>
                    <div class="time">19:30</div>
                    <p>Malam Hari</p>
                </div>
            </div>

            <div class="prayer-info">
                <h3>Informasi Tambahan</h3>
                <div class="info-grid">
                    <div class="info-item">
                        <strong>Sholat Jumat</strong>
                        <p>Setiap hari Jumat pada jam 12:00 WIB dengan jumatan pertama dan kedua</p>
                    </div>
                    <div class="info-item">
                        <strong>Sholat Tarawih</strong>
                        <p>Dilaksanakan setiap malam Ramadan setelah Isya dengan imam dan makmum yang teratur</p>
                    </div>
                    <div class="info-item">
                        <strong>Sholat Witir</strong>
                        <p>Setelah Tarawih setiap malam Ramadan dengan khusyuk dan penuh hikmat</p>
                    </div>
                    <div class="info-item">
                        <strong>Kajian Rutin</strong>
                        <p>Setiap Subuh dan Maghrib kami mengadakan kajian qur'an dan hadis</p>
                    </div>
                </div>
            </div>

            <div class="keterangan">
                <p><strong>Catatan Penting:</strong></p>
                <p>• Jadwal sholat dapat berubah sesuai dengan kondisi langit dan perubahan musim</p>
                <p>• Jam yang tertera adalah untuk waktu ibtida' (masuk) waktu sholat</p>
                <p>• Untuk informasi lebih detail, silakan hubungi panitia masjid</p>
                <p>• Aplikasi pengingat sholat dapat diunduh dari PlayStore atau AppStore</p>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
