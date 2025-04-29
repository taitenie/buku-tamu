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
            font-family: 'Poppins', sans-serif;
            background: white;
            color: #00218D;
            text-align: center;
            margin: 0;
            padding: 10px;
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

        .title {
            text-align: center;
            font-size: 28px;
            font-weight: 700;
            color: #00218D;
            margin-top: 100px;
        }

        .survey-wrapper {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin: 40px auto;
            padding: 0 20px;
            max-width: 1000px;
        }

        .form-container {
            position: relative;
            background-color: #475FCB;
            border-radius: 15px;
            padding: 40px 40px 40px 80px;
            /* kiri 80px agar intro box bisa overlap */
            color: white;
            flex: 1;
            max-width: 400px;
            width: 100%;
        }

        .intro-box {
            position: absolute;
            top: 40px;
            left: 90px;
            /* keluar sedikit dari form */
            background-color: #FFF59D;
            width: 200px;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 10;
            /* ini penting agar intro box muncul di atas */
        }

        .intro-box h3 {
            color: #00218D;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .intro-box p {
            color: #2E2E2E;
            font-size: 14px;
            line-height: 1.5;
        }

        .form-container label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            font-size: 14px;
        }

        .form-container input,
        .form-container select {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: none;
            margin-bottom: 16px;
            font-size: 14px;
            background-color: #ffffff;
            color: #333;
        }

        .form-container input::placeholder,
        .form-container select {
            color: #999;
        }

        .form-row {
            display: flex;
            gap: 12px;
            align-items: flex-end;
        }

        .form-row .form-group {
            flex: 1;
        }

        .submit-btn-inline {
            background-color: #00218D;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            font-size: 15px;
            transition: background-color 0.3s, transform 0.2s;
        }

        @media screen and (max-width: 768px) {
            .form-row {
                flex-direction: column;
                align-items: stretch;
            }

            .submit-btn {
                width: 100%;
            }
        }

        @media screen and (max-width: 768px) {
            .survey-wrapper {
                flex-direction: column;
                align-items: center;
            }
        }

        footer {
            background: white;
            padding: 20px;
            font-family: Arial, sans-serif;
            text-align: left;
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
    <!-- Navbar -->
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
        <a href="{{ route('login') }}" class="sign-in">Sign In</a>
    </div>

    <h2 class="title">Survey Kepuasan Masyarakat</h2>

    <div class="survey-wrapper fade-in-up">
        <!-- Box Kiri -->
        <div class="intro-box">
            <h3>Selamat Datang!</h3>
            <p>Hasil dari survei ini akan digunakan untuk meningkatkan kualitas Dinas Pendidikan Provinsi Jawa Timur.
                Mohon untuk mengisi dengan sebenar-benarnya.</p>
        </div>

        <!-- Form Kanan -->
        <div class="form-container">
            <form class="visitor-form" method="POST" action="{{ route('survey.start') }}">
                @csrf
                <input type="text" name="nama" placeholder="Nama Pengunjung" required>
                <input type="number" name="umur" placeholder="Umur Pengunjung" min="10" max="100" required>
                <input type="tel" name="no_hp" pattern="[0-9]{10,15}" placeholder="Nomor Handphone" required>

                <!-- Baris Jenis Kelamin + Submit -->
                <div class="form-row">
                    <div class="form-group">
                        <select name="jenis_kelamin" required>
                            <option value="" disabled selected>Jenis Kelamin Pengunjung</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                
                <button type="submit" class="submit-btn-inline">Lanjut</button>                
            </form>
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
                    <li><a href="{{ route('home') }}" style="color: #00218D">Home</a></li>
                    <li><a href="{{ route('home') }}" style="color: #00218D">Form</a></li>
                    <li><a href="#" style="color: #00218D">Layanan</a></li>
                    <li><a href="{{ route('contact') }}" style="color: #00218D">Kontak</a></li>
                    <li><a href="{{ route('survey.welcome') }}" style="color: #00218D">Survey</a></li>
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
