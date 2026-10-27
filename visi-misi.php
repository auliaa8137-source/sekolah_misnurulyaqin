<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi | MI Nurul Yaqin Tampumia</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --hijau: #176b45;
            --hijau-tua: #104c32;
            --emas: #d8ae52;
            --putih: #ffffff;
            --abu: #f4f7f4;
            --teks: #26352d;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--abu);
            color: var(--teks);
            line-height: 1.7;
        }

        a {
            text-decoration: none;
        }

        .navbar {
            background: var(--putih);
            padding: 16px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            box-shadow: 0 3px 15px #0000000d;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--hijau-tua);
        }

        .logo {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--hijau);
            color: white;
            display: grid;
            place-items: center;
            font-weight: bold;
            font-size: 19px;
            border-bottom: 4px solid var(--emas);
        }

        .brand h2 {
            font-size: 16px;
            line-height: 1.4;
        }

        .brand p {
            font-size: 12px;
            color: #68776e;
        }

        .menu {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .menu a {
            color: #34483b;
            font-size: 14px;
            font-weight: bold;
        }

        .menu a:hover,
        .menu .active {
            color: var(--hijau);
        }

        .hero {
            min-height: 300px;
            padding: 65px 7%;
            display: flex;
            align-items: center;
            background:
                linear-gradient(90deg, #103d2eeb, #176b45c9),
                url('../assets/images/foto10.jpeg') center/cover;
            color: white;
        }

        .hero-content {
            max-width: 700px;
        }

        .label {
            display: inline-block;
            padding: 7px 15px;
            border: 1px solid #ffffff75;
            border-radius: 30px;
            font-size: 12px;
            margin-bottom: 15px;
        }

        .hero h1 {
            font-size: clamp(32px, 5vw, 48px);
            line-height: 1.2;
            margin-bottom: 15px;
        }

        .hero p {
            color: #edf7ef;
            max-width: 600px;
        }

        .container {
            width: 86%;
            max-width: 1100px;
            margin: 45px auto 65px;
        }

        .intro {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 35px;
        }

        .eyebrow {
            color: var(--hijau);
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .section-title {
            color: var(--hijau-tua);
            font-size: 30px;
            line-height: 1.3;
            margin: 8px 0 12px;
        }

        .intro p,
        .card p {
            color: #68756c;
        }

        .vision-card {
            background: white;
            padding: 35px;
            border-radius: 18px;
            border: 1px solid #e5ece6;
            border-top: 5px solid var(--emas);
            text-align: center;
            box-shadow: 0 8px 25px #123d2010;
            margin-bottom: 45px;
        }

        .round-icon {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            margin: 0 auto 15px;
            background: #e8f4eb;
            color: var(--hijau);
            display: grid;
            place-items: center;
            font-size: 27px;
        }

        .vision-card h3 {
            color: var(--hijau);
            font-size: 23px;
            margin-bottom: 10px;
        }

        .vision-text {
            max-width: 750px;
            margin: auto;
            font-size: 18px;
            font-weight: 600;
        }

        .mission-heading {
            text-align: center;
            margin-bottom: 25px;
        }

        .mission-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border: 1px solid #e6ece7;
            border-radius: 16px;
            box-shadow: 0 6px 20px #123d2008;
        }

        .number {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: var(--hijau);
            color: white;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .card h3 {
            font-size: 17px;
            color: var(--hijau-tua);
            margin-bottom: 8px;
        }

        .values {
            background: #eaf3eb;
            border-radius: 20px;
            padding: 32px;
            margin-top: 45px;
            text-align: center;
        }

        .values h2 {
            color: var(--hijau-tua);
            margin-bottom: 20px;
        }

        .values-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .value-item {
            background: white;
            color: var(--hijau);
            border: 1px solid #d8e7da;
            border-radius: 30px;
            padding: 9px 17px;
            font-size: 14px;
            font-weight: bold;
        }

        .closing {
            margin-top: 30px;
            padding: 28px;
            background: var(--hijau-tua);
            color: white;
            border-radius: 16px;
            text-align: center;
        }

        .closing p {
            color: #e1eee5;
            max-width: 750px;
            margin: 8px auto 0;
        }

        footer {
            background: #103d2e;
            color: white;
            text-align: center;
            padding: 25px 7%;
            font-size: 13px;
        }

        footer span {
            color: #f0cf7a;
        }

        @media (max-width: 850px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .menu {
                gap: 12px 18px;
            }

            .mission-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 560px) {
            .navbar {
                padding: 15px 5%;
            }

            .menu a {
                font-size: 12px;
            }

            .hero {
                padding: 50px 6%;
            }

            .container {
                width: 90%;
                margin-top: 30px;
            }

            .section-title {
                font-size: 25px;
            }

            .mission-grid {
                grid-template-columns: 1fr;
            }

            .vision-card,
            .values {
                padding: 25px 20px;
            }
        }
    </style>
</head>

<body>

    <header class="navbar">
        <a class="brand" href="../index.php">
            <img src="../assets/images/LOGO.jpeg" alt="Logo sekolah"class="logo">
                <h2>MI Nurul Yaqin</h2>
            </div>
        </a>

        <nav class="menu">
            <a href="../index.php">Beranda</a>
            <a href="profil.php">Profil</a>
            <a href="visi-misi.php" class="active">Visi &amp; Misi</a>
            <a href="berita.php">Berita</a>
            <a href="galeri.php">Galeri</a>
            <a href="kontak.php">Kontak</a>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <span class="label">MI NURUL YAQIN TAM PUMIA</span>
            <h1>Visi &amp; Misi Sekolah</h1>
            <p>
                Landasan dan tujuan kami dalam membimbing peserta didik
                agar tumbuh menjadi generasi yang berilmu, berakhlak mulia,
                dan berprestasi.
            </p>
        </div>
    </section>

    <main class="container">

        <section class="intro">
            <span class="eyebrow">Arah Pendidikan</span>
            <h2 class="section-title">Membangun Generasi Masa Depan</h2>
            <p>
                Visi dan misi menjadi pedoman dalam melaksanakan kegiatan
                pembelajaran serta membentuk karakter peserta didik.
            </p>
        </section>

        <section class="vision-card">
            <div class="round-icon">✦</div>
            <h3>Visi</h3>
            <p class="vision-text">
                Terwujudnya peserta didik yang beriman, berakhlak mulia,
                berilmu, mandiri, dan berprestasi.
            </p>
        </section>

        <section>
            <div class="mission-heading">
                <span class="eyebrow">Langkah Kami</span>
                <h2 class="section-title">Misi Sekolah</h2>
                <p>Upaya yang dilakukan untuk mewujudkan visi sekolah.</p>
            </div>

            <div class="mission-grid">
                <article class="card">
                    <div class="number">01</div>
                    <h3>Penguatan Keimanan</h3>
                    <p>
                        Menanamkan nilai-nilai keagamaan dan membiasakan
                        perilaku yang sesuai dengan ajaran Islam.
                    </p>
                </article>

                <article class="card">
                    <div class="number">02</div>
                    <h3>Akhlak Mulia</h3>
                    <p>
                        Membentuk peserta didik yang jujur, disiplin,
                        santun, bertanggung jawab, dan saling menghormati.
                    </p>
                </article>

                <article class="card">
                    <div class="number">03</div>
                    <h3>Pembelajaran Berkualitas</h3>
                    <p>
                        Melaksanakan pembelajaran yang aktif, kreatif,
                        efektif, dan sesuai kebutuhan peserta didik.
                    </p>
                </article>

                <article class="card">
                    <div class="number">04</div>
                    <h3>Prestasi Peserta Didik</h3>
                    <p>
                        Mengembangkan potensi, bakat, dan minat siswa
                        dalam bidang akademik maupun nonakademik.
                    </p>
                </article>

                <article class="card">
                    <div class="number">05</div>
                    <h3>Lingkungan Nyaman</h3>
                    <p>
                        Mewujudkan lingkungan sekolah yang bersih,
                        sehat, aman, tertib, dan nyaman untuk belajar.
                    </p>
                </article>

                <article class="card">
                    <div class="number">06</div>
                    <h3>Kerja Sama</h3>
                    <p>
                        Membangun hubungan baik antara sekolah,
                        orang tua, masyarakat, dan lingkungan sekitar.
                    </p>
                </article>
            </div>
        </section>

        <section class="values">
            <h2>Nilai-Nilai yang Kami Tanamkan</h2>
            <div class="values-list">
                <span class="value-item">Keimanan</span>
                <span class="value-item">Kejujuran</span>
                <span class="value-item">Kedisiplinan</span>
                <span class="value-item">Tanggung Jawab</span>
                <span class="value-item">Gotong Royong</span>
                <span class="value-item">Kemandirian</span>
            </div>
        </section>

        <section class="closing">
            <h2>Bersama Mewujudkan Pendidikan yang Lebih Baik</h2>
            <p>
                Dengan kerja sama seluruh warga sekolah dan dukungan orang tua,
                kami berupaya menciptakan lingkungan belajar yang mendukung
                perkembangan ilmu, karakter, dan potensi setiap peserta didik.
            </p>
        </section>

    </main>

    <footer>
        &copy; 2026 <span>MI Nurul Yaqin Tampumia</span>.
        Website informasi sekolah.
    </footer>

</body>
</html>