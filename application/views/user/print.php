<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>dist/css/adminlte.min.css">
    <!-- MyCSS-->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>style.css">

</head>

<body>


    <hr>
    <h5 class="text-center"><u>Penerimaan Siswa Baru</u></h5>
    <h6 class="text-center">TAHUN AJARAN 2021/2022</h6><br>
    <h4 class="text-center"><?= $mahasiswa['rep']; ?></h4>
    <br>
    <div class="container box">
        <div class="col-lg-12 box">
            <div class="panel panel-default">
                <div class="panel-body noselect">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>NISN</td>
                                <td>:<?= $mahasiswa['nisn']; ?></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>: <?= $mahasiswa['name']; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>: <?= $mahasiswa['res']; ?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>: <?= $mahasiswa['top']; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>: <?= $mahasiswa['tanggal']; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: <?= $mahasiswa['jumlah']; ?></td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>

        <button onclick="window.print()">cetak</button>
    </center>
</body>

</html>