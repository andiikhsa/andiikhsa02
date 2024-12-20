<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('images/Andi\ Ikhsa\ 2024-12-15\ at\ 11.41.59_5f990255.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #333;
        }
        header {
    background-color: rgba(76, 175, 80, 0.5); /* Biru dengan transparansi 70% */
    color: white;
    padding: 10px 0;
    text-align: center;
}

        header h1 {
            margin: 0;
        }
        .container {
            padding: 20px;
            max-width: 800px;
            margin: auto;
            background-color: rgba(76, 175, 80, 0.8);
            border-radius: 10px;
        }
        .about, .gallery, .social-media {
            text-align: center;
            margin: 20px 0;
        }
        .about img, .gallery img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .gallery img {
            margin: 10px;
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px 0;
            background-color: rgba(76, 175, 80, 0.8);
            color: white;
        }
        .social-media a {
            text-decoration: none;
            margin: 0 10px;
            color: #333;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Welcome to My Personal Website</h1>
    </header>

    <!-- Container -->
    <div class="container">
        <!-- Halaman Beranda -->
        <div class="about">
            <img src="images/Andi Ikhsa 2024-12-15 at 11.24.36_e3816c0d.jpg" alt="Andi Ikhsa">
            <h2><?php echo 'Andi Muh. Ikhsa S'; ?></h2>
            <p><?php echo 'Saya adalah individu kreatif di bidang kemiliteran, berfokus pada pengembangan strategi inovatif dan teknologi pertahanan modern. Dengan pemanfaatan teknologi canggih seperti sistem otomatis, sensor pintar, dan analisis data, saya menciptakan solusi efektif yang meningkatkan presisi, efisiensi, dan keunggulan militer di lapangan.'; ?></p>
            <h3>Biodata Singkat</h3>
            <ul>
                <?php
                $biodata = [
                    'Nama: Andi Muh. Ikhsa S',
                    'Tempat, Tanggal Lahir: Makassar, 21 Juni 2003',
                    'Alamat: Jl. Daeng Tantu No. 4, Makassar',
                    'Email: a.muh.ikhsa.s@gmail.com',
                    'Pendidikan: S1 Fisika, Universitas Hasanuddin (2022)',
                    'Keahlian: Teknologi Pertahanan, Sensor Pintar, Analisis Data',
                    'Hobi: Membaca Buku, Olahraga Bela Diri, Fotografi'
                ];
                foreach ($biodata as $item) {
                    echo "<li>$item</li>";
                }
                ?>
            </ul>
        </div>

        <!-- Galeri -->
        <div class="gallery">
            <h3>Galeri</h3>
            <p>Koleksi foto dan momen penting dalam hidup saya:</p>
            <img src="images/Andi Ikhsa 2024-12-15 at 23.14.35_bcfa5f7d.jpg" alt="Foto 1">
            <img src="images/Andi Ikhsa 2024-12-15 at 23.14.35_e9740b6a.jpg" alt="Foto 2">
            <img src="images/Andi Ikhsa 2024-12-15 at 23.14.35_ec18e9e2.jpg" alt="Foto 3">
            <img src="images/WhatsApp Image 2024-12-15 at 23.29.33_3afcbfcb.jpg" alt="Foto 4">
            <img src="images/WhatsApp Image 2024-12-15 at 23.29.34_2cd334f8.jpg" alt="Foto 5">
            <img src="images/WhatsApp Image 2024-12-15 at 23.29.35_ec3e4052.jpg" alt="Foto 6">
            <img src="images/WhatsApp Image 2024-12-15 at 23.29.35_c419597f.jpg" alt="Foto 7">
            <img src="images/WhatsApp Image 2024-12-15 at 23.29.40_68e26243.jpg" alt="Foto 8">
            <img src="images/WhatsApp Image 2024-12-15 at 23.29.41_6b1264be.jpg" alt="Foto 9">
        </div>

        <!-- Media Sosial -->
        <div class="social-media">
            <h3>Media Sosial</h3>
            <p>Ikuti saya di media sosial dengan mengklik foto di bawah ini:</p>
            <a href="https://www.instagram.com/_ikhsaa?igsh=MWMyOWx6a3RkNXhscA==" target="_blank">
                <img src="images/Andi Ikhsa 2024-12-15 at 11.41.59_5f990255.jpg" alt="Instagram" width="30">
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 <?php echo 'Andi Muh. Ikhsa S'; ?>. All rights reserved.</p>
        <p>Kontak: 
            Gmail: <a href="mailto:a.muh.ikhsa.s@gmail.com">a.muh.ikhsa.s@gmail.com</a> | 
            Telepon: <a href="tel:+6281543371146">+62 815-4337-1146</a>
        </p>
    </footer>
</body>
</html>