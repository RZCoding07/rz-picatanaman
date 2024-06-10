<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Topic Listing Bootstrap 5 Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
</head>

<body id="top">

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php base_url(); ?>">
                    <!-- <i class="bi-back"></i>
                    <span>Topic</span> -->
                    <img src="images/logo_ptpn.png" alt="Logo ptpn 4" height="100">
                </a>

                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto header-megamenu">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?= base_url('/') ?>">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?= base_url('/monitoring-pica') ?>">Monitoring Pica</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/grafik-kuadran') ?>">Kuadran Grafik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/rank-kebun') ?>">Rank Kebun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/histori-kinerja') ?>">History Kinerja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/identifikasi-masalah') ?>">Identifikasi Masalah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/program-kerja') ?>">Program Kerja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/dashboard-eksekutif') ?>">Dashboard Eksekutif</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/lokasi-kebun') ?>">Lokasi Kebun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href=" <?= base_url('/dashboard') ?>">Dashboard</a>
                        </li>

                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">MONITORING PICA TANAMAN</h1>

                        <h6 class="text-center">Problem Identification and Corrective Action</h6>

                </div>
            </div>
        </section>
        
        <?= $this->renderSection('content'); ?>
    </main>

    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <a class="navbar-brand mb-2" href="<?php base_url(); ?>">
                        <!-- <i class="bi-back"></i> -->
                        <img src="images/logo_ptpn.png" alt="Logo ptpn 4" height="100">
                        <!-- <p>PT Perkebunan Nusantara IV</p> -->
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <h6 class="site-footer-title mb-3">Resources</h6>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Beranda</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Monitoring Pica</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Grafik Kuadran</a>
                        </li>

                   </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Information</h6>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 6281-1617-1900" class="site-footer-link">
                            +62 81-1617-1900
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:pengaduan@ptpn4.co.id" class="site-footer-link">
                            pengaduan@ptpn4.co.id
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            English</button>

                        <ul class="dropdown-menu">
                            <li><button class="dropdown-item" type="button">Thai</button></li>

                            <li><button class="dropdown-item" type="button">Myanmar</button></li>

                            <li><button class="dropdown-item" type="button">Arabic</button></li>
                        </ul>
                    </div>

                    <p class="copyright-text mt-lg-5 mt-4">Copyright &copy; <?php echo date("Y"); ?> PT Perkebunan Nusantara IV Regional II. All rights reserved.
                        <br><br>Design: With Love by <a href="https://github.com/sayahafidz">Muhammad Hafidz Alfatih Ginting</a>
                        And <a href="https://github.com/RZCoding07">Muhammad Rizky Lubis</a>
                    </p>

                </div>

            </div>
        </div>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>