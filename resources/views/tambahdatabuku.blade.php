<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tambah Data Buku</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/dashboard" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">My Perpus</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        &ensp; <span> Nanda Veri Febriansyah</span>
                    </a><!-- End Profile Iamge Icon -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/data-buku">
                    <i class="bi bi-journal-album"></i>
                    <span>Data Buku</span>
                </a>
            </li><!-- End Data Buku Nav -->

            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Data Anggota</span>
                </a>
            </li><!-- End Data Anggota Nav -->

            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <i class="bi bi-kanban-fill"></i>
                    <span>Transaksi Pinjam</span>
                </a>
            </li><!-- End Transaksi Pinjam Nav -->

            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End Logout Nav -->
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Data Buku</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="">
                    <div class="">
                        <!-- Primary Color Bordered Table -->
                        <!-- No Labels Form -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"></h5>

                                <!-- No Labels Form -->
                                <form class="row g-3">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Judul">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" placeholder="Pengarang">
                                    </div>
                                    <div class="col-md-12">
                                        <select id="inputState" class="form-select">
                                            <option selected>Kategori</option>
                                            <option>Pilih Salah Satu</option>
                                        </select>
                                    </div>
                                    <div class="text-right">
                                        <p class="card-text"><a href="/data-buku" class="btn btn-secondary">Kembali</a>
                                            <a href="/data-buku" class="btn btn-primary">Submit</a>
                                        </p>
                                    </div>
                                </form><!-- End No Labels Form -->

                            </div>
                        </div>
                        <!-- End Primary Color Bordered Table -->


                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>