<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Transaksi</title>
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

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Transaksi</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="">
                    <div class="">
                        <p class="card-text"><a href="{{ route('tambah-data-transaksi') }}"
                                class="btn btn-primary">Tambah</a></p>
                        <!-- Primary Color Bordered Table -->

                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title">Tabel Data Transaksi Pinjam Buku</h5>

                                <table class="table table-bordered border-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Anggota</th>
                                            <th scope="col">Buku</th>
                                            <th scope="col">Tanggal Pinjam</th>
                                            <th scope="col">Tanggal Kembali</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 0;

                                    @endphp
                                    @foreach ($data as $d)
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{ $data->firstitem() + $no++ }}</th>
                                                <td>{{ $d['ID_Anggota'] }}</td>
                                                <td>{{ $d['buku'] }}</td>
                                                <td>{{ $d['tgl_pinjam'] }}</td>
                                                <td>{{ $d['tgl_kembali'] }}</td>
                                                <td>
                                                    <p class="card-text"><a
                                                            href="{{ url('edit-data-transaksi', $d->id) }}"
                                                            class="btn btn-warning">Edit</a>
                                                        <a href="{{ url('delete-data-transaksi', $d->id) }}"
                                                            onclick="return confirm('Yakin?')"
                                                            class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!-- End Primary Color Bordered Table -->
                                {{ $data->links() }}
                            </div>
                        </div>

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
