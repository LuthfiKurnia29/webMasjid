<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid An Namiroh Firdaus</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Poppins:wght@300;400;600;700&display=swap');

        :root {
            --primary: #2C5F2D;
            --secondary: #97BC62;
            --accent: #D4AF37;
            --dark: #1a1a1a;
            --light: #f5f5f5;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            overflow-x: hidden;
        }

        /* Decorative Islamic Pattern Background */
        .pattern-bg {
            position: relative;
            background-color: var(--light);
        }

        .pattern-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(44, 95, 45, 0.03) 35px, rgba(44, 95, 45, 0.03) 70px);
            pointer-events: none;
        }

        /* Header */
        .main-header {
            background: var(--white);
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .top-bar {
            background: var(--primary);
            color: var(--white);
            padding: 8px 0;
            font-size: 0.85rem;
        }

        .top-bar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .top-info {
            display: flex;
            gap: 25px;
        }

        .navbar {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .mosque-logo {
            width: 50px;
            height: 50px;
            background: var(--secondary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            box-shadow: 0 4px 15px rgba(44, 95, 45, 0.2);
        }

        .brand-text h1 {
            font-family: 'Amiri', serif;
            font-size: 1.5rem;
            color: var(--primary);
            font-weight: 700;
        }

        .brand-text p {
            font-size: 0.75rem;
            color: #666;
            margin-top: -2px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 35px;
        }

        .nav-menu a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: color 0.3s;
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: width 0.3s;
        }

        .nav-menu a:hover {
            color: var(--primary);
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 85vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, var(--primary) 0%, #1e4620 100%);
            overflow: hidden;
        }

        .hero-pattern {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0.1;
            background-image: 
                radial-gradient(circle at 20% 50%, transparent 20%, var(--white) 21%, var(--white) 34%, transparent 35%, transparent),
                radial-gradient(circle at 80% 50%, transparent 20%, var(--white) 21%, var(--white) 34%, transparent 35%, transparent);
            background-size: 100px 100px;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .hero-text h2 {
            font-family: 'Amiri', serif;
            font-size: 3.5rem;
            color: var(--white);
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-text .arabic {
            font-size: 1.8rem;
            color: var(--accent);
            margin-bottom: 15px;
            font-weight: 400;
        }

        .hero-text p {
            color: rgba(255,255,255,0.9);
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
        }

        .btn-primary {
            background: var(--accent);
            color: var(--dark);
            padding: 15px 35px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: var(--white);
            padding: 15px 35px;
            border: 2px solid var(--white);
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-secondary:hover {
            background: var(--white);
            color: var(--primary);
        }

        .hero-decoration {
            position: relative;
        }

        .floating-card {
            background: rgba(255,255,255,0.95);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            backdrop-filter: blur(10px);
        }

        .current-prayer {
            text-align: center;
            margin-bottom: 25px;
        }

        .current-prayer h3 {
            color: var(--primary);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .prayer-name {
            font-size: 2.2rem;
            color: var(--dark);
            font-weight: 700;
            margin-bottom: 5px;
        }

        .prayer-time {
            font-size: 3rem;
            color: var(--accent);
            font-weight: 700;
        }

        .next-prayer-info {
            background: var(--light);
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            margin-top: 20px;
        }

        /* Prayer Times Section */
        .prayer-schedule {
            padding: 80px 20px;
            background: var(--white);
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-header h2 {
            font-family: 'Amiri', serif;
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .section-divider {
            width: 80px;
            height: 4px;
            background: var(--accent);
            margin: 15px auto;
            border-radius: 2px;
        }

        .prayer-cards {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
        }

        .prayer-item {
            background: var(--white);
            border: 2px solid var(--light);
            border-radius: 15px;
            padding: 30px 20px;
            text-align: center;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .prayer-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--secondary);
            transform: scaleX(0);
            transition: transform 0.3s;
        }

        .prayer-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(44, 95, 45, 0.15);
            border-color: var(--secondary);
        }

        .prayer-item:hover::before {
            transform: scaleX(1);
        }

        .prayer-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .prayer-item h3 {
            font-size: 1.3rem;
            color: var(--dark);
            margin-bottom: 10px;
        }

        .prayer-item .time {
            font-size: 2rem;
            color: var(--primary);
            font-weight: 700;
        }

        /* Features Section */
        .features {
            padding: 80px 20px;
            background: var(--light);
        }

        .features-grid {
            max-width: 1200px;
            margin: 50px auto 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-box {
            background: var(--white);
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.3s;
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.12);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin: 0 auto 25px;
            box-shadow: 0 10px 25px rgba(44, 95, 45, 0.2);
        }

        .feature-box h3 {
            color: var(--primary);
            font-size: 1.4rem;
            margin-bottom: 15px;
        }

        .feature-box p {
            color: #666;
            line-height: 1.8;
        }

        /* Programs Section */
        .programs {
            padding: 80px 20px;
            background: var(--white);
        }

        .program-tabs {
            max-width: 1000px;
            margin: 0 auto 40px;
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .tab-button {
            background: var(--light);
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            color: var(--dark);
            cursor: pointer;
            transition: all 0.3s;
        }

        .tab-button.active {
            background: var(--primary);
            color: var(--white);
        }

        .program-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .program-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }

        .program-card:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .program-image {
            height: 200px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
        }

        .program-info {
            padding: 25px;
        }

        .program-info h3 {
            color: var(--primary);
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .program-meta {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: #666;
        }

        .program-info p {
            color: #666;
            line-height: 1.6;
        }

        /* Donation Section */
        .donation-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--primary), #1e4620);
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .donation-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
        }

        .donation-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .donation-content h2 {
            font-family: 'Amiri', serif;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .ayat-quote {
            font-size: 1.2rem;
            font-style: italic;
            margin: 30px 0;
            padding: 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .donation-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        .donation-method {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .donation-method h4 {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: var(--accent);
        }

        .account-number {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 15px 0;
            letter-spacing: 2px;
        }

        /* Contact Section */
        .contact-section {
            padding: 80px 20px;
            background: var(--light);
        }

        .contact-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .contact-info {
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .contact-info h3 {
            color: var(--primary);
            font-size: 1.8rem;
            margin-bottom: 30px;
        }

        .info-item {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 1px solid var(--light);
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-icon {
            width: 50px;
            height: 50px;
            background: var(--secondary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .info-text h4 {
            color: var(--dark);
            margin-bottom: 5px;
        }

        .info-text p {
            color: #666;
            line-height: 1.6;
        }

        .map-container {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            height: 100%;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: var(--secondary);
        }

        /* Footer */
        .footer {
            background: var(--dark);
            color: var(--white);
            padding: 50px 20px 20px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 30px;
        }

        .footer-section h3 {
            color: var(--accent);
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            line-height: 2;
            display: block;
        }

        .footer-section a:hover {
            color: var(--accent);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .social-link:hover {
            background: var(--accent);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.5);
        }

        /* Responsive */
        @media (max-width: 968px) {
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-text h2 {
                font-size: 2.5rem;
            }

            .hero-buttons {
                justify-content: center;
            }

            .nav-menu {
                display: none;
            }

            .contact-wrapper {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .prayer-cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero-text h2 {
                font-size: 2rem;
            }

            .top-bar {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="main-header">
        <div class="top-bar">
            <div class="container">
                <div class="top-info">
                    <span>📍 Depok, Jawa Barat</span>
                    <span>📞 (021) 1234-5678</span>
                </div>
                <div>
                    <span>⏰ Buka 24 Jam</span>
                </div>
            </div>
        </div>
        
        <nav class="navbar">
            <div class="brand">
                <div class="mosque-logo">🕌</div>
                <div class="brand-text">
                    <h1>Masjid An Namiroh Firdaus</h1>
                    <p>Cahaya Petunjuk Umat</p>
                </div>
            </div>
            <ul class="nav-menu">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#jadwal">Jadwal Sholat</a></li>
                <li><a href="#program">Program</a></li>
                <li><a href="#donasi">Donasi</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-pattern"></div>
        <div class="hero-content">
            <div class="hero-text">
                <p class="arabic">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</p>
                <h2>Memakmurkan Rumah Allah untuk Kehidupan yang Berkah</h2>
                <p>Bergabunglah bersama kami dalam membangun ukhuwah islamiyah dan meningkatkan kualitas ibadah. Mari bersama-sama menjadikan masjid sebagai pusat pembinaan umat.</p>
                <div class="hero-buttons">
                    <a href="#jadwal" class="btn-primary">Lihat Jadwal Sholat</a>
                    <a href="#program" class="btn-secondary">Program Kami</a>
                </div>
            </div>
            <div class="hero-decoration">
                <div class="floating-card">
                    <div class="current-prayer">
                        <h3>Waktu Sholat Selanjutnya</h3>
                        <div class="prayer-name">Dzuhur</div>
                        <div class="prayer-time">12:05</div>
                    </div>
                    <div class="next-prayer-info">
                        <strong>Menuju Dzuhur</strong><br>
                        <span style="font-size: 1.5rem; color: var(--primary); font-weight: 700;">2 jam 15 menit lagi</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prayer Schedule -->
    <section class="prayer-schedule pattern-bg" id="jadwal">
        <div class="section-header">
            <h2>Jadwal Sholat Hari Ini</h2>
            <div class="section-divider"></div>
            <p>Sabtu, 14 Februari 2026</p>
        </div>
        <div class="prayer-cards">
            <div class="prayer-item">
                <div class="prayer-icon">🌙</div>
                <h3>Subuh</h3>
                <div class="time">04:45</div>
                <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">Iqomah: 05:00</p>
            </div>
            <div class="prayer-item">
                <div class="prayer-icon">🌅</div>
                <h3>Syuruq</h3>
                <div class="time">05:58</div>
            </div>
            <div class="prayer-item">
                <div class="prayer-icon">☀️</div>
                <h3>Dzuhur</h3>
                <div class="time">12:05</div>
                <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">Iqomah: 12:20</p>
            </div>
            <div class="prayer-item">
                <div class="prayer-icon">🌤️</div>
                <h3>Ashar</h3>
                <div class="time">15:20</div>
                <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">Iqomah: 15:35</p>
            </div>
            <div class="prayer-item">
                <div class="prayer-icon">🌆</div>
                <h3>Maghrib</h3>
                <div class="time">18:15</div>
                <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">Iqomah: 18:20</p>
            </div>
            <div class="prayer-item">
                <div class="prayer-icon">🌃</div>
                <h3>Isya</h3>
                <div class="time">19:30</div>
                <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">Iqomah: 19:45</p>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="features">
        <div class="section-header">
            <h2>Fasilitas Masjid</h2>
            <div class="section-divider"></div>
        </div>
        <div class="features-grid">
            <div class="feature-box">
                <div class="feature-icon">🎤</div>
                <h3>Sound System Modern</h3>
                <p>Sistem audio berkualitas tinggi untuk kenyamanan ibadah dan kajian</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">❄️</div>
                <h3>Ruangan Ber-AC</h3>
                <p>Ruang sholat utama dilengkapi pendingin udara untuk kenyamanan maksimal</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">💧</div>
                <h3>Tempat Wudhu Bersih</h3>
                <p>Fasilitas wudhu yang higienis dengan air bersih mengalir</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">📚</div>
                <h3>Perpustakaan Islam</h3>
                <p>Koleksi buku-buku Islami untuk menambah wawasan keagamaan</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">🅿️</div>
                <h3>Area Parkir Luas</h3>
                <p>Tempat parkir yang aman dan nyaman untuk jamaah</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">♿</div>
                <h3>Akses Disabilitas</h3>
                <p>Fasilitas ramah untuk jamaah berkebutuhan khusus</p>
            </div>
        </div>
    </section>

    <!-- Programs -->
    <section class="programs" id="program">
        <div class="section-header">
            <h2>Program & Kegiatan</h2>
            <div class="section-divider"></div>
        </div>
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
                    <p>Pendidikan Al-Quran untuk anak-anak usia 5-15 tahun dengan metode Iqro dan Tilawati</p>
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
                    <p>Kajian Islam dengan tema beragam oleh ustadz berpengalaman</p>
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
                    <p>Pengajian khusus ibu-ibu membahas fiqih wanita dan parenting Islami</p>
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
                    <p>Program menghafal Al-Quran dengan metode talaqqi untuk semua usia</p>
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
                    <p>Pembagian bantuan untuk fakir miskin, yatim piatu, dan mualaf</p>
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
                    <p>Khitanan gratis untuk anak-anak kurang mampu dengan tenaga medis profesional</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation -->
    <section class="donation-section" id="donasi">
        <div class="donation-content">
            <h2>Mari Berinfaq & Bersedekah</h2>
            <p>Turut serta dalam pembangunan dan operasional masjid</p>
            
            <div class="ayat-quote">
                "مَثَلُ الَّذِينَ يُنْفِقُونَ أَمْوَالَهُمْ فِي سَبِيلِ اللَّهِ"<br><br>
                "Perumpamaan orang yang menginfakkan hartanya di jalan Allah seperti sebutir biji yang menumbuhkan tujuh tangkai, pada setiap tangkai ada seratus biji."<br>
                <small>(QS. Al-Baqarah: 261)</small>
            </div>

            <div class="donation-methods">
                <div class="donation-method">
                    <h4>Bank Syariah Indonesia</h4>
                    <div class="account-number">7123456789</div>
                    <p>a.n. Masjid An Namiroh Firdaus</p>
                </div>
                <div class="donation-method">
                    <h4>Bank Muamalat</h4>
                    <div class="account-number">3012345678</div>
                    <p>a.n. Takmir An Namiroh Firdaus</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact-section" id="kontak">
        <div class="contact-wrapper">
            <div class="contact-info">
                <h3>Hubungi Kami</h3>
                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div class="info-text">
                        <h4>Alamat</h4>
                        <p>Jl. Raya Kemakmuran No. 88<br>Kelurahan Sawangan, Depok<br>Jawa Barat 16519</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">📞</div>
                    <div class="info-text">
                        <h4>Telepon</h4>
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
                        <h4>Jam Pelayanan</h4>
                        <p>Sekretariat: Senin-Jumat<br>08:00 - 16:00 WIB</p>
                    </div>
                </div>
            </div>
            <div class="map-container">
                🗺️
            </div>
        </div>
    </section>

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
                <a href="#jadwal">Jadwal Sholat</a>
                <a href="#program">Program & Kegiatan</a>
                <a href="#donasi">Cara Berdonasi</a>
                <a href="#kontak">Hubungi Kami</a>
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

        // Update current time for next prayer
        function updatePrayerTime() {
            const now = new Date();
            const prayers = [
                { name: 'Subuh', time: '04:45' },
                { name: 'Dzuhur', time: '12:05' },
                { name: 'Ashar', time: '15:20' },
                { name: 'Maghrib', time: '18:15' },
                { name: 'Isya', time: '19:30' }
            ];
            
            // Find next prayer (simplified logic)
            const currentHour = now.getHours();
            let nextPrayer = prayers[0];
            
            for (let prayer of prayers) {
                const [hour] = prayer.time.split(':').map(Number);
                if (hour > currentHour) {
                    nextPrayer = prayer;
                    break;
                }
            }
            
            document.querySelector('.prayer-name').textContent = nextPrayer.name;
            document.querySelector('.prayer-time').textContent = nextPrayer.time;
        }

        // Tab switching for programs
        const tabButtons = document.querySelectorAll('.tab-button');
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                tabButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                // Add filtering logic here if needed
            });
        });

        // Initialize
        updatePrayerTime();
    </script>
</body>
</html>