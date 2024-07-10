<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="icon" href="{{ asset('asset/bajukuwhite.svg') }}">
<title>Baju-Ku</title>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('asset/bajukuwhite.svg') }}" height="25px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "welcome") ? 'active' : '' }}" href="/">Home</a>
                </li>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>

        </div>
    </div>
</nav>



<!-- <header class="bg-dark text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Welcome to Baju-Ku</h1>
        <p class="lead">Sistem Pendukung Keputusan Penilaian Toko Baju dengan Metode Weight Product (WP)</p>
    </div>
</header>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-sm rounded">
                <div class="card-body">
                    <h2 class="card-title mb-4">Welcome to Our Website!</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nunc ut
                        purus rhoncus ullamcorper. Ut varius imperdiet nisl, id laoreet neque tempor eu. Aliquam erat
                        volutpat. Proin id risus venenatis, varius augue non, gravida orci. Nam efficitur nibh ac urna
                        tempus feugiat. In hac habitasse platea dictumst. Phasellus laoreet ligula sed ante facilisis,
                        eget congue nisi mollis. Duis bibendum urna sed semper lacinia. Pellentesque ut semper justo.
                        Nullam quis felis ac elit eleifend venenatis. Aenean quis scelerisque nisi, nec feugiat tortor.
                        Morbi et convallis enim.

                        Suspendisse potenti. Proin at massa eu purus iaculis ullamcorper non eget nulla. Nam lacinia
                        hendrerit tincidunt. Duis vestibulum urna sit amet nibh tincidunt, eu fermentum sem congue. Nam
                        volutpat justo in nunc auctor, sed malesuada enim molestie. Quisque lacinia, nisi vel sodales
                        ultrices, dui risus ullamcorper libero, at rutrum nisl lectus at turpis. Nulla facilisi. Nam a
                        nisi eget orci malesuada placerat. Donec volutpat posuere libero, ac vestibulum lorem posuere a.
                    </p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="card shadow-sm rounded">
                <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Featured Content</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content.</p>
                    <a href="#" class="btn btn-secondary">View More</a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="primary-bg" style="padding: 40px 0px !important;">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-8 d-md-none text-center">
                <img src="{{ asset('asset/bajuku.svg') }}" height="200" class="heading-img img-fluid"
                    style="margin-bottom: 8%;">
            </div>
            <div class="col-md-6 text-center text-md-start fade-x-left">
                <div class="fs-2 fw-bold d-md-flex">
                    <span class="fs-sm-7" style="margin-top: 30px;">BAJU-KU APP</span>
                </div>
                <div class="fs-4 fw-bold d-md-flex">
                    <span class="fs-sm-7" style="margin-bottom: 10px">Simple Additive Weighting (SAW)</span>
                </div>
                <div class="my-3 fs-8" style="font-size: 18px;">
                    Selamat datang di Bajuku! Temukan solusi cerdas dalam memilih produk pakaian terbaik dengan metode
                    SAW (Simple Additive Weighting). Dengan navigasi yang mudah, kami membantu Anda menemukan pilihan
                    pakaian yang sesuai dengan preferensi dan kebutuhan Anda. Bersama Bajuku, wujudkan gaya busana
                    impian Anda untuk kesuksesan penampilan Anda!
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('asset/bajuku.svg') }}" height="350" class="ms-auto d-none d-md-block fade-x-right">
            </div>
        </div>
        <div class="row row-card-heading gy-1 mt-md-5">
            <div class="col-md-4 fade-y">
                <div class="bg-dark heading-card position-relative">
                    <div class="card-body p-4 pt-md-5 text-center">
                        <div class="fs-6 fs-sm-7" style="color: paleturquoise;">Stylish Comfort</div>
                    </div>
                    <span class="icon position-absolute translate-middle">
                        <img src="{{ asset('asset/icon.png') }}" height="70">
                    </span>
                </div>
            </div>
            <div class="col-md-4 fade-y animate-2">
                <div class="bg-dark heading-card position-relative">
                    <div class="card-body p-4 pt-md-5 text-center">
                        <div class="fs-6 fs-sm-7" style="color: paleturquoise;">Fashion Simplified</div>
                    </div>
                    <span class="icon position-absolute translate-middle">
                        <img src="{{ asset('asset/icon.png') }}" height="70">
                    </span>
                </div>
            </div>
            <div class="col-md-4 fade-y animate-3">
                <div class="bg-dark heading-card position-relative">
                    <div class="card-body p-4 pt-md-5 text-center">
                        <div class="fs-6 fs-sm-7" style="color: paleturquoise;">Trendy Ease</div>
                    </div>
                    <span class="icon position-absolute translate-middle">
                        <img src="{{ asset('asset/icon.png') }}" height="70">
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light" style="padding: 3%; margin-bottom:30px;">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-md-6">
                <img src="{{ asset('asset/bajuku.svg') }}">
            </div>
            <div class="col-md-6 text-center text-md-start" style="color: black;">
                <div class="fs-6 fw-bold">Apa Sih Baju-Ku App?</div>
                <div class="fs-5 fw-bold my-4">Baju-Ku adalah aplikasi yang menggunakan metode Simple Additive Weighting
                    (SAW) untuk membantu pengguna memilih baju yang paling sesuai dengan kriteria yang mereka tentukan.
                </div>
                <div class="fs-7">
                    Kami adalah perusahaan yang menyediakan layanan terintegrasi dalam pengembangan aplikasi berbasis
                    SPK. Dengan pendekatan holistik, kami membantu klien mencapai tujuan mereka melalui solusi inovatif,
                    yang meliputi berbagai aspek teknis dan bisnis.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container bg-light p-4 mb-3 rounded">
    <div class="fs-6 fw-bold mb-5" style="text-align: center;">
        Bagaimana Sih Cara Menentukan Toko Baju Terbaik Menggunakan Baju-Ku?
    </div>
    <div class="card mb-3 w-60 bg-dark">
        <div class="row g-0">
            <div class="col-md-3">
                <img src="{{ asset('asset/aset1.svg') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body text-white">
                    <h5 class="card-title">Tentukan Kriteria</h5>
                    <p class="card-text mt-3">Pada Sistem Pendukung Keputusan (SPK) dengan metode Simple Additive Weighting (SAW), penentuan kriteria sangat penting karena mempengaruhi hasil akhir keputusan. Kriteria adalah faktor-faktor yang digunakan untuk mengevaluasi berbagai alternatif, seperti harga, kualitas produk, reputasi toko, dan layanan pelanggan dalam memilih toko baju terbaik. Setiap kriteria diberi bobot sesuai dengan tingkat kepentingannya, dan data terkait kriteria dinormalisasi untuk perbandingan yang adil. Nilai total setiap alternatif dihitung berdasarkan bobot dan nilai kriteria, sehingga alternatif dengan nilai tertinggi menjadi pilihan terbaik. Penentuan kriteria ini harus dilakukan secara cermat untuk menghasilkan keputusan yang akurat dan sesuai dengan tujuan.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 w-60 bg-dark">
        <div class="row g-0">
            <div class="col-md-3">
                <img src="{{ asset('asset/aset2.svg') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body text-white">
                    <h5 class="card-title">Tentukan Alternative</h5>
                    <p class="card-text mt-3">Dalam Sistem Pendukung Keputusan (SPK) menggunakan metode Simple Additive Weighting (SAW), menentukan alternatif dilakukan dengan mengidentifikasi semua opsi yang tersedia, seperti produk, layanan, atau pilihan lainnya yang akan dievaluasi. Setelah identifikasi, kriteria-kriteria yang relevan ditetapkan dan bobot untuk masing-masing kriteria ditentukan untuk mencerminkan tingkat kepentingannya. Setiap alternatif dievaluasi berdasarkan kriteria-kriteria ini, dengan nilai-nilai yang dihitung menggunakan rumus SAW untuk menentukan nilai totalnya. Alternatif dengan nilai total tertinggi dianggap sebagai pilihan terbaik sesuai dengan kriteria yang telah ditetapkan, memungkinkan pengambil keputusan untuk membuat pilihan yang lebih informan dan objektif.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 w-60 bg-dark">
        <div class="row g-0">
            <div class="col-md-3">
                <img src="{{ asset('asset/aset3.svg') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body text-white">
                    <h5 class="card-title">Normalisasi & Hasil</h5>
                    <p class="card-text mt-3">Dalam sistem pendukung keputusan berbasis Metode Simple Additive Weighting (SAW), normalisasi adalah proses penting untuk mengubah nilai-nilai kriteria yang berbeda skala atau satuan menjadi skala yang relatif serupa, biasanya antara 0 hingga 1. Normalisasi memastikan bahwa semua kriteria memiliki pengaruh yang seimbang dalam perhitungan bobot akhir, sehingga hasil perankingan atau keputusan yang dihasilkan lebih objektif dan dapat dipertanggungjawabkan. Hasil dari proses SAW adalah peringkat atau nilai tertinggi yang menunjukkan alternatif terbaik berdasarkan kriteria yang telah dinormalisasi dan bobotnya. Dengan demikian, normalisasi memainkan peran krusial dalam memastikan keadilan dan konsistensi dalam proses pengambilan keputusan berbasis SAW.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer bg-dark text-light text-center py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="my-auto">2024 &copy; Baju-Ku</div>
            </div>
            <div class="col-md-4">
                <div class="my-auto">All Rights Reserved</div>
            </div>
        </div>
    </div>
</footer>


<style>
    .primary-bg {
        background-color: var(--first);
        color: var(--third);
    }

    .secondary-bg {
        background-color: var(--second);
        color: white;
    }

    .heading-card {
        margin-top: 90px;
        position: relative;
        background-color: black;
        border-radius: 10px;
    }

    .heading-card .icon {
        height: 70px;
        width: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 70px;
        top: 0;
        left: 50%;
        background: var(--third);
        background-color: white;
        outline: 8px solid var(--first);
    }

    .heading-img {
        height: 200px;
    }

    .about-img {
        border-radius: 20px;
    }

    @media screen and (max-width: 570px) {

        .primary-bg,
        .secondary-bg {
            padding: 20px 0px;
        }

        .fs-sm-7 {
            font-size: 13px !important;
        }

        .fs-8 {
            font-size: 11px;
        }

        .navbar-brand img {
            height: 35px;
        }

        .heading-img {
            height: 150px;
        }

        .row-card-heading img {
            height: 30px;
            width: 30px;
        }

        .about-img {
            height: 300px !important;
            width: 100%;
        }

        .role-card {
            height: 110px;
        }

        .role-card:hover .role-card-body .fs-5 {
            transform: translateY(-25px);
        }

        .role-card .role-card-body .hyperlink {
            transform: translateY(5px);
        }

        .role-card:hover .role-card-body .hyperlink {
            transform: translateY(0);
        }

        .animated-heading-text {
            height: 30px;
        }

        @keyframes example {
            0% {
                transform: translateY(0px);
            }

            25% {
                transform: translateY(-35px);
            }

            50% {
                transform: translateY(-70px);
            }

            75% {
                transform: translateY(-105px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .heading-card {
            width: 90%;
            margin-left: auto;
        }

        .heading-card .card-body {
            padding: 25px !important;
        }

        .heading-card .icon {
            height: 45px;
            width: 45px;
            border-radius: 45px;
            outline: 5px solid var(--first);
            top: 50%;
            left: -2%;
        }

        .heading-card .icon::after {
            box-shadow: none;
        }

        .heading-card .icon img {
            height: 18px;
            width: 18px;
        }
    }

    .footer .my-auto::before {
        content: "";
        height: 80%;
        width: 3px;
        position: absolute;
        left: -3px;
        top: 10px;
        background-color: var(--second);
    }
</style>