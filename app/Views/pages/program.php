<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <!-- Programs Section -->
    <section class="program-section" id="program">
        <div class="section-header">
            <h2>Program & Kegiatan</h2>
            <div class="section-divider"></div>
            <p style="margin-top: 20px; color: #666; font-size: 1.1rem;">Berbagai program edukatif dan sosial untuk jamaah</p>
        </div>

        <div class="program-container">
            <div class="program-tabs">
                <button class="tab-button active">Semua</button>
                <button class="tab-button">Pendidikan</button>
                <button class="tab-button">Kajian</button>
                <button class="tab-button">Sosial</button>
            </div>

            <div class="program-content">
                <div class="program-card">
                    <div class="program-image">📖</div>
                    <div class="program-info">
                        <h3>TPA & TPQ</h3>
                        <div class="program-meta">
                            <span>📅 Senin-Jumat</span>
                            <span>⏰ 16:00-17:30</span>
                        </div>
                        <p>Pendidikan Al-Quran untuk anak-anak usia 5-15 tahun dengan metode Iqro dan Tilawati yang telah terbukti efektif.</p>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-image">🎓</div>
                    <div class="program-info">
                        <h3>Kajian Rutin</h3>
                        <div class="program-meta">
                            <span>📅 Minggu</span>
                            <span>⏰ Ba'da Subuh & Maghrib</span>
                        </div>
                        <p>Kajian Islam dengan tema beragam oleh ustadz berpengalaman membahas Qur'an, hadis, dan fiqih.</p>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-image">👥</div>
                    <div class="program-info">
                        <h3>Majelis Ta'lim Ibu-ibu</h3>
                        <div class="program-meta">
                            <span>📅 Kamis</span>
                            <span>⏰ 09:00-11:00</span>
                        </div>
                        <p>Pengajian khusus ibu-ibu membahas fiqih wanita, parenting Islami, dan pemberdayaan ekonomi keluarga.</p>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-image">🌙</div>
                    <div class="program-info">
                        <h3>Tahfidz Al-Quran</h3>
                        <div class="program-meta">
                            <span>📅 Selasa & Kamis</span>
                            <span>⏰ 17:00-18:30</span>
                        </div>
                        <p>Program menghafal Al-Quran dengan metode talaqqi untuk semua usia dengan bimbingan ustadz hafidz.</p>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-image">💝</div>
                    <div class="program-info">
                        <h3>Santunan Dhuafa</h3>
                        <div class="program-meta">
                            <span>📅 Setiap Bulan</span>
                            <span>⏰ Minggu Ke-2</span>
                        </div>
                        <p>Pembagian bantuan dan perhatian untuk fakir miskin, yatim piatu, dan mualaf keliling berkala.</p>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-image">🏥</div>
                    <div class="program-info">
                        <h3>Khitan Massal</h3>
                        <div class="program-meta">
                            <span>📅 Tahunan</span>
                            <span>⏰ Liburan Sekolah</span>
                        </div>
                        <p>Khitanan gratis untuk anak-anak kurang mampu dengan tenaga medis profesional dan sokongan hati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
