<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->


    <div class="card">
        <div class="card-header">
            Detail Data Form
        </div>
        <div class="card-body">
            <p class="card-text">Nama = <?= $mahasiswa['name']; ?></p>
            <p class="card-text">Nisn = <?= $mahasiswa['nisn']; ?></p>
            <p class="card-text">Agama = <?= $mahasiswa['top']; ?></p>
            <p class="card-text">Status = <?= $mahasiswa['rep']; ?></p>
            <p class="card-text">Gender = <?= $mahasiswa['res']; ?></p>
            <p class="card-text">Tgl Lahir = <?= $mahasiswa['tanggal']; ?></p>
            <a href="<?= base_url('user/tamp') ?>" class="btn btn-primary">Kembali</a>

        </div>
    </div>