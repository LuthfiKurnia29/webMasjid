<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <!-- Contact Section -->
    <section class="contact-section" id="kontak">
        <div class="section-header">
            <h2>Hubungi Kami</h2>
            <div class="section-divider"></div>
            <p style="margin-top: 20px; color: #666; font-size: 1.1rem;">Kami siap melayani pertanyaan dan saran dari Anda</p>
        </div>

        <div class="contact-wrapper">
            <div class="contact-info">
                <h3>Informasi Kontak</h3>
                
                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div class="info-text">
                        <h4>Lokasi / Alamat</h4>
                        <p>Jl. Raya Kemakmuran No. 88<br>Kelurahan Sawangan, Kecamatan Depok<br>Kota Depok, Jawa Barat 16519</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">📞</div>
                    <div class="info-text">
                        <h4>Telepon & WhatsApp</h4>
                        <p>(021) 1234-5678<br>0812-3456-7890 (WhatsApp)</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">📧</div>
                    <div class="info-text">
                        <h4>Email</h4>
                        <p>info@annamirohfirdaus.or.id<br>takmir@annamirohfirdaus.or.id</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">⏰</div>
                    <div class="info-text">
                        <h4>Jam Pelayanan Sekretariat</h4>
                        <p>Senin - Jumat: 08:00 - 16:00 WIB<br>Sabtu: 09:00 - 14:00 WIB<br>Minggu & Hari Raya: Libur</p>
                    </div>
                </div>
            </div>

            <div class="map-container">
                🗺️
            </div>
        </div>

        <div class="contact-form" style="margin-top: 50px; max-width: 600px; margin-left: auto; margin-right: auto;">
            <h3>Kirim Pesan</h3>
            <form method="POST" action="<?= base_url('/kontak/kirim') ?>">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required />
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required />
                </div>

                <div class="form-group">
                    <label for="telepon">Nomor Telepon</label>
                    <input type="tel" id="telepon" name="telepon" />
                </div>

                <div class="form-group">
                    <label for="subjek">Subjek</label>
                    <input type="text" id="subjek" name="subjek" required />
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" required></textarea>
                </div>

                <button type="submit" class="btn-submit">Kirim Pesan</button>
            </form>
        </div>
    </section>
<?= $this->endSection() ?>
