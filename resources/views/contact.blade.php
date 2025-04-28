<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dindik Jatim</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            opacity: 0;
            animation: fadeInUp 0.8s ease-out forwards;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .navbar {
            background-color: #00218D;
            border-bottom-left-radius: 10px;
            /* Sudut kiri bawah */
            border-bottom-right-radius: 10px;
            /* Sudut kanan bawah */
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            font-weight: bold;
        }

        .navbar .logo {
            font-size: 20px;
            font-weight: bold;
        }

        .navbar .nav-links {
            display: flex;
            flex-grow: 1;
            justify-content: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 40px;
            font-size: 16px;
        }

        .navbar .sign-in {
            background-color: #8E90F6;
            padding: 8px 15px;
            border-radius: 20px;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-container img {
            height: 50px;
            /* Sesuaikan ukuran logo */
            margin-right: 10px;
            /* Beri jarak antara logo dan teks */
        }

        .logo {
            width: 250px;
            height: auto;
            display: block;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 40px 20px;
        }

        h2 {
            text-align: center;
            color: #00218D;
            font-size: 36px;
            margin-top: 60px;
            margin-bottom: 10px;
        }

        .contact-section {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .map-container {
            flex: 1;
            min-width: 300px;
            margin-top: 10px;
            border: 2px solid #3F5BBC;
            border-radius: 10px;
            overflow: hidden;
        }

        iframe {
            width: 550px;
            height: 350px;
            border: none;
            border-radius: 10px;
        }

        .contact-container {
            background-color: #3F5BBC;
            /* Sesuai warna di gambar */
            padding: 20px;
            border-radius: 12px;
            max-width: 100%;
            width: 500px;
            /* Sesuaikan dengan desain */
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 10px 0;
            color: white;
        }

        .contact-item .icon img {
            width: 35px;
            /* Ukuran ikon */
            height: 35px;
        }

        .contact-text h3 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
            padding-left: 15px;
            padding-top: 3px;
        }

        .contact-text p {
            margin: 5px 0 0;
            font-size: 14px;
            padding-left: 15px;
        }

        .icon {
            width: 20px;
            height: 20px;
        }

        footer {
            background: white;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        /* Container Utama Footer */
        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            /* Biar responsif di layar kecil */
            gap: 20px;
        }

        /* Logo di Footer */
        .footer-logo {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .footer-logo img {
            width: 300px;
            /* Ukuran logo lebih proporsional */
            margin-bottom: 10px;
            padding-top: 35px;
        }

        /* Style untuk Menu, Kontak, dan Sosial Media */
        .footer-menu,
        .footer-contact,
        .footer-social {
            flex: 1;
            max-width: 250px;
            /* Biar tidak melebar */
        }

        /* Judul di Menu dan Kontak */
        .footer-menu h4,
        .footer-contact h4,
        .footer-social h4 {
            color: #0033A0;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* List Menu */
        .footer-menu ul {
            list-style: none;
            padding: 0;
        }

        .footer-menu ul li {
            margin-bottom: 8px;
        }

        .footer-menu ul li a {
            text-decoration: underline;
            color: black;
        }

        /* Style untuk Kontak & Sosial Media */
        .footer-contact p,
        .footer-social p {
            margin: 8px 0;
            color: black;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Style untuk Ikon */
        .footer-contact p img,
        .footer-social p img {
            width: 20px;
            /* Ukuran ikon */
            height: 20px;
        }

        /* Garis Pembatas */
        .footer-line {
            border: none;
            border-top: 2px solid orange;
            margin: 10px 0;
        }

        /* Bagian Bawah Footer */
        .footer-bottom {
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="/images/logo header.png" alt="Logo Dindik">
        </div>
        <div class="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('home') }}">Form</a>
            <a href="#">Layanan</a>
            <a href="{{ route('contact') }}">Kontak</a>
            <a href="{{ route('survey.welcome') }}">Survey</a>
        </div>
        <a href="#" class="sign-in">Sign In</a>
    </div>
    <div class="container fade-in-up">
        <h2>Kontak Kami</h2>
        <div class="contact-section">
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8551094179375!2d112.74251500000001!3d-7.257326000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f968116a17af%3A0xe2a201af92736752!2sDinas%20Pendidikan%20Provinsi%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1741745068378!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-container">
                <div class="contact-item">
                    <div class="icon">
                        <img src="/images/telfon.png" alt="Icon Telepon">
                    </div>
                    <div class="contact-text">
                        <h3>Hotline</h3>
                        <p>WhatsApp 0811-3110-8881</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="icon">
                        <img src="/images/email.png" alt="Icon Email">
                    </div>
                    <div class="contact-text">
                        <h3>Email</h3>
                        <p>dindik@jatimprov.go.id // ppidhumas.dindikjatim@gmail.com</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="icon">
                        <img src="/images/lokasi.png" alt="Icon Lokasi">
                    </div>
                    <div class="contact-text">
                        <h3>Kantor Dindik Jatim</h3>
                        <p>Jl. Gentengkali No.33 Kota Surabaya, 60275</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="icon">
                        <img src="/images/jam.png" alt="Icon Jam">
                    </div>
                    <div class="contact-text">
                        <h3>Jam Layanan</h3>
                        <p>Senin - Jumat : 08.00 - 15.00<br>Istirahat : 12.00 - 13.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div id="footer" class="footer-container">
            <div class="footer-logo">
                <img src="/images/logo footer.png" alt="Logo Dinas Pendidikan Jawa Timur">
            </div>

            <div class="footer-menu">
                <h4>Our Menu</h4>
                <ul>
                    <li><a href="{{ route('home') }}" style="color: #00218D">Home</a>
                    <li><a href="{{ route('home') }}" style="color: #00218D">Form</a>
                    <li><a href="#" style="color: #00218D">Layanan</a>
                    <li><a href="{{ route('contact') }}" style="color: #00218D">Kontak</a>
                    <li><a href="{{ route('survey.welcome') }}" style="color: #00218D">Survey</a>
                </ul>
            </div>

            <div class="footer-contact">
                <h4>Contact Us</h4>
                <p>
                    <img src="/images/icon-lokasi.png" alt="Icon Lokasi" width="20"> Jl. Genteng Kali No.33,
                    Surabaya, Jawa
                    Timur 60275
                </p>
                <p>
                    <img src="/images/icon-email.png" alt="Icon Email" width="20"> <a
                        href="mailto:dindik@jatimprov.go.id">dindik@jatimprov.go.id</a> //
                </p>
                <p><a href="mailto:ppidhumas.dindikjatim@gmail.com">ppidhumas.dindikjatim@gmail.com</a></p>
                <p>
                    <img src="/images/icon-wa.png" alt="Icon Telepon" width="20"> 0811-3110-8881
                </p>
                <p>
                    <img src="/images/icon-lapor.png" alt="Icon Lapor" width="20"> <a
                        href="https://www.lapor.go.id">Lapor.go.id</a>
                </p>
            </div>

            <div class="footer-social">
                <h4>Social Media</h4>
                <p>
                    <img src="/images/icon-ig.png" alt="Icon Lokasi" width="20"> @dindik_jatim
                </p>
                <p>
                    <img src="/images/icon-fb.png" alt="Icon Lokasi" width="20"> Dindik.Jatim
                </p>
                <p>
                    <img src="/images/icon-x.png" alt="Icon Lokasi" width="20"> @Dindik_Jatim
                </p>
                <p>
                    <img src="/images/icon-yt.png" alt="Icon Lokasi" width="20"> Dinas Pendidikan Provinsi Jawa
                    Timur
                </p>
            </div>
        </div>

        <hr class="footer-line">

        <p class="footer-bottom">© 2025 Dinas Pendidikan Provinsi Jawa Timur</p>
    </footer>

</body>

</html>
