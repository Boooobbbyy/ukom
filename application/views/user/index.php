<section class="content">
    <div class="container-fluid">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Form</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="row">


                <!-- ./col -->
            </div>

            <div class="container">
                <div class="alert alert-secondary alert-dismissible fade show" role="alert"> <?= $user['name']; ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <label>Tambah Data Form</label>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nama</label>
                                                <input type="text" value="<?= $user['name']; ?>" class="form-control" id="name" readonly name="name">
                                                <small class="text-danger"><?= form_error('name'); ?></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nisn">NISN</label>
                                                <input type="text" class="form-control" id="nisn" name="nisn">
                                                <small class="text-danger"><?= form_error('nisn'); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jumlah">Alamat</label>
                                                <input type="text" class="form-control" id="jumlah" name="jumlah">
                                                <small class="text-danger"><?= form_error('jumlah'); ?></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="res">Jenis Kelamin</label>
                                                <select name="res" id="res" class="form-control">
                                                    <option value="Laki">Laki Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                <small class="text-danger"><?= form_error('res'); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tanggal">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                                                <small class="text-danger"><?= form_error('tanggal'); ?></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="top">Agama</label>
                                                <select name="top" id="top" class="form-control">
                                                    <option value="Islam">Islam</option>
                                                    <option value="Buddha">Buddha</option>
                                                    <option value="Kristen">Katolik</option>
                                                    <option value="Protestan">Protestan</option>
                                                    <option value="Protestan">Hindu</option>
                                                </select>
                                                <small class="text-danger"><?= form_error('top'); ?></small>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- ================================================================================================================================================ -->

            <!-- Main content -->


            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->