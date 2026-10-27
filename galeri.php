
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeri | MI Nurul Yaqin Tampumia</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --hijau: #176b45;
            --hijau-tua: #104c32;
            --hijau-muda: #edf6ef;
            --emas: #d8ae52;
            --putih: #ffffff;
            --abu: #f6f8f6;
            --teks: #29372f;
            --abu-teks: #6f7b73;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--abu);
            color: var(--teks);
            line-height: 1.7;
        }

        a {
            text-decoration: none;
        }

        /* =========================
           HEADER
        ========================= */

        header {
            background: white;
            box-shadow: 0 3px 15px rgba(0,0,0,.07);
            position: sticky;
            top: 0;
            z-index: 20;
        }

        .navbar {
            width: 90%;
            max-width: 1150px;
            min-height: 80px;
            margin: auto;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .brand img {
            width: 42px;
            height: 42px;
            object-fit: contain;
        }

        .brand h2 {
            color: var(--hijau-tua);
            font-size: 16px;
            line-height: 1.3;
        }

        .brand p {
            color: #7b857e;
            font-size: 10px;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 18px;
            flex-wrap: wrap;
        }

        nav a {
            color: #405046;
            font-size: 12px;
            font-weight: 500;
            transition: .25s;
        }

        nav a:hover,
        nav a.active {
            color: var(--hijau);
        }

        nav a.active {
            font-weight: 700;
            border-bottom: 2px solid var(--emas);
            padding-bottom: 5px;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 330px;

            background:
                linear-gradient(
                    90deg,
                    rgba(9,65,40,.94),
                    rgba(9,65,40,.55)
                ),
                url('../assets/images/foto11.jpeg') center/cover no-repeat;

            display: flex;
            align-items: center;
        }

        .hero-content {
            width: 90%;
            max-width: 1150px;
            margin: auto;
        }

        .hero-label {
            display: inline-block;
            color: var(--emas);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .hero h1 {
            color: white;
            font-size: clamp(32px, 5vw, 47px);
            line-height: 1.2;
            margin-bottom: 12px;
        }

        .hero p {
            color: #e5efe8;
            max-width: 600px;
            font-size: 14px;
        }

        /* =========================
           CONTENT
        ========================= */

        .container {
            width: 90%;
            max-width: 1150px;
            margin: auto;
        }

        .breadcrumb {
            padding: 18px 0;
            font-size: 11px;
            color: #7a857e;
        }

        .breadcrumb a {
            color: var(--hijau);
            font-weight: 600;
        }

        .section {
            padding: 30px 0 75px;
        }

        .heading {
            text-align: center;
            margin-bottom: 35px;
        }

        .heading span {
            color: #b2862d;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .heading h2 {
            color: var(--hijau-tua);
            font-size: 30px;
            margin-top: 5px;
        }

        .heading p {
            color: var(--abu-teks);
            font-size: 13px;
            margin-top: 5px;
        }

        /* =========================
           FEATURED PHOTO
        ========================= */

        .featured-photo {
            position: relative;
            height: 380px;
            border-radius: 22px;
            overflow: hidden;
            margin-bottom: 40px;
            box-shadow: 0 12px 30px rgba(16,76,50,.12);
        }

        .featured-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: .5s;
        }

        .featured-photo:hover img {
            transform: scale(1.04);
        }

        .featured-overlay {
            position: absolute;
            inset: 0;

            display: flex;
            align-items: flex-end;

            padding: 35px;

            background:
                linear-gradient(
                    transparent 35%,
                    rgba(0,0,0,.72)
                );
        }

        .featured-text {
            color: white;
        }

        .featured-text span {
            color: var(--emas);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .featured-text h3 {
            font-size: 27px;
            margin-top: 5px;
        }

        .featured-text p {
            color: #e8eee9;
            font-size: 12px;
            max-width: 650px;
        }

        /* =========================
           PHOTO GRID
        ========================= */

        .gallery-grid {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 20px;
        }

        .gallery-card {
            position: relative;
            height: 250px;

            overflow: hidden;
            border-radius: 17px;

            background: white;

            box-shadow:
                0 7px 22px rgba(16,76,50,.08);

            border: 1px solid #e4ebe5;

            cursor: pointer;
        }

        .gallery-card img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            display: block;

            transition:
                transform .5s ease,
                filter .5s ease;
        }

        .gallery-card:hover img {
            transform: scale(1.08);
            filter: brightness(.78);
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;

            display: flex;
            align-items: flex-end;

            padding: 20px;

            opacity: 0;

            background:
                linear-gradient(
                    transparent 30%,
                    rgba(7,48,30,.85)
                );

            transition: .35s;
        }

        .gallery-card:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-info {
            color: white;
        }

        .gallery-info .category {
            color: var(--emas);
            font-size: 9px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .gallery-info h3 {
            font-size: 15px;
            margin-top: 3px;
        }

        .gallery-info p {
            color: #dce9e0;
            font-size: 10px;
        }

        /* =========================
           SMALL PHOTO
        ========================= */

        .photo-number {
            position: absolute;
            top: 12px;
            left: 12px;

            width: 32px;
            height: 32px;

            display: grid;
            place-items: center;

            background: rgba(255,255,255,.92);

            color: var(--hijau);

            border-radius: 50%;

            font-size: 11px;
            font-weight: 700;

            z-index: 2;
        }

        /* =========================
           INFORMATION BOX
        ========================= */

        .gallery-info-box {
            margin-top: 45px;

            padding: 30px;

            background:
                linear-gradient(
                    135deg,
                    var(--hijau-tua),
                    var(--hijau)
                );

            border-radius: 18px;

            color: white;

            text-align: center;
        }

        .gallery-info-box h3 {
            font-size: 20px;
            margin-bottom: 6px;
        }

        .gallery-info-box p {
            color: #dcebe2;
            font-size: 12px;
            max-width: 650px;
            margin: auto;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: var(--hijau-tua);
            color: white;
            padding: 30px 0;
        }

        .footer-content {
            width: 90%;
            max-width: 1150px;
            margin: auto;

            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 15px;
            flex-wrap: wrap;
        }

        footer h3 {
            font-size: 16px;
        }

        footer p {
            color: #d7e5dc;
            font-size: 11px;
            margin-top: 4px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 850px) {

            .navbar {
                padding: 15px 0;
                flex-direction: column;
                align-items: flex-start;
            }

            nav {
                width: 100%;
                justify-content: flex-start;
                gap: 12px 17px;
            }

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .featured-photo {
                height: 320px;
            }
        }

        @media (max-width: 550px) {

            .hero {
                min-height: 280px;
            }

            .hero h1 {
                font-size: 30px;
            }

            .heading h2 {
                font-size: 25px;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .gallery-card {
                height: 250px;
            }

            .featured-photo {
                height: 280px;
                border-radius: 17px;
            }

            .featured-overlay {
                padding: 22px;
            }

            .featured-text h3 {
                font-size: 21px;
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

        <a href="../index.php" class="brand">

            <img
                src="../assets/images/LOGO.jpeg"
                alt="Logo MI Nurul Yaqin"
            >

            <div>

                <h2>MI Nurul Yaqin Tampumia</h2>

                <p>Madrasah Ibtidaiyah</p>

            </div>

        </a>


        <nav>

            <a href="../index.php">
                Beranda
            </a>

            <a href="profil.php">
                Profil
            </a>

            <a href="visi-misi.php">
                Visi &amp; Misi
            </a>

            <a href="berita.php">
                Berita
            </a>

            <a href="galeri.php" class="active">
                Galeri
            </a>

            <a href="kontak.php">
                Kontak
            </a>

        </nav>

    </div>

</header>


<!-- =========================
     HERO
========================= -->

<section class="hero">

    <div class="hero-content">

        <span class="hero-label">
            DOKUMENTASI MADRASAH
        </span>

        <h1>
            Galeri Kegiatan
        </h1>

        <p>
            Kumpulan dokumentasi kegiatan, aktivitas siswa,
            dan suasana MI Nurul Yaqin Tampumia.
        </p>

    </div>

</section>


<!-- BREADCRUMB -->

<div class="container">

    <div class="breadcrumb">

        <a href="../index.php">
            Beranda
        </a>

        &nbsp; / &nbsp;

        Galeri

    </div>

</div>


<!-- =========================
     GALERI
========================= -->

<section class="section">

    <div class="container">


        <div class="heading">

            <span>
                Dokumentasi
            </span>

            <h2>
                Galeri MI Nurul Yaqin
            </h2>

            <p>
                Lihat berbagai kegiatan dan momen
                di lingkungan madrasah.
            </p>

        </div>


        <!-- FOTO UTAMA -->

        <div class="featured-photo">

            <img
                src="../assets/images/foto14.jpeg"
                alt="Kegiatan MI Nurul Yaqin Tampumia"
            >

            <div class="featured-overlay">

                <div class="featured-text">

                    <span>
                        FOTO UTAMA
                    </span>

                    <h3>
                        MI Nurul Yaqin Tampumia
                    </h3>

                    <p>
                        Dokumentasi kegiatan dan suasana
                        lingkungan madrasah.
                    </p>

                </div>

            </div>

        </div>


        <!-- GRID FOTO -->

        <div class="gallery-grid">


            <!-- FOTO 1 -->

            <div class="gallery-card">

                <span class="photo-number">
                    01
                </span>

                <img
                    src="../assets/images/foto10.jpeg"
                    alt="Kegiatan madrasah"
                >

                <div class="gallery-overlay">

                    <div class="gallery-info">

                        <span class="category">
                            Kegiatan
                        </span>

                        <h3>
                            Aktivitas Madrasah
                        </h3>

                        <p>
                            Kegiatan warga madrasah.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FOTO 2 -->

            <div class="gallery-card">

                <span class="photo-number">
                    02
                </span>

                <img
                    src="../assets/images/foto4.jpeg"
                    alt="Kegiatan siswa"
                >

                <div class="gallery-overlay">

                    <div class="gallery-info">

                        <span class="category">
                            Siswa
                        </span>

                        <h3>
                            Aktivitas Siswa
                        </h3>

                        <p>
                            Kegiatan peserta didik.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FOTO 3 -->

            <div class="gallery-card">

                <span class="photo-number">
                    03
                </span>

                <img
                    src="../assets/images/foto14.jpeg"
                    alt="Pembelajaran siswa"
                >

                <div class="gallery-overlay">

                    <div class="gallery-info">

                        <span class="category">
                            Pembelajaran
                        </span>

                        <h3>
                            Kegiatan Belajar
                        </h3>

                        <p>
                            Dokumentasi pembelajaran.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FOTO 4 -->

            <div class="gallery-card">

                <span class="photo-number">
                    04
                </span>

                <img
                    src="../assets/images/foto13.jpeg"
                    alt="Lingkungan sekolah"
                >

                <div class="gallery-overlay">

                    <div class="gallery-info">

                        <span class="category">
                            Lingkungan
                        </span>

                        <h3>
                            Lingkungan Madrasah
                        </h3>

                        <p>
                            Suasana MI Nurul Yaqin.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FOTO 5 -->

            <div class="gallery-card">

                <span class="photo-number">
                    05
                </span>

                <img
                    src="../assets/images/foto1.jpeg"
                    alt="Kegiatan sekolah"
                >

                <div class="gallery-overlay">

                    <div class="gallery-info">

                        <span class="category">
                            Sekolah
                        </span>

                        <h3>
                            Kegiatan Sekolah
                        </h3>

                        <p>
                            Momen kegiatan madrasah.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FOTO 6 -->

            <div class="gallery-card">

                <span class="photo-number">
                    06
                </span>

                <img
                    src="../assets/images/foto15.jpeg"
                    alt="Peserta didik"
                >

                <div class="gallery-overlay">

                    <div class="gallery-info">

                        <span class="category">
                            Peserta Didik
                        </span>

                        <h3>
                            Momen Siswa
                        </h3>

                        <p>
                            Aktivitas peserta didik.
                        </p>

                    </div>

                </div>

            </div>


        </div>


        <!-- INFORMASI -->

        <div class="gallery-info-box">

            <h3>
                Dokumentasi MI Nurul Yaqin Tampumia
            </h3>

            <p>
                Galeri ini berisi dokumentasi kegiatan,
                aktivitas siswa, dan berbagai momen
                di lingkungan MI Nurul Yaqin Tampumia.
            </p>

        </div>


    </div>

</section>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <div class="footer-content">

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