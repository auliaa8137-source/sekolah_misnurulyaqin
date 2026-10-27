
<?php
// Beranda MI Nurul Yaqin Tampumia
?>
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MI Nurul Yaqin Tampumia</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f7faf8;
            color: #263b31;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }


        /* =========================
           HEADER
        ========================= */

        header {
            width: 100%;
            height: 82px;

            background: #ffffff;

            display: flex;
            align-items: center;

            position: sticky;
            top: 0;
            z-index: 1000;

            box-shadow: 0 3px 20px rgba(0,0,0,0.08);
        }

        .navbar {
            width: 92%;
            max-width: 1400px;

            margin: auto;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }


        /* LOGO */

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;

            flex-shrink: 0;
        }

        .brand img {
            width: 48px;
            height: 48px;

            object-fit: contain;
        }

        .brand-text h2 {
            color: #104c32;

            font-size: 16px;
            font-weight: 800;

            line-height: 1.2;
        }

        .brand-text p {
            color: #78847d;

            font-size: 10px;
            margin-top: 3px;
        }


        /* MENU KANAN */

        nav {
            margin-left: auto;
        }

        nav ul {
            list-style: none;

            display: flex;
            align-items: center;
            justify-content: flex-end;

            gap: 8px;
        }

        nav ul li a {
            display: block;

            color: #34463d;

            font-size: 12px;
            font-weight: 600;

            padding: 11px 15px;

            border-radius: 10px;

            transition: 0.25s;
        }

        nav ul li a:hover {
            color: #176b45;
            background: #edf6ef;
        }

        nav ul li a.active {
            color: #ffffff;
            background: #d9a83e;

            box-shadow: 0 5px 15px rgba(216,174,82,0.25);
        }


        /* =========================
           HERO BERANDA
        ========================= */

        .hero {
            width: 100%;
            min-height: calc(100vh - 82px);

            background:
                linear-gradient(
                    90deg,
                    rgba(5, 48, 31, 0.94) 0%,
                    rgba(7, 66, 42, 0.78) 42%,
                    rgba(7, 66, 42, 0.25) 100%
                ),
                url('assets/images/foto7.jpeg') center center / cover no-repeat;

            display: flex;
            align-items: center;
        }


        .hero-content {
            width: 92%;
            max-width: 1400px;

            margin: auto;

            padding: 70px 0;
        }


        .welcome {
            display: inline-block;

            padding: 9px 18px;

            border-radius: 30px;

            background: #f4d487;
            color: #76551c;

            font-size: 11px;
            font-weight: 800;

            letter-spacing: 1.2px;

            margin-bottom: 22px;
        }


        .hero h1 {
            max-width: 850px;

            color: white;

            font-size: clamp(38px, 5vw, 72px);

            line-height: 1.08;

            font-weight: 800;

            margin-bottom: 22px;
        }


        .hero h1 span {
            color: #f1cb72;
        }


        .hero-description {
            max-width: 680px;

            color: #e5eee9;

            font-size: 15px;

            line-height: 1.9;

            margin-bottom: 32px;
        }


        /* TOMBOL */

        .hero-buttons {
            display: flex;
            gap: 14px;

            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            min-width: 160px;

            padding: 13px 22px;

            border-radius: 10px;

            font-size: 12px;
            font-weight: 700;

            transition: 0.25s;
        }

        .btn-primary {
            background: #e1b34f;
            color: #ffffff;
        }

        .btn-primary:hover {
            background: #c99732;
            transform: translateY(-3px);
        }

        .btn-outline {
            border: 1.5px solid rgba(255,255,255,0.8);
            color: white;
            background: rgba(255,255,255,0.08);
        }

        .btn-outline:hover {
            background: white;
            color: #176b45;
            transform: translateY(-3px);
        }


        /* =========================
           INFORMASI
        ========================= */

        .section {
            width: 92%;
            max-width: 1400px;

            margin: auto;

            padding: 85px 0;
        }


        .section-title {
            text-align: center;

            margin-bottom: 45px;
        }

        .section-title span {
            color: #b2852c;

            font-size: 10px;
            font-weight: 800;

            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .section-title h2 {
            color: #104c32;

            font-size: 30px;

            margin-top: 6px;
        }

        .section-title p {
            color: #78847d;

            font-size: 12px;

            margin-top: 6px;
        }


        /* =========================
           KARTU INFORMASI
        ========================= */

        .info-grid {
            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 22px;
        }

        .info-card {
            background: white;

            padding: 30px 22px;

            border-radius: 18px;

            text-align: center;

            border: 1px solid #e5ece7;

            box-shadow: 0 8px 25px rgba(16,76,50,0.06);

            transition: 0.25s;
        }

        .info-card:hover {
            transform: translateY(-6px);

            box-shadow: 0 15px 30px rgba(16,76,50,0.12);
        }

        .icon {
            width: 55px;
            height: 55px;

            margin: 0 auto 15px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 15px;

            background: #edf6ef;

            color: #176b45;

            font-size: 22px;
        }

        .info-card h3 {
            color: #104c32;

            font-size: 15px;

            margin-bottom: 7px;
        }

        .info-card p {
            color: #77837b;

            font-size: 11px;

            line-height: 1.7;
        }


        /* =========================
           BERITA
        ========================= */

        .news-section {
            background: #edf6ef;
        }

        .news-grid {
            width: 92%;
            max-width: 1400px;

            margin: auto;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }

        .news-card {
            overflow: hidden;

            background: white;

            border-radius: 17px;

            box-shadow: 0 7px 25px rgba(16,76,50,0.07);

            border: 1px solid #e2ebe4;

            transition: 0.25s;
        }

        .news-card:hover {
            transform: translateY(-6px);
        }

        .news-card img {
            width: 100%;
            height: 210px;

            display: block;

            object-fit: cover;
        }

        .news-content {
            padding: 22px;
        }

        .news-label {
            display: inline-block;

            color: #176b45;

            background: #edf6ef;

            padding: 5px 10px;

            border-radius: 20px;

            font-size: 9px;
            font-weight: 700;
        }

        .news-content h3 {
            color: #104c32;

            font-size: 16px;

            line-height: 1.5;

            margin: 12px 0 7px;
        }

        .news-content p {
            color: #78847d;

            font-size: 11px;

            line-height: 1.7;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            width: 100%;

            background: #0d422c;

            color: white;

            padding: 35px 0;
        }

        .footer-inner {
            width: 92%;
            max-width: 1400px;

            margin: auto;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;
        }

        .footer-inner h3 {
            font-size: 15px;
        }

        .footer-inner p {
            color: #cfe0d6;

            font-size: 10px;

            margin-top: 5px;
        }


        /* =========================
           RESPONSIVE HP
        ========================= */

        @media (max-width: 900px) {

            header {
                height: auto;
            }

            .navbar {
                width: 92%;

                padding: 15px 0;

                flex-direction: column;

                align-items: flex-start;
            }

            nav {
                width: 100%;

                margin-left: 0;

                overflow-x: auto;
            }

            nav ul {
                width: max-content;

                justify-content: flex-start;
            }

            .hero {
                min-height: 600px;
            }

            .info-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .news-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        @media (max-width: 600px) {

            .brand img {
                width: 40px;
                height: 40px;
            }

            .brand-text h2 {
                font-size: 14px;
            }

            .hero-content {
                width: 90%;
            }

            .hero h1 {
                font-size: 38px;
            }

            .hero-description {
                font-size: 13px;
            }

            .info-grid,
            .news-grid {
                grid-template-columns: 1fr;
            }

            .section {
                width: 90%;
                padding: 60px 0;
            }

            .footer-inner {
                flex-direction: column;

                align-items: flex-start;
            }

        }

    </style>

</head>
<script src="assets/js/script.js"></script>


<body>


<!-- =========================
     HEADER
========================= -->

<header>

    <div class="navbar">


        <!-- LOGO DI KIRI -->

        <a href="index.php" class="brand">

            <img
                src="assets/images/LOGO.jpeg"
                alt="Logo MI Nurul Yaqin Tampumia"
            >

            <div class="brand-text">

                <h2>
                    MI Nurul Yaqin Tampumia
                </h2>

                <p>
                    Madrasah Ibtidaiyah
                </p>

            </div>

        </a>


        <!-- MENU DI KANAN -->

        <nav>

            <ul>

                <li>
                    <a href="index.php" class="active">
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="pages/profil.php">
                        Profil
                    </a>
                </li>

                <li>
                    <a href="pages/visi-misi.php">
                        Visi &amp; Misi
                    </a>
                </li>

                <li>
                    <a href="pages/berita.php">
                        Berita
                    </a>
                </li>

                <li>
                    <a href="pages/galeri.php">
                        Galeri
                    </a>
                </li>

                <li>
                    <a href="pages/kontak.php">
                        Kontak
                    </a>
                </li>

            </ul>

        </nav>

    </div>

</header>



<!-- =========================
     HERO
========================= -->

<section class="hero">

    <div class="hero-content">


        <span class="welcome">
            SELAMAT DATANG
        </span>


        <h1>
            MI Nurul Yaqin
            <span>Tampumia</span>
        </h1>


        <p class="hero-description">

            Mewujudkan generasi yang berilmu,
            berakhlak mulia, mandiri dan berprestasi
            melalui pendidikan yang berkualitas.

        </p>


        <div class="hero-buttons">

            <a
                href="pages/profil.php"
                class="btn btn-primary"
            >
                Profil Madrasah →
            </a>


            <a
                href="pages/galeri.php"
                class="btn btn-outline"
            >
                Lihat Galeri
            </a>

        </div>


    </div>

</section>



<!-- =========================
     INFORMASI MADRASAH
========================= -->

<section class="section">


    <div class="section-title">

        <span>
            LAYANAN MADRASAH
        </span>

        <h2>
            Informasi Madrasah
        </h2>

        <p>
            Informasi penting mengenai MI Nurul Yaqin Tampumia
        </p>

    </div>


    <div class="info-grid">


        <div class="info-card">

            <div class="icon">
                🏫
            </div>

            <h3>
                Profil Madrasah
            </h3>

            <p>
                Mengenal lebih dekat MI Nurul Yaqin Tampumia,
                sejarah dan informasi madrasah.
            </p>

        </div>


        <div class="info-card">

            <div class="icon">
                📖
            </div>

            <h3>
                Visi &amp; Misi
            </h3>

            <p>
                Mengetahui visi dan misi sebagai arah
                pengembangan pendidikan madrasah.
            </p>

        </div>


        <div class="info-card">

            <div class="icon">
                📰
            </div>

            <h3>
                Berita
            </h3>

            <p>
                Informasi terbaru mengenai kegiatan
                dan aktivitas madrasah.
            </p>

        </div>


        <div class="info-card">

            <div class="icon">
                📷
            </div>

            <h3>
                Galeri
            </h3>

            <p>
                Dokumentasi kegiatan dan berbagai
                momen di madrasah.
            </p>

        </div>


    </div>

</section>



<!-- =========================
     BERITA TERBARU
========================= -->

<section class="news-section">

    <div class="section">


        <div class="section-title">

            <span>
                INFORMASI TERKINI
            </span>

            <h2>
                Berita Terbaru
            </h2>

            <p>
                Kegiatan dan informasi terbaru madrasah
            </p>

        </div>


        <div class="news-grid">


            <article class="news-card">

                <img
                    src="assets/images/foto2.jpeg"
                    alt="Kegiatan siswa"
                >

                <div class="news-content">

                    <span class="news-label">
                        KEGIATAN SISWA
                    </span>

                    <h3>
                        Kegiatan Siswa MI Nurul Yaqin
                    </h3>

                    <p>
                        Dokumentasi kegiatan siswa
                        di lingkungan madrasah.
                    </p>

                </div>

            </article>


            <article class="news-card">

                <img
                    src="assets/images/foto1.jpeg"
                    alt="Kegiatan pembelajaran"
                >

                <div class="news-content">

                    <span class="news-label">
                        PEMBELAJARAN
                    </span>

                    <h3>
                        Kegiatan Pembelajaran
                    </h3>

                    <p>
                        Aktivitas pembelajaran peserta
                        didik di madrasah.
                    </p>

                </div>

            </article>


            <article class="news-card">

                <img
                    src="assets/images/foto13.jpeg"
                    alt="Aktivitas madrasah"
                >

                <div class="news-content">

                    <span class="news-label">
                        MADRASAH
                    </span>

                    <h3>
                        Aktivitas Madrasah
                    </h3>

                    <p>
                        Berbagai aktivitas dan kegiatan
                        warga MI Nurul Yaqin Tampumia.
                    </p>

                </div>

            </article>


        </div>

    </div>

</section>



<!-- =========================
     FOOTER
========================= -->

<footer>

    <div class="footer-inner">


        <div>

            <h3>
                MI Nurul Yaqin Tampumia
            </h3>

            <p>
                Mendidik dengan ilmu, membina dengan akhlak.
            </p>

        </div>


        <p>
            © 2026 MI Nurul Yaqin Tampumia
        </p>


    </div>

</footer>


</body>

</html>
```