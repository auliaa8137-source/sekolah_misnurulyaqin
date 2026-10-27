```php
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Berita | MI Nurul Yaqin Tampumia</title>

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

        /* HEADER */
        header {
            background: white;
            box-shadow: 0 3px 15px rgba(0,0,0,.07);
            position: sticky;
            top: 0;
            z-index: 10;
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

        /* HERO */
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

        /* KONTEN */
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
            padding: 35px 0 70px;
        }

        .heading {
            text-align: center;
            margin-bottom: 38px;
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

        /* BERITA UTAMA */
        .featured {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(16,76,50,.08);
            border: 1px solid #e5ece6;
            margin-bottom: 45px;
        }

        .featured-image {
            min-height: 330px;
            overflow: hidden;
        }

        .featured-image img {
            width: 100%;
            height: 100%;
            min-height: 330px;
            object-fit: cover;
            display: block;
            transition: .4s;
        }

        .featured:hover .featured-image img {
            transform: scale(1.03);
        }

        .featured-content {
            padding: 35px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .badge {
            display: inline-block;
            width: fit-content;
            padding: 5px 12px;
            border-radius: 30px;
            background: var(--hijau-muda);
            color: var(--hijau);
            font-size: 10px;
            font-weight: 700;
            margin-bottom: 13px;
        }

        .date {
            color: #909991;
            font-size: 11px;
            margin-bottom: 10px;
        }

        .featured-content h3 {
            color: var(--hijau-tua);
            font-size: 23px;
            line-height: 1.45;
            margin-bottom: 12px;
        }

        .featured-content p {
            color: var(--abu-teks);
            font-size: 13px;
            margin-bottom: 20px;
        }

        .read-more {
            display: inline-block;
            width: fit-content;
            background: var(--hijau);
            color: white;
            padding: 9px 17px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 600;
            transition: .25s;
        }

        .read-more:hover {
            background: var(--hijau-tua);
            transform: translateY(-2px);
        }

        /* GRID BERITA */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .news-card {
            background: white;
            border: 1px solid #e5ece6;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 7px 22px rgba(16,76,50,.06);
            transition: .25s;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(16,76,50,.12);
        }

        .news-image {
            height: 190px;
            overflow: hidden;
        }

        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: .4s;
        }

        .news-card:hover .news-image img {
            transform: scale(1.05);
        }

        .news-content {
            padding: 20px;
        }

        .news-content .badge {
            margin-bottom: 8px;
        }

        .news-content h3 {
            color: var(--hijau-tua);
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .news-content p {
            color: var(--abu-teks);
            font-size: 12px;
            margin-bottom: 14px;
        }

        .news-date {
            color: #929b94;
            font-size: 10px;
            margin-bottom: 12px;
        }

        .link {
            color: var(--hijau);
            font-size: 11px;
            font-weight: 700;
        }

        .link:hover {
            color: #b2862d;
        }

        /* INFORMASI */
        .info-box {
            margin-top: 45px;
            padding: 25px;
            background: linear-gradient(
                135deg,
                var(--hijau-tua),
                var(--hijau)
            );
            border-radius: 17px;
            color: white;
            text-align: center;
        }

        .info-box h3 {
            font-size: 19px;
            margin-bottom: 5px;
        }

        .info-box p {
            color: #dcebe1;
            font-size: 12px;
        }

        /* FOOTER */
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

        /* RESPONSIVE */
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

            .featured {
                grid-template-columns: 1fr;
            }

            .featured-image,
            .featured-image img {
                min-height: 260px;
            }

            .news-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 550px) {

            .hero {
                min-height: 280px;
            }

            .hero h1 {
                font-size: 30px;
            }

            .featured-content {
                padding: 25px;
            }

            .featured-content h3 {
                font-size: 20px;
            }

            .news-grid {
                grid-template-columns: 1fr;
            }

            .news-image {
                height: 210px;
            }

            .heading h2 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="navbar">

        <a href="../index.php" class="brand">

            <img
                src="../assets/images/LOGO.jpeg"
                alt="Logo MI Nurul Yaqin "
            >

            <div>
                <h2>MI Nurul Yaqin Tampumia</h2>
                <p>Madrasah Ibtidaiyah</p>
            </div>

        </a>

        <nav>
            <a href="../index.php">Beranda</a>
            <a href="profil.php">Profil</a>
            <a href="visi-misi.php">Visi &amp; Misi</a>
            <a href="berita.php" class="active">Berita</a>
            <a href="galeri.php">Galeri</a>
            <a href="kontak.php">Kontak</a>
        </nav>

    </div>
</header>


<section class="hero">

    <div class="hero-content">

        <span class="hero-label">
            INFORMASI MADRASAH
        </span>

        <h1>Berita &amp; Kegiatan</h1>

        <p>
            Informasi terbaru mengenai kegiatan, aktivitas,
            dan perkembangan MI Nurul Yaqin Tampumia.
        </p>

    </div>

</section>


<div class="container">

    <div class="breadcrumb">
        <a href="../index.php">Beranda</a>
        &nbsp; / &nbsp;
        Berita
    </div>

</div>


<section class="section">

    <div class="container">

        <div class="heading">

            <span>Informasi Terbaru</span>

            <h2>Berita Madrasah</h2>

            <p>
                Berbagai informasi dan kegiatan terbaru
                MI Nurul Yaqin Tampumia.
            </p>

        </div>


        <!-- BERITA UTAMA -->

        <article class="featured">

            <div class="featured-image">

                <img
                    src="../assets/images/foto3.jpeg"
                    alt="Kegiatan MI Nurul Yaqin Tampumia"
                >

            </div>


            <div class="featured-content">

                <span class="badge">
                    BERITA UTAMA
                </span>

                <div class="date">
                    2026 • Kegiatan Madrasah
                </div>

                <h3>
                    Kegiatan Siswa MI Nurul Yaqin Tampumia
                </h3>

                <p>
                    Berbagai kegiatan yang dilaksanakan di madrasah
                    menjadi bagian dari proses pembelajaran dan
                    pengembangan potensi peserta didik.
                </p>

                <a href="#" class="read-more">
                    Baca Selengkapnya →
                </a>

            </div>

        </article>


        <!-- BERITA LAINNYA -->

        <div class="heading">

            <span>Artikel &amp; Kegiatan</span>

            <h2>Berita Terbaru</h2>

        </div>


        <div class="news-grid">


            <!-- BERITA 1 -->

            <article class="news-card">

                <div class="news-image">

                    <img
                        src="../assets/images/foto1.jpeg"
                        alt="Kegiatan pembelajaran siswa"
                    >

                </div>

                <div class="news-content">

                    <span class="badge">
                        PEMBELAJARAN
                    </span>

                    <div class="news-date">
                        2026 • Kegiatan Sekolah
                    </div>

                    <h3>
                        Kegiatan Pembelajaran Siswa
                    </h3>

                    <p>
                        Kegiatan pembelajaran siswa dalam
                        lingkungan MI Nurul Yaqin Tampumia.
                    </p>

                    <a href="#" class="link">
                        Selengkapnya →
                    </a>

                </div>

            </article>


            <!-- BERITA 2 -->

            <article class="news-card">

                <div class="news-image">

                    <img
                        src="../assets/images/foto2.jpeg"
                        alt="Kegiatan siswa"
                    >

                </div>

                <div class="news-content">

                    <span class="badge">
                        KEGIATAN SISWA
                    </span>

                    <div class="news-date">
                        2026 • Aktivitas Madrasah
                    </div>

                    <h3>
                        Aktivitas dan Kegiatan Siswa
                    </h3>

                    <p>
                        Dokumentasi aktivitas siswa dalam
                        berbagai kegiatan di madrasah.
                    </p>

                    <a href="#" class="link">
                        Selengkapnya →
                    </a>

                </div>

            </article>


            <!-- BERITA 3 -->

            <article class="news-card">

                <div class="news-image">

                    <img
                        src="../assets/images/foto5.jpeg"
                        alt="Kegiatan madrasah"
                    >

                </div>

                <div class="news-content">

                    <span class="badge">
                        MADRASAH
                    </span>

                    <div class="news-date">
                        2026 • Informasi
                    </div>

                    <h3>
                        Informasi Kegiatan Madrasah
                    </h3>

                    <p>
                        Informasi mengenai kegiatan yang
                        berlangsung di MI Nurul Yaqin Tampumia.
                    </p>

                    <a href="#" class="link">
                        Selengkapnya →
                    </a>

                </div>

            </article>


            <!-- BERITA 4 -->

            <article class="news-card">

                <div class="news-image">

                    <img
                        src="../assets/images/foto10.jpeg"
                        alt="Kegiatan sekolah"
                    >

                </div>

                <div class="news-content">

                    <span class="badge">
                        INFORMASI
                    </span>

                    <div class="news-date">
                        2026 • Berita
                    </div>

                    <h3>
                        Kegiatan dan Informasi Sekolah
                    </h3>

                    <p>
                        Berita dan informasi terbaru dari
                        lingkungan madrasah.
                    </p>

                    <a href="#" class="link">
                        Selengkapnya →
                    </a>

                </div>

            </article>


            <!-- BERITA 5 -->

            <article class="news-card">

                <div class="news-image">

                    <img
                        src="../assets/images/foto4.jpeg"
                        alt="Peserta didik"
                    >

                </div>

                <div class="news-content">

                    <span class="badge">
                        SISWA
                    </span>

                    <div class="news-date">
                        2026 • Peserta Didik
                    </div>

                    <h3>
                        Aktivitas Peserta Didik
                    </h3>

                    <p>
                        Kegiatan yang mendukung perkembangan
                        pengetahuan dan keterampilan siswa.
                    </p>

                    <a href="#" class="link">
                        Selengkapnya →
                    </a>

                </div>

            </article>


            <!-- BERITA 6 -->

            <article class="news-card">

                <div class="news-image">

                    <img
                        src="../assets/images/foto11.jpeg"
                        alt="Lingkungan sekolah"
                    >

                </div>

                <div class="news-content">

                    <span class="badge">
                        SEKOLAH
                    </span>

                    <div class="news-date">
                        2026 • Lingkungan Madrasah
                    </div>

                    <h3>
                        Lingkungan MI Nurul Yaqin Tampumia
                    </h3>

                    <p>
                        Dokumentasi lingkungan dan kegiatan
                        warga madrasah.
                    </p>

                    <a href="#" class="link">
                        Selengkapnya →
                    </a>

                </div>

            </article>

        </div>


        <!-- INFORMASI BAWAH -->

        <div class="info-box">

            <h3>
                Informasi Terbaru Madrasah
            </h3>

            <p>
                Pantau halaman berita untuk mendapatkan
                informasi kegiatan MI Nurul Yaqin Tampumia.
            </p>

        </div>

    </div>

</section>


<footer>

    <div class="footer-content">

        <div>
            <h3>MI Nurul Yaqin Tampumia</h3>

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