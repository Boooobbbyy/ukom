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
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $sum ?></h3>

                            <p>Reply</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= count($buku) - $sum; ?><sup style="font-size: 20px"></sup></h3>

                            <p>Belum di Reply</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= count($buku); ?></h3>

                            <p>Jumlah Keluhan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
            </div>

            <div class="container">

                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <label>Tambah Data Form</label>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="judul">Nama</label>
                                        <input type="text" value="<?= $user['name']; ?>" class="form-control" id="judul" readonly name="judul">
                                        <small class="text-danger"><?= form_error('judul'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="top">Topik</label>
                                        <input type="text" class="form-control" id="top" name="top">
                                        <small class="text-danger"><?= form_error('top'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Masukan</label>
                                        <input type="text" class="form-control" id="jumlah" name="jumlah">
                                        <small class="text-danger"><?= form_error('jumlah'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal Masuk</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                                        <small class="text-danger"><?= form_error('tanggal'); ?></small>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" value="" class="form-control" id="rep" name="rep">
                                        <small class="text-danger"><?= form_error('judul'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" value="0" class="form-control" id="res" name="res">
                                        <small class="text-danger"><?= form_error('judul'); ?></small>
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