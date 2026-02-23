<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Masjid An Namiroh Firdaus' ?></title>
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

        .nav-menu a:hover,
        .nav-menu a.active {
            color: var(--primary);
        }

        .nav-menu a:hover::after,
        .nav-menu a.active::after {
            width: 100%;
        }

        /* Footer */
        .footer {
            background: var(--dark);
            color: var(--white);
            padding: 60px 20px 20px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h3 {
            font-size: 1.1rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .footer-section p {
            line-height: 1.8;
            opacity: 0.8;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .footer-section a {
            display: block;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            margin-bottom: 10px;
            font-size: 0.9rem;
            transition: color 0.3s;
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
            display: inline-flex;
            width: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s;
        }

        .social-link:hover {
            background: var(--accent);
            transform: translateY(-3px);
        }

        .footer-bottom {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.85rem;
            opacity: 0.8;
        }

        .footer-bottom p {
            margin: 5px 0;
        }

        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .footer-content {
                grid-template-columns: 1fr;
            }
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
            display: inline-block;
            border: none;
            cursor: pointer;
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
            display: inline-block;
            cursor: pointer;
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

        /* About Section */
        .about-section {
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
            margin-bottom: 20px;
        }

        .section-divider {
            width: 60px;
            height: 3px;
            background: var(--accent);
            margin: 0 auto;
        }

        .about-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-text h3 {
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .about-text p {
            line-height: 1.8;
            margin-bottom: 15px;
            color: #666;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .feature-item {
            display: flex;
            gap: 15px;
        }

        .feature-icon-small {
            font-size: 2rem;
            min-width: 50px;
        }

        .feature-item h4 {
            color: var(--primary);
            margin-bottom: 5px;
        }

        .feature-item p {
            font-size: 0.9rem;
            color: #666;
            margin: 0;
        }

        .about-image {
            position: relative;
            height: 400px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 8rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }

        /* Facilities Section */
        .facilities {
            padding: 80px 20px;
            background: var(--light);
        }

        .facility-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }

        .feature-box {
            background: var(--white);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.3s;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .feature-box .feature-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .feature-box h3 {
            color: var(--primary);
            margin-bottom: 10px;
        }

        .feature-box p {
            color: #666;
            font-size: 0.9rem;
        }

        /* Jadwal Section */
        .jadwal-section {
            padding: 80px 20px;
            background: var(--white);
        }

        .prayer-schedule {
            max-width: 1200px;
            margin: 0 auto;
        }

        .prayer-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            margin-top: 50px;
        }

        .prayer-card {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 30px;
            border-radius: 15px;
            color: var(--white);
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            transition: all 0.3s;
        }

        .prayer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .prayer-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .prayer-card .time {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            font-family: 'Courier New', monospace;
        }

        .prayer-card p {
            font-size: 0.85rem;
            opacity: 0.9;
        }

        .prayer-info {
            background: var(--light);
            padding: 30px;
            border-radius: 15px;
            margin-top: 50px;
        }

        .prayer-info h3 {
            color: var(--primary);
            margin-bottom: 20px;
            font-size: 1.3rem;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .info-item {
            background: var(--white);
            padding: 15px;
            border-radius: 10px;
            border-left: 4px solid var(--accent);
        }

        .info-item p {
            color: #666;
            line-height: 1.6;
        }

        .keterangan {
            margin-top: 30px;
            padding: 20px;
            background: #fff3cd;
            border-radius: 10px;
            border-left: 4px solid #ffc107;
        }

        .keterangan p {
            margin: 8px 0;
            color: #856404;
        }

        /* Program Section */
        .program-section {
            padding: 80px 20px;
            background: var(--white);
        }

        .program-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .program-tabs {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 40px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .tab-button {
            background: var(--light);
            border: 2px solid transparent;
            color: var(--dark);
            padding: 10px 25px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
        }

        .tab-button:hover {
            border-color: var(--accent);
            color: var(--primary);
        }

        .tab-button.active {
            background: var(--primary);
            color: var(--white);
            border-color: var(--primary);
        }

        .program-content {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .program-card {
            display: flex;
            gap: 20px;
            background: var(--light);
            padding: 25px;
            border-radius: 15px;
            transition: all 0.3s;
            border-left: 4px solid var(--accent);
        }

        .program-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .program-image {
            font-size: 3rem;
            min-width: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .program-info h3 {
            color: var(--primary);
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .program-meta {
            display: flex;
            gap: 15px;
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 12px;
        }

        .program-info p {
            color: #666;
            line-height: 1.6;
            font-size: 0.9rem;
        }

        /* Donation Section */
        .donation-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--primary) 0%, #1e4620 100%);
            color: var(--white);
        }

        .donation-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .donation-content h2 {
            font-family: 'Amiri', serif;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .donation-content > p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0.95;
        }

        .ayat-quote {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 15px;
            font-size: 1.1rem;
            line-height: 2;
            margin-bottom: 40px;
            letter-spacing: 2px;
            border-left: 4px solid var(--accent);
        }

        .ayat-quote small {
            display: block;
            margin-top: 15px;
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .donation-methods {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-top: 40px;
        }

        .donation-method {
            background: rgba(255,255,255,0.95);
            padding: 25px;
            border-radius: 15px;
            color: var(--dark);
            transition: all 0.3s;
        }

        .donation-method:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .donation-method h4 {
            color: var(--primary);
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .account-number {
            font-family: 'Courier New', monospace;
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            letter-spacing: 2px;
            margin-bottom: 8px;
        }

        .donation-method p {
            color: #666;
            font-size: 0.9rem;
        }

        .donation-info {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 15px;
            margin-top: 40px;
        }

        .donation-info h3 {
            margin-bottom: 20px;
            font-size: 1.3rem;
        }

        .info-grid-donation {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            text-align: left;
        }

        .info-item-donation {
            background: rgba(255,255,255,0.05);
            padding: 15px;
            border-radius: 10px;
        }

        .info-item-donation h4 {
            font-size: 0.95rem;
            margin-bottom: 8px;
            opacity: 0.9;
        }

        .info-item-donation p {
            font-size: 0.85rem;
            opacity: 0.8;
            line-height: 1.5;
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
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .contact-info h3 {
            font-family: 'Amiri', serif;
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 30px;
        }

        .info-item {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .info-icon {
            font-size: 2rem;
            min-width: 50px;
        }

        .info-text h4 {
            color: var(--primary);
            margin-bottom: 8px;
        }

        .info-text p {
            color: #666;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .map-container {
            position: relative;
            height: 100%;
            min-height: 400px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 6rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .contact-form {
            background: var(--white);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .contact-form h3 {
            font-family: 'Amiri', serif;
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--primary);
            font-weight: 600;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-size: 0.95rem;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(44, 95, 45, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .btn-submit {
            background: var(--primary);
            color: var(--white);
            padding: 12px 35px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
            font-size: 1rem;
        }

        .btn-submit:hover {
            background: #1e4620;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(44, 95, 45, 0.3);
        }

        @media (max-width: 768px) {
            .hero-content {
                grid-template-columns: 1fr;
            }

            .facility-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .prayer-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .program-content {
                grid-template-columns: 1fr;
            }

            .donation-methods {
                grid-template-columns: 1fr;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .info-grid-donation {
                grid-template-columns: 1fr;
            }

            .contact-wrapper {
                grid-template-columns: 1fr;
            }

            .map-container {
                min-height: 300px;
            }
        }

        @media (max-width: 480px) {
            .hero-text h2 {
                font-size: 2rem;
            }

            .facility-grid {
                grid-template-columns: 1fr;
            }

            .prayer-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .program-tabs {
                flex-direction: column;
            }

            .tab-button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-info">
                <span>📞 (021) 1234-5678</span>
                <span>📧 info@annamirohfirdaus.or.id</span>
            </div>
            <div class="top-info">
                <a href="#" style="color: inherit; text-decoration: none;">Facebook</a>
                <a href="#" style="color: inherit; text-decoration: none;">Instagram</a>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <header class="main-header">
        <div class="navbar">
            <div class="brand">
                <div class="mosque-logo">🕌</div>
                <div class="brand-text">
                    <h1>An Namiroh Firdaus</h1>
                    <p>Masjid Kami, Rumah Kami</p>
                </div>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="<?= base_url('/') ?>" <?= current_url() == base_url('/') ? 'class="active"' : '' ?>>Beranda</a></li>
                    <li><a href="<?= base_url('/jadwal') ?>" <?= strpos(current_url(), '/jadwal') !== false ? 'class="active"' : '' ?>>Jadwal Sholat</a></li>
                    <li><a href="<?= base_url('/program') ?>" <?= strpos(current_url(), '/program') !== false ? 'class="active"' : '' ?>>Program</a></li>
                    <li><a href="<?= base_url('/donasi') ?>" <?= strpos(current_url(), '/donasi') !== false ? 'class="active"' : '' ?>>Donasi</a></li>
                    <li><a href="<?= base_url('/kontak') ?>" <?= strpos(current_url(), '/kontak') !== false ? 'class="active"' : '' ?>>Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>
