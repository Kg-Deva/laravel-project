<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tambah Data Anggota</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logocreative.png" rel="icon">
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
    @include('header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        @include('sidebar')
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah Data Anggota</h1>
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
                                <form class="row g-3" action="{{ route('simpan-data-anggota') }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <h5 class="card-title"></h5>

                                    <!-- No Labels Form -->

                                    <div class="col-md-12">
                                        <label for="basicInput">Nim</label>
                                        <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa"
                                            name="nim" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="basicInput">Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama" name="nama"
                                            required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="basicInput">Prodi</label>
                                        <select id="inputState" class="form-select" name="prodi" required>
                                            <option selected>Prodi</option>
                                            <option>Teknik Informatika</option>
                                            <option>Sistem Informasi</option>
                                            <option>Ilmu Komunikasi</option>
                                        </select>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-secondary me-1 mb-1"><a style="color:white;"
                                                href="/data-anggota">Kembali</a></button>
                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                            Submit
                                        </button>

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
