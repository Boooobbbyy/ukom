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
            <h5 class="card-title"><?= $mahasiswa['judul']; ?></h5>
            <p class="card-text"><?= $mahasiswa['jumlah']; ?></p>
            <p class="card-text"><?= $mahasiswa['tanggal']; ?></p>
            <a href="<?= base_url('user/index') ?>" class="btn btn-primary">Kembali</a>

        </div>
    </div>