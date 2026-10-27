
<?php
// Halaman Kontak MI Nurul Yaqin Tampumia
?>
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kontak | MI Nurul Yaqin Tampumia</title>

    <link
        href="https://www.bing.com/maps/search?FORM=HDRSC6&q=lokasi+mi+nurul+yaqin+tampumia&cp=-3.231789%7E120.174972&lvl=19.8&style=r&dir=-45"
    >

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f6f9f7;
            color: #263b31;
        }

        a {
            text-decoration: none;
        }


        /* =========================
           HEADER
        ========================= */

        header {
            width: 100%;
            min-height: 82px;

            background: white;

            display: flex;
            align-items: center;

            box-shadow: 0 3px 18px rgba(0,0,0,.07);

            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar {
            width: 92%;
            max-width: 1400px;

            margin: auto;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }


        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand img {
            width: 45px;
            height: 45px;

            object-fit: contain;
        }

        .brand-text h2 {
            color: #104c32;

            font-size: 15px;
            font-weight: 800;
        }

        .brand-text p {
            color: #7b867f;
            font-size: 10px;
        }


        /* MENU */

        nav {
            margin-left: auto;
        }

        nav ul {
            list-style: none;

            display: flex;
            align-items: center;

            gap: 8px;
        }

        nav a {
            display: block;

            color: #34463d;

            font-size: 12px;
            font-weight: 600;

            padding: 10px 14px;

            border-radius: 9px;

            transition: .25s;
        }

        nav a:hover {
            color: #176b45;
            background: #edf6ef;
        }

        nav a.active {
            color: white;
            background: #d9a83e;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            width: 100%;
            min-height: 310px;

            background:
                linear-gradient(
                    90deg,
                    rgba(8,65,42,.94),
                    rgba(8,65,42,.55)
                ),
                url('../assets/images/foto10.jpeg')
                center / cover no-repeat;

            display: flex;
            align-items: center;
        }

        .hero-content {
            width: 92%;
            max-width: 1400px;

            margin: auto;
        }

        .hero-label {
            color: #e6c56d;

            font-size: 11px;
            font-weight: 800;

            letter-spacing: 2px;
        }

        .hero h1 {
            color: white;

            font-size: clamp(35px, 5vw, 52px);

            margin: 10px 0;
        }

        .hero p {
            max-width: 650px;

            color: #e0ebe4;

            font-size: 13px;
            line-height: 1.8;
        }


        /* =========================
           KONTEN
        ========================= */

        .section {
            width: 92%;
            max-width: 1400px;

            margin: auto;

            padding: 70px 0;
        }

        .section-title {
            text-align: center;

            margin-bottom: 40px;
        }

        .section-title span {
            color: #b2862d;

            font-size: 10px;
            font-weight: 800;

            letter-spacing: 2px;
        }

        .section-title h2 {
            color: #104c32;

            font-size: 30px;

            margin-top: 5px;
        }

        .section-title p {
            color: #7a857e;

            font-size: 12px;

            margin-top: 5px;
        }


        /* =========================
           CONTACT GRID
        ========================= */

        .contact-grid {
            display: grid;

            grid-template-columns: .85fr 1.15fr;

            gap: 28px;

            align-items: stretch;
        }


        /* =========================
           INFO KIRI
        ========================= */

        .contact-info {
            background: white;

            border-radius: 20px;

            padding: 30px;

            border: 1px solid #e2ebe5;

            box-shadow:
                0 10px 30px rgba(16,76,50,.07);
        }

        .contact-info h3 {
            color: #104c32;

            font-size: 21px;

            margin-bottom: 8px;
        }

        .contact-info > p {
            color: #78847d;

            font-size: 12px;

            line-height: 1.8;

            margin-bottom: 25px;
        }


        /* ITEM KONTAK */

        .contact-item {
            display: flex;

            align-items: flex-start;

            gap: 14px;

            padding: 16px 0;

            border-bottom: 1px solid #edf1ee;
        }

        .contact-item:last-child {
            border-bottom: none;
        }

        .contact-icon {
            width: 43px;
            height: 43px;

            flex-shrink: 0;

            border-radius: 12px;

            background: #edf6ef;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 18px;
        }

        .contact-item h4 {
            color: #104c32;

            font-size: 13px;

            margin-bottom: 3px;
        }

        .contact-item p {
            color: #78847d;

            font-size: 11px;

            line-height: 1.6;
        }


        /* =========================
           MAPS
        ========================= */

        .map-card {
            overflow: hidden;

            min-height: 510px;

            background: white;

            border-radius: 20px;

            border: 1px solid #e2ebe5;

            box-shadow:
                0 10px 30px rgba(16,76,50,.07);
        }

        .map-title {
            padding: 20px 24px;

            display: flex;

            align-items: center;
            justify-content: space-between;

            border-bottom: 1px solid #edf1ee;
        }

        .map-title h3 {
            color: #104c32;

            font-size: 17px;
        }

        .map-title span {
            color: #b2862d;

            font-size: 10px;
            font-weight: 700;
        }

        .map-frame {
            width: 100%;

            height: 440px;
        }

        .map-frame iframe {
            width: 100%;
            height: 100%;

            border: 0;
        }


        /* =========================
           PESAN / CTA
        ========================= */

        .contact-bottom {
            margin-top: 30px;

            padding: 28px;

            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    #0d422c,
                    #176b45
                );

            text-align: center;

            color: white;
        }

        .contact-bottom h3 {
            font-size: 19px;

            margin-bottom: 5px;
        }

        .contact-bottom p {
            color: #dcebe2;

            font-size: 11px;

            margin-bottom: 17px;
        }

        .contact-button {
            display: inline-block;

            padding: 10px 20px;

            background: #e1b34f;

            color: white;

            border-radius: 8px;

            font-size: 11px;
            font-weight: 700;

            transition: .25s;
        }

        .contact-button:hover {
            background: #c99732;

            transform: translateY(-2px);
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #0d422c;

            color: white;

            padding: 32px 0;
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

        footer h3 {
            font-size: 15px;
        }

        footer p {
            color: #cfe0d6;

            font-size: 10px;

            margin-top: 4px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .navbar {
                padding: 15px 0;

                flex-direction: column;

                align-items: flex-start;

                gap: 12px;
            }

            nav {
                width: 100%;

                overflow-x: auto;
            }

            nav ul {
                width: max-content;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .map-card {
                min-height: 400px;
            }

            .map-frame {
                height: 350px;
            }

        }


        @media (max-width: 550px) {

            .hero {
                min-height: 280px;
            }

            .hero h1 {
                font-size: 34px;
            }

            .section {
                width: 90%;
                padding: 55px 0;
            }

            .contact-info {
                padding: 22px;
            }

            .map-title {
                padding: 17px;
            }

            .map-frame {
                height: 300px;
            }

            .footer-inner {
                flex-direction: column;

                align-items: flex-start;
            }

        }

    </style>

</head>


<body>


<!-- =========================
     HEADER
========================= -->

<header>

    <div class="navbar">


        <!-- LOGO -->

        <a href="../index.php" class="brand">

            <img
                src="../assets/images/LOGO.jpeg"
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


        <!-- MENU -->

        <nav>

            <ul>

                <li>
                    <a href="../index.php">
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="profil.php">
                        Profil
                    </a>
                </li>

                <li>
                    <a href="visi-misi.php">
                        Visi &amp; Misi
                    </a>
                </li>

                <li>
                    <a href="berita.php">
                        Berita
                    </a>
                </li>

                <li>
                    <a href="galeri.php">
                        Galeri
                    </a>
                </li>

                <li>
                    <a href="kontak.php" class="active">
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

        <span class="hero-label">
            HUBUNGI KAMI
        </span>

        <h1>
            Kontak Madrasah
        </h1>

        <p>
            Silakan hubungi MI Nurul Yaqin Tampumia
            untuk mendapatkan informasi mengenai
            madrasah, kegiatan, dan layanan pendidikan.
        </p>

    </div>

</section>



<!-- =========================
     KONTAK
========================= -->

<section class="section">


    <div class="section-title">

        <span>
            INFORMASI KONTAK
        </span>

        <h2>
            Hubungi MI Nurul Yaqin
        </h2>

        <p>
            Temukan informasi kontak dan lokasi madrasah
        </p>

    </div>



    <div class="contact-grid">


        <!-- =====================
             INFORMASI KIRI
        ====================== -->

        <div class="contact-info">

            <h3>
                Informasi Madrasah
            </h3>

            <p>
                Jika ingin mengetahui lebih lanjut tentang
                MI Nurul Yaqin Tampumia, silakan menggunakan
                informasi kontak berikut.
            </p>


            <div class="contact-item">

                <div class="contact-icon">
                    📍
                </div>

                <div>

                    <h4>
                        Alamat
                    </h4>

                    <p>
                        MI Nurul Yaqin Tampumia<br>
                        Tampumia, Sulawesi Selatan
                    </p>

                </div>

            </div>


            <div class="contact-item">

                <div class="contact-icon">
                    📞
                </div>

                <div>

                    <h4>
                        Telepon
                    </h4>

                    <p>
                        087750939333.
                    </p>

                </div>

            </div>


            <div class="contact-item">

                <div class="contact-icon">
                    ✉️
                </div>

                <div>

                    <h4>
                        Email
                    </h4>

                    <p>
                        misnurulyaqin@gmail.com
                    </p>

                </div>

            </div>


            <div class="contact-item">

                <div class="contact-icon">
                    🕘
                </div>

                <div>

                    <h4>
                        Jam Pelayanan
                    </h4>

                    <p>
                        Senin – Jumat<br>
                        08.00 – 14.00 WITA
                    </p>

                </div>

            </div>


        </div>



        <!-- =====================
             GOOGLE MAPS
        ====================== -->

        <div class="map-card">


            <div class="map-title">

                <h3>
                    Lokasi Madrasah
                </h3>

                <span>
                    PETA LOKASI
                </span>

            </div>


            <div class="map-frame">

                <iframe
                    src="https://www.google.com/maps?q=MI%20Nurul%20Yaqin%20Tampumia&output=embed"
                    loading="lazy"
                    allowfullscreen>
                </iframe>

            </div>


        </div>


    </div>



    <!-- =====================
         BOTTOM CTA
    ====================== -->

    <div class="contact-bottom">

        <h3>
            Ingin mengetahui lebih banyak?
        </h3>

        <p>
            Lihat profil dan informasi lengkap
            MI Nurul Yaqin Tampumia.
        </p>

        <a
            href="profil.php"
            class="contact-button"
        >
            Lihat Profil Madrasah →
        </a>

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