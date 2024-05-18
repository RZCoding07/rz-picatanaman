<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="WEB PICA (Problem Identification and Corrective Action) Holding Palmco x PICA Team .">
    <meta name="keywords" content="Aplikasi Monitoring PICA, PTPN4, Politeknik Negeri Medan, Teknik Pengolahan, Nusantara, PTPN, PTPN IV">
    <meta name="author" content="✨ ✨ PICA Team ( Muhammad Rizky Lubis, Prayogi Wiranata, Muhammad Hafidz Alfatih Ginting ) ">
    <title><?= $title; ?> | MONITORING PICA <?= date('Y') ?></title>
    <!-- Vendors Style-->
    <link rel="stylesheet" href="/assets/css/vendors_css.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css">
    <!-- Style-->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/skin_color.css">
    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- select2 bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js" integrity="sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .sidebar-menu>li>a>i {
            width: 30px;
            line-height: 28px;
            font-size: 1.5714285714rem;
            display: inline-block;
            vertical-align: middle;
            color: #172b4c;
            text-align: center;
            border-radius: 10px;
            margin-right: 15px;
            background-color: transparent;
        }

        .treeview-menu>li>a {
            padding: 10px 10px 10px 0px;
            display: block;
            font-size: 1rem;
            /* margin-right: 10px; */
        }

        .treeview-menu>li>a>i {
            width: 20px;
            padding-right: 20px;
            padding-left: 10px;
            margin-right: 15px;
        }

        .treeview-menu .treeview-menu {
            padding-left: 0px;
        }
    </style>
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div id="loader" style="display: flex; justify-content: center; align-items: center;">
        <img style="height: 12rem;width:auto;" src="/interface/images/loading.gif" alt="">
    </div>
    <div class="wrapper">
        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
                    <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </a>
                <!-- Logo -->
                <a href="index-2.html" class="logo">
                    <!-- logo-->
                    <div class="logo-lg justify-content-center align-items-center">
                        <span class="light-logo text-bold"><img src="/assets/images/Logo_PTPN4.png" class="p-2" style="margin-left: -30px;" height="50px" alt="logo"> Monitoring PICA</span>
                        <span class="dark-logo text-bold"><img src="/assets/images/Logo_PTPN4.png" class="p-2" style="margin-left: -30px;" height="50px" alt="logo"> Monitoring PICA</span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item d-md-none">
                            <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
                                <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-md-none  d-flex justify-content-center align-items-center">
                            <a href="<?= base_url() ?>" class="waves-effect bg-white waves-light nav-link">Kembali</a>

                        </li>
                        <li style="font-weight:500;" class="px-5 btn-group nav-item d-none d-xl-inline-block d-flex justify-content-center align-items-center">
                            <a href="<?= base_url() ?>" class="waves-effect bg-white waves-light nav-link">Beranda</a>
                        </li>
                        <li style="font-weight:500;" class="px-5 btn-group nav-item d-none d-xl-inline-block d-flex justify-content-center align-items-center">
                            <a class="text-capitalize waves-effect bg-white waves-light nav-link" href="<?= base_url('detail-pks') ?>">Detail PKS</a>
                        </li>
                        <li style="font-weight:500;" class="px-5 btn-group nav-item d-none d-xl-inline-block d-flex justify-content-center align-items-center">
                            <a class="text-capitalize waves-effect bg-white waves-light nav-link" href="<?= base_url('pica-off-farm') ?>">PICA PKS</a>
                        </li>
                        <li style="font-weight:500;" class="px-5 btn-group nav-item d-none d-xl-inline-block d-flex justify-content-center align-items-center">
                            <a class="text-capitalize waves-effect bg-white waves-light nav-link" href="<?= base_url('pica-cluster') ?>">PICA Cluster</a>
                        </li>
                        <li style="font-weight:500;" class="px-5 btn-group nav-item d-none d-xl-inline-block d-flex justify-content-center align-items-center">
                            <a class="text-capitalize waves-effect bg-white waves-light nav-link" href="<?= base_url('histori') ?>">Histori Kinerja</a>
                        </li>
                        <li style="font-weight:500;" class="px-5 btn-group nav-item d-none d-xl-inline-block d-flex justify-content-center align-items-center">
                            <a class="text-capitalize waves-effect bg-white waves-light nav-link" href="<?= base_url('identifikasi-masalah') ?>">Identifikasi Masalah</a>
                        </li>
                        <li style="font-weight:500;" class="px-5 btn-group nav-item d-none d-xl-inline-block d-flex justify-content-center align-items-center">
                            <a class="text-capitalize waves-effect bg-white waves-light nav-link" href="<?= base_url('program-kerja') ?>">Progam Kerja</a>
                        </li>

                        <li style="font-weight:500;" class="px-5 btn-group nav-item d-none d-xl-inline-block d-flex justify-content-center align-items-center">
                            <a class="text-capitalize waves-effect bg-white waves-light nav-link" href="<?= base_url('dashboard') ?>">Dashboard</a>
                        </li>


                    </ul>
                </div>


                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
                                <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>


                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="User">
                                <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="Profil"><i class="ti-user text-muted me-2"></i> Profile</a>
                                    <a class="dropdown-item" href="<?= base_url('logout') ?>"><i class="ti-lock text-muted me-2"></i> Logout</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Control Sidebar Toggle Button -->

                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" id="themeSwitch" class="waves-effect waves-light" onclick="switchTheme()">
                                <i class="icon-Moon"><span class="path1"></span><span class="path2"></span></i>
                                <i class="icon-Sun" style="display: none; color: yellow;"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" id="yscroll" style="height: 100%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="header">Dashboard</li>
                            <li>
                                <a href="dashboard">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <?php if (session()->get('role') ==  'Superadmin') : ?>
                                <li>
                                    <a href="users">
                                        <i class="fad fa-users"></i><span class="path1"></span><span class="path2"></span></i>
                                        <span>Data Pengguna</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="regional">
                                        <i class="fad fa-map-pin"></i><span class="path1"></span><span class="path2"></span></i>
                                        <span>Data Regional</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pks">
                                        <i class="fad fa-map-marker-alt"></i><span class="path1"></span><span class="path2"></span></i>
                                        <span>Data PKS</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="kinerja">
                                        <i class="fad fa-user-hard-hat"></i><span class="path1"></span><span class="path2"></span></i>
                                        <span>Data Kinerja</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="norma">
                                        <i class="fad fa-chart-network"></i><span class="path1"></span><span class="path2"></span></i>
                                        <span>Data Norma</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="progja">
                                    <i class="fad fa-tasks"></i><span class="path1"></span><span class="path2"></span></i>
                                    <span>Data Program Kerja</span>
                                </a>
                            </li>
                            <li>
                                <a href="identifikasimasalah">
                                    <i class="fad fa-th-list"></i><span class="path1"></span><span class="path2"></span></i>
                                    <span>Identifikasi Masalah</span>
                                </a>
                            </li>
                            <li>
                                <a href="faktorkriteria">
                                    <i class="fad fa-wrench"></i><span class="path1"></span><span class="path2"></span></i>
                                    <span>Faktor Kriteria</span>
                                </a>
                            </li>

                            <li class="treeview">
                                <a href="#">
                                    <i class="fad fa-archive"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Master</span>
                                    <span class="pull-right-container">
                                        <i class="fad fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu" style="display: none;">
                                    <li>
                                        <a href="uploadwhy">
                                            <i class="fad fa-cloud-upload"><span class="path1"></span><span class="path2"></span></i>
                                            <span>Upload Data</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="problem1">
                                            <i class="fad fa-code-branch"><span class="path1"></span><span class="path2"></span></i>
                                            <span>Problem 1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="problem2">
                                            <i class="far fa-code-branch"><span class="path1"></span><span class="path2"></span></i>
                                            <span>Problem 2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="problem3">
                                            <i class="far fa-code-branch"><span class="path1"></span><span class="path2"></span></i>
                                            <span>Problem 3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="problem4">
                                            <i class="far fa-code-branch"><span class="path1"></span><span class="path2"></span></i>
                                            <span>Problem 4</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="problem5">
                                            <i class="far fa-code-branch"><span class="path1"></span><span class="path2"></span></i>
                                            <span>Problem 5</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </section>
            <div class="sidebar-footer">
                <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Settings"><span class="icon-Settings-2"></span></a>
                <a href="mailbox.html" class="link" data-bs-toggle="tooltip" title="Email"><span class="icon-Mail"></span></a>
                <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <?php if ($title == 'Dashboard') : ?>
                                <h3 class="page-title text-capitalize"><?= $title ?></h3>
                            <?php else : ?>
                                <h3 class="page-title text-capitalize">Data <?= $title ?></h3>
                            <?php endif; ?>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="fad fa-home"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                                        <?php if ($title != 'Dashboard') : ?>
                                            <li class="breadcrumb-item active text-capitalize" aria-current="page">Data <?= $title ?></li>
                                        <?php endif; ?>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->

                <?= $this->renderSection('content') ?>

                <!-- /.content -->

            </div>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer text-center">
            &copy; <?= date('Y') ?> <a href="#"> Monitoring PICA </a>. All Rights Reserved.
        </footer>

    </div>
    <!-- Vendor JS -->
    <script src="/assets/vendor_components/datatable/datatables.min.js"></script>
    <script src="/assets/js/vendors.min.js"></script>
    <!-- EduAdmin App -->
    <!-- EduAdmin App -->
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/pages/advanced-form-element.js"></script>
    <script src="/assets/js/theme_change.js"></script>
    <script src="/assets/js/pages/validation.js"></script>
    <script src="/assets/js/pages/form-validation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.10/js/perfect-scrollbar.jquery.js"></script>

    <?= $this->renderSection('script') ?>
    <script>
        $(document).ready(function() {
            $('#yscroll').perfectScrollbar();
            $('.select2').css('width', '100%');
            $('.select2').each(function() {
                $(this).select2({
                    dropdownParent: $(this).parent()
                });
            })
        });
    </script>
</body>

</html>