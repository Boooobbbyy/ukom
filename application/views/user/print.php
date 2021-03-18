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

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="container mt-3">

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama </th>
                        <th scope="col">Masukan</th>
                        <th scope="col">Reply</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($buku as $ars) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $ars['judul']; ?></td>
                            <td><?= $ars['jumlah']; ?></td>
                            <td><?= $ars['rep']; ?> </td>
                        </tr>

                    <?php endforeach; ?>
                    <td>Jumlah <?= count($buku) - $sum; ?> <?= $sum ?></td>
                </tbody>
            </table>

            <button onclick="window.print()">cetak</button>
        </div>


    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/adminlte/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/adminlte/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/adminlte/'); ?>dist/js/adminlte.min.js"></script>
</body>

</html>