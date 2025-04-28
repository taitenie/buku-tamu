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

        .fade-in-delay-1 {
            animation-delay: 0.3s;
        }

        .fade-in-delay-2 {
            animation-delay: 0.6s;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            background-color: #f1f1f1;
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

        .text-container {
            margin-left: 120px;
            /* Atur sesuai kebutuhan */
        }

        .hero {
            background: url('/images/foto dindik.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 60px 20px;
            display: flex;
            height: 70vh;
            justify-content: center;
            margin-top: 60px;
            border-radius: 10px;
        }

        .hero-content {
            display: flex;
            align-items: center;
            gap: 0px;
            /* Memberikan sedikit jarak antara logo dan teks */
            text-align: left;
            padding: 20px;
            border-radius: 10px;
            max-width: 1200px;
            /* Membatasi lebar maksimum */
            margin: auto;
        }

        .hero h1 {
            font-size: 50px;
            font-weight: 700;
            color: #00218D;
            margin: 5px 0;
        }

        .hero h2 {
            font-size: 28px;
            color: #FEEC77;
            font-weight: bold;
            margin: 5px 0;

        }

        .hero h3 {
            font-size: 18px;
            font-weight: 600;
            color: #00218D;
            margin: 5px 0;
        }

        .logo {
            width: 250px;
            height: auto;
            display: block;
            margin: 0;
            padding: 0;
        }

        .form-section {
            background: linear-gradient(to bottom, #002c8b, #3a5ec7);
            color: white;
            width: 80%;
            margin: 40px auto;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: left;
        }

        .form-section h2 {
            font-size: 28px;
            color: #FEEC77;
            font-weight: bold;
            margin: 5px 0;
            text-align: center;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
            gap: 40px;
        }

        /* Membuat Jenis Kelamin & Jenis Identitas sejajar */
        .form-row {
            display: flex;
            justify-content: space-between;
            gap: 0;
        }

        /* Memastikan fieldset sejajar dengan ukuran sama */
        .form-group {
            flex: 1;
            border: none;
            /* Hapus border default */
        }

        /* Style untuk label agar radio button sejajar */
        .radio-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            /* Sesuaikan dengan tema */
        }

        /* Style untuk radio button */
        input[type="radio"] {
            width: 18px;
            height: 18px;
            accent-color: white;
            /* Warna lingkaran */
        }

        /* Menata fieldset legend agar rapi */
        fieldset legend {
            font-size: 18px;
            font-weight: bold;
            color: white;
        }

        .form-left,
        .form-right {
            width: 50%;
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        legend {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        select {
            color: gray;
        }

        select:focus,
        select:valid {
            color: black;
        }

        input,
        select,
        textarea {
            width: 100%;
            /* Semua elemen akan memiliki lebar penuh sesuai parent */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            /* Pastikan padding tidak mempengaruhi lebar total */
        }

        textarea {
            height: 200px;
            /* Atur tinggi textarea agar tidak terlalu kecil */
            resize: vertical;
            /* Pengguna masih bisa menyesuaikan ukuran */
        }

        .radio-group {
            display: flex;
            gap: 20px;
            /* Jarak antar radio button */
            align-items: center;
        }

        fieldset {
            border: none;
            /* Menghilangkan garis tepi */
            padding: 0;
            /* Menghilangkan padding bawaan */
            margin: 0;
            /* Menghilangkan margin bawaan */
        }

        .foto-container {
            border: 2px solid white;
            padding: 20px;
            text-align: center;
            width: 300px;
            border-radius: 10px;
        }

        .foto-container img {
            width: 50px;
            height: 50px;
            display: block;
            margin: 0 auto 10px;
        }

        .foto-container p {
            color: white;
            font-size: 14px;
            font-weight: bold;
        }

        .foto-container label {
            cursor: pointer;
            display: block;
            padding: 10px;
        }

        #video {
            width: 100%;
            border-radius: 5px;
            display: none;
        }

        .capture-btn {
            background-color: white;
            color: black;
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 100%;
            font-size: 14px;
            border-radius: 5px;
        }

        .capture-btn:hover {
            background-color: white;
        }

        canvas {
            display: none;
        }

        .submit-btn {
            width: 120px;
            margin-top: 20px;
            background-color: #00218D;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .note-text {
            font-size: 16px;
            font-style: italic;
            margin-top: 5px;
            display: block;
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

        #video {
            max-width: 100%;
            height: auto;
        }

        canvas {
            display: none;
            /* opsional kalau canvas tidak perlu ditampilkan */
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="/images/logo header.png" alt="Logo Dindik">
        </div>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#form-section">Form</a>
            <a href="#">Layanan</a>
            <a href="{{ route('contact') }}">Kontak</a>
            <a href="{{ route('survey.welcome') }}">Survey</a>
        </div>
        <a href="{{ route('login') }}" class="sign-in">Sign In</a>
    </div>

    <div id="home" class="hero fade-in-up">
        <div class="hero-content">
            <img src="/images/logo dindik.png" alt="Logo Dindik" class="logo">
            <div class="text-container">
                <h1 class="fade-in-up fade-in-delay-1">Selamat Datang di</h1>
                <h1 class="fade-in-up fade-in-delay-1">Buku Tamu Elektronik</h1>
                <h2 class="fade-in-up fade-in-delay-2">DINAS PENDIDIKAN PROVINSI JAWA TIMUR</h2>
                <h3>Mewujudkan insan yang cerdas,
                    berakhlak, profesional dan berbudaya</h3>
            </div>
        </div>
    </div>
    <!-- Bagian Form -->
    <div id="form-section" class="form-section fade-in-up">
        <h2>Buku Tamu Dinas Pendidikan Jawa Timur</h2>
        <form class="form-container" action="{{ route('bukutamu.store') }}" method="POST">
            @csrf
            <!-- Kolom Kiri -->
            <div class="form-left">
                <label for="name">Nama:*</label>
                <input type="text" id="name" name="name" placeholder="Nama Pengunjung" required>

                <label for="nik">NIK:*</label>
                <input type="text" id="nik" name="nik" placeholder="NIK Pengunjung" required>

                <label for="phone">Nomor Handphone:*</label>
                <input type="text" id="phone" name="phone" placeholder="Nomor Pengunjung" required>

                <label for="pekerjaan">Pekerjaan:*</label>
                <select id="pekerjaan" name="pekerjaan" required>
                    <option value="" disabled selected>Pekerjaan Pengunjung</option>
                    <option value="Orang Tua / Wali Murid">Orang Tua / Wali Murid</option>
                    <option value="Siswa / Mahasiswa">Siswa / Mahasiswa</option>
                    <option value="Guru">Guru</option>
                    <option value="Swasta">Swasta</option>
                    <option value="Lainnya">Lainnya</option>
                </select>

                <label for="keperluan">Keperluan:*</label>
                <textarea id="keperluan" name="keperluan" required></textarea>
                <button type="submit" class="submit-btn">Submit</button>
            </div>


            <!-- Kolom Kanan -->
            <div class="form-right">
                <label for="alamat">Alamat:*</label>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat Pengunjung" required>

                <!-- Jenis Kelamin & Jenis Identitas dalam satu baris -->
                <div class="form-row">
                    <!-- Jenis Kelamin -->
                    <fieldset class="form-group">
                        <legend>Jenis Kelamin*</legend>
                        <label class="radio-label">
                            <input type="radio" name="gender" value="Perempuan"> Perempuan
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="gender" value="Laki-laki"> Laki-Laki
                        </label>
                    </fieldset>

                    <!-- Jenis Identitas -->
                    <fieldset class="radio-group">
                        <legend>Jenis Identitas*</legend>
                        <label class="radio-label">
                            <input type="radio" name="identitas" value="KTP"> KTP
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="identitas" value="SIM"> SIM
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="identitas" value="Paspor"> Paspor
                        </label>
                    </fieldset>
                </div>

                <label for="bidang">Bidang Tujuan:*</label>
                <select id="bidang" name="bidang" required>
                    <option value="" disabled selected style="color: gray;">Bidang yang Dituju</option>
                    @foreach ($bidang as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                    @endforeach
                </select>

                <label for="rekomendasi">Rekomendasi Cabdin:</label>
                <select id="rekomendasi" name="rekomendasi">
                    <option value="" disabled selected style="color: gray;">Rekomendasi Cabdin</option>
                    @foreach ($rekomendasi as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                    @endforeach
                </select>

                <label>Foto Identitas:*</label>
                <div class="foto-container">
                    <img src="/images/camera.png" alt="Camera Icon" id="camera-icon">
                    <p>Arahkan Kartu Identitas Anda Ke Kamera, Lalu Klik Tombol Ini !</p>
                    <video id="video" autoplay></video>
                    <button type="button" class="capture-btn" id="capture" style="font-weight: bold">Aktifkan
                        Kamera</button>
                    <canvas id="canvas"></canvas>
                </div>
                <small class="note-text">*Wajib diisi</small>
                <input type="hidden" name="foto" id="foto">

                <script>
                    const video = document.getElementById('video');
                    const captureButton = document.getElementById('capture');
                    const canvas = document.getElementById('canvas');
                    const cameraIcon = document.getElementById('camera-icon');
                    let isCameraActive = false;
                
                    captureButton.addEventListener('click', async function (event) {
                        event.preventDefault();
                
                        if (!isCameraActive) {
                            // Aktifkan kamera
                            try {
                                const stream = await navigator.mediaDevices.getUserMedia({
                                    video: { facingMode: 'environment' }
                                });
                                video.srcObject = stream;
                                video.style.display = 'block';
                                cameraIcon.style.display = 'none';
                                captureButton.innerText = 'Ambil Gambar';
                                isCameraActive = true;
                            } catch (error) {
                                alert('Kamera tidak dapat diakses! Pastikan browser mengizinkan akses kamera.');
                            }
                        } else {
                            // Ambil gambar dari kamera
                            const context = canvas.getContext('2d');
                            const width = video.videoWidth;
                            const height = video.videoHeight;
                
                            canvas.width = width;
                            canvas.height = height;
                            context.drawImage(video, 0, 0, width, height);
                
                            const imageDataURL = canvas.toDataURL('image/png');
                            document.getElementById('foto').value = imageDataURL;
                
                            const imgElement = document.createElement('img');
                            imgElement.src = imageDataURL;
                            imgElement.style.width = '100%';
                            imgElement.style.height = 'auto';
                            imgElement.style.borderRadius = '5px';
                
                            // Stop kamera
                            let tracks = video.srcObject.getTracks();
                            tracks.forEach(track => track.stop());
                
                            // Ganti konten
                            document.querySelector('.foto-container').innerHTML = '';
                            document.querySelector('.foto-container').appendChild(imgElement);
                
                            isCameraActive = false;
                        }
                    });
                </script>
            </div>
        </form>
    </div>
    <footer>
        <div id="footer" class="footer-container">
            <div class="footer-logo">
                <img src="/images/logo footer.png" alt="Logo Dinas Pendidikan Jawa Timur">
            </div>

            <div class="footer-menu">
                <h4>Our Menu</h4>
                <ul>
                    <li><a href="#" style="color: #00218D">Home</a>
                    <li><a href="#form-section" style="color: #00218D">Form</a>
                    <li><a href="#" style="color: #00218D">Layanan</a>
                    <li><a href="{{ route('contact') }}" style="color: #00218D">Kontak</a>
                    <li><a href="{{ route('survey.welcome') }}"style="color: #00218D">Survey</a>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.nav-links a').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href.startsWith("#")) {
                        e.preventDefault();
                        const targetId = href.substring(1);
                        const targetElement = document.getElementById(targetId);

                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop -
                                    80, // Sesuaikan dengan tinggi navbar
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>
