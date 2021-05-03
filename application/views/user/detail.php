<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->


    <div class="card">
        <div class="card-header">
            Detail Siswa
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
            <p class="card-text"><?= $mahasiswa['harga'] * 1000; ?></p>
            <p class="card-text"><?= $mahasiswa['tanggal']; ?></p>
            <p class="card-text"><?= $mahasiswa['rep']; ?></p>
            <a href="<?= base_url('Form/edit'); ?>" class="btn btn-primary">Kembali</a>

        </div>
    </div>