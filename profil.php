
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil Sekolah - MI Nurul Yaqin Tampumia</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    color: #26352c;
    background: #f8faf7;
    line-height: 1.7;
}

.container {
    width: 90%;
    max-width: 1150px;
    margin: auto;
}

header {
    background: white;
    padding: 15px 0;
    box-shadow: 0 3px 15px #0000000d;
}

.navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.brand {
    display: flex;
    align-items: center;
    gap: 12px;
}

.brand img {
    width: 55px;
    height: 55px;
    object-fit: contain;
}

.brand h2 {
    color: #176b42;
    font-size: 17px;
    line-height: 1.4;
}

.brand p {
    font-size: 11px;
    color: #777;
}

nav {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 20px;
    flex-wrap: wrap;
}

nav a {
    color: #35463b;
    text-decoration: none;
    font-size: 13px;
    font-weight: 500;
}

nav a:hover,
nav a.active {
    color: #16804b;
}

nav a.active {
    border-bottom: 2px solid #d7a936;
    padding-bottom: 5px;
}

.hero {
    min-height: 300px;
    background:
        linear-gradient(90deg, rgba(9,64,39,.92), rgba(9,64,39,.40)),
        url('../assets/images/foto4.jpeg') center/cover;
    display: flex;
    align-items: center;
    color: white;
}

.hero-content {
    max-width: 650px;
    padding: 65px 0;
}

.label {
    color: #f5d77c;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.hero h1 {
    font-size: clamp(30px, 5vw, 46px);
    line-height: 1.25;
    margin: 14px 0;
}

.hero p {
    font-size: 14px;
    max-width: 570px;
}

.breadcrumb {
    padding: 17px 0;
    font-size: 12px;
    color: #788279;
}

.breadcrumb a {
    color: #16804b;
    text-decoration: none;
}

section {
    padding: 55px 0;
}

.section-heading {
    margin-bottom: 25px;
}

.section-heading .eyebrow {
    color: #b58b25;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.section-heading h2 {
    color: #176b42;
    font-size: 29px;
    line-height: 1.4;
    margin-top: 7px;
}

.section-heading p {
    color: #707970;
    font-size: 14px;
    margin-top: 8px;
}

.about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 40px;
}

.about-image {
    position: relative;
}

.about-image img {
    width: 100%;
    height: 340px;
    object-fit: cover;
    border-radius: 18px;
    box-shadow: 0 12px 30px #174a3020;
}

.image-caption {
    position: absolute;
    bottom: 15px;
    left: 15px;
    right: 15px;
    background: white;
    border-radius: 10px;
    padding: 12px 16px;
    color: #176b42;
    font-weight: 600;
    font-size: 13px;
}

.about-text p {
    font-size: 14px;
    color: #647067;
    margin-bottom: 15px;
    text-align: justify;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
    margin-top: 28px;
}

.info-card {
    background: white;
    padding: 25px 20px;
    border-radius: 14px;
    border: 1px solid #e6eee7;
    box-shadow: 0 5px 18px #153e2410;
}

.info-card .icon {
    font-size: 28px;
    margin-bottom: 10px;
}

.info-card h3 {
    font-size: 16px;
    color: #176b42;
    margin-bottom: 8px;
}

.info-card p {
    color: #707970;
    font-size: 13px;
}

.identity {
    background: #edf5ee;
}

.identity-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
}

.identity-card {
    background: white;
    padding: 28px;
    border-radius: 15px;
    border-left: 4px solid #d7a936;
}

.identity-card h3 {
    color: #176b42;
    margin-bottom: 15px;
    font-size: 19px;
}

.identity-card p,
.identity-card li {
    color: #647067;
    font-size: 14px;
}

.identity-card ul {
    padding-left: 20px;
}

.principal {
    display: grid;
    grid-template-columns: 220px 1fr;
    gap: 30px;
    align-items: center;
    background: white;
    padding: 28px;
    border-radius: 18px;
    box-shadow: 0 5px 20px #00000008;
}

.principal img {
    width: 100%;
    height: 240px;
    object-fit: cover;
    border-radius: 12px;
}

.principal h3 {
    color: #176b42;
    font-size: 23px;
    margin: 8px 0;
}

.principal p {
    color: #68736a;
    font-size: 14px;
}

.principal .role {
    color: #b58b25;
    font-weight: 600;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

footer {
    background: #10472e;
    color: white;
    padding: 30px 0;
    margin-top: 25px;
}

.footer-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
}

footer h3 {
    font-size: 17px;
}

footer p {
    color: #d8e7dc;
    font-size: 12px;
    margin-top: 5px;
}

@media (max-width: 800px) {
    .navbar {
        align-items: flex-start;
        flex-direction: column;
    }

    nav {
        width: 100%;
        justify-content: flex-start;
        gap: 12px 18px;
    }

    .about-grid,
    .identity-grid {
        grid-template-columns: 1fr;
    }

    .info-grid {
        grid-template-columns: 1fr;
    }

    .principal {
        grid-template-columns: 1fr;
    }

    .principal img {
        max-width: 280px;
    }

    .hero {
        min-height: 300px;
    }
}
</style>
</head>

<body>

<header>
    <div class="container navbar">
        <div class="brand">
            <img src="../assets/images/LOGO.jpeg"
                 alt="Logo madrasah"
                 onerror="this.style.display='none'">
            <div>
                <h2>MI Nurul Yaqin Tampumia</h2>
                <p>Madrasah Ibtidaiyah</p>
            </div>
        </div>

        <nav>
            <a href="../index.php">Beranda</a>
            <a href="profil.php" class="active">Profil</a>
            <a href="visi-misi.php">Visi &amp; Misi</a>
            <a href="berita.php">Berita</a>
            <a href="galeri.php">Galeri</a>
            <a href="kontak.php">Kontak</a>
        </nav>
    </div>
</header>

<div class="hero">
    <div class="container hero-content">
        <span class="label">Mengenal Madrasah Kami</span>
        <h1>Profil MI Nurul Yaqin Tampumia</h1>
        <p>
            Membangun generasi yang berilmu, berakhlak mulia,
            mandiri, dan siap menghadapi masa depan.
        </p>
    </div>
</div>

<div class="container breadcrumb">
    <a href="../index.php">Beranda</a> &nbsp; / &nbsp; Profil Sekolah
</div>

<section>
    <div class="container about-grid">
        <div class="about-image">
            <img src="../assets/images/foto6.jpeg"
                 alt="Dokumentasi MI Nurul Yaqin Tampumia">
            <div class="image-caption">
                MI Nurul Yaqin Tampumia
            </div>
        </div>

        <div class="about-text">
            <div class="section-heading">
                <span class="eyebrow">Tentang Kami</span>
                <h2>Mengenal Sekolah Kami Lebih Dekat</h2>
            </div>

            <p>
                MI Nurul Yaqin Tampumia merupakan madrasah ibtidaiyah
                yang menjadi bagian dari pendidikan dasar bagi anak-anak.
                Madrasah berupaya mendukung perkembangan pengetahuan,
                keterampilan, karakter, dan nilai-nilai keagamaan peserta didik.
            </p>

            <p>
                Melalui kegiatan pembelajaran dan pembinaan karakter,
                madrasah berkomitmen menciptakan lingkungan pendidikan
                yang mendukung siswa untuk belajar, berkembang, dan
                menghargai sesama.
            </p>

            <p>
                Website ini menjadi media informasi mengenai profil,
                kegiatan, berita, dan informasi madrasah bagi orang tua
                serta masyarakat.
            </p>
        </div>
    </div>
</section>

<section class="identity">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Informasi Madrasah</span>
            <h2>Identitas Sekolah</h2>
            <p>Informasi umum MI Nurul Yaqin Tampumia.</p>
        </div>

        <div class="info-grid">
            <div class="info-card">
                <div class="icon">🏫</div>
                <h3>Nama Madrasah</h3>
                <p>MI Nurul Yaqin Tampumia</p>
            </div>

            <div class="info-card">
                <div class="icon">📚</div>
                <h3>Jenjang Pendidikan</h3>
                <p>Madrasah Ibtidaiyah (MI)</p>
            </div>

            <div class="info-card">
                <div class="icon">📍</div>
                <h3>Alamat</h3>
                <p>Tampumia. Silakan lengkapi alamat resmi madrasah.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Kepemimpinan</span>
            <h2>Sambutan Kepala Madrasah</h2>
        </div>

        <div class="principal">
            <img src="../assets/images/foto9.jpeg"
                 alt="Dokumentasi kepala madrasah">
            <div>
                <span class="role">Kepala Madrasah</span>
                <h3>Rismawati, S.Pd. Gr.</h3>
                <p>
                    Pendidikan merupakan kerja sama antara madrasah,
                    keluarga, dan masyarakat. Kami berharap MI Nurul Yaqin
                    Tampumia dapat terus menjadi lingkungan belajar yang
                    mendukung perkembangan ilmu pengetahuan, karakter,
                    dan akhlak mulia peserta didik.
                </p>
                <p style="margin-top:12px">
                    Terima kasih atas kepercayaan dan dukungan semua pihak
                    dalam mendampingi proses pendidikan anak-anak.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="identity">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Lingkungan Belajar</span>
            <h2>Kegiatan dan Dokumentasi</h2>
            <p>Beberapa dokumentasi kegiatan madrasah.</p>
        </div>

        <div class="info-grid">
            <div class="info-card">
                <img src="../assets/images/foto2.jpeg"
                     alt="Dokumentasi kegiatan siswa"
                     style="width:100%;height:180px;object-fit:cover;border-radius:10px;margin-bottom:12px">
                <h3>Kegiatan Siswa</h3>
                <p>Kegiatan belajar dan pengembangan potensi peserta didik.</p>
            </div>

            <div class="info-card">
                <img src="../assets/images/foto8.jpeg"
                     alt="Dokumentasi lingkungan madrasah"
                     style="width:100%;height:180px;object-fit:cover;border-radius:10px;margin-bottom:12px">
                <h3>Lingkungan Madrasah</h3>
                <p>Dokumentasi lingkungan dan aktivitas di madrasah.</p>
            </div>

            <div class="info-card">
                <img src="../assets/images/foto3.jpeg"
                     alt="Dokumentasi aktivitas pendidikan"
                     style="width:100%;height:180px;object-fit:cover;border-radius:10px;margin-bottom:12px">
                <h3>Aktivitas Pendidikan</h3>
                <p>Dokumentasi kegiatan pendukung proses pendidikan.</p>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container footer-content">
        <div>
            <h3>MI Nurul Yaqin Tampumia</h3>
            <p>Mendidik dengan ilmu, membina dengan akhlak.</p>
        </div>
        <p>&copy; 2026 MI Nurul Yaqin Tampumia</p>
    </div>
</footer>

</body>
</html>