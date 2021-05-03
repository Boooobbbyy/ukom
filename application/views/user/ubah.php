 <!--------------------------------------------------------------------------- -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0">ubah data Form</h1>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <div class="container">

         <div class="row mt-3">
             <div class="col-md-6">
                 <div class="card">
                     <div class="card-header">
                         <label>ubah Data Form</label>
                     </div>
                     <div class="card-body">
                         <form action="" method="post">
                             <input type="hidden" name="id" value="<?= $mahasiswa["id"];  ?>">
                             <div class="form-group">
                                 <label for="nama">Nama </label>
                                 <input value=" <?= $user['name']; ?>" type="text" class="form-control" id="nama" name="nama" readonly>
                                 <small class="text-danger"><?= form_error('nama'); ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="top">Progress</label>
                                 <input value="<?= $mahasiswa['top']; ?> " type="text" class="form-control" id="top" name="top">
                                 <small class="text-danger"><?= form_error('top'); ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="harga">Harga</label>
                                 <input value="<?= $mahasiswa['harga']; ?> " type="text" class="form-control" id="harga" name="harga" readonly>
                                 <small class="text-danger"><?= form_error('harga'); ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="tanggal">Tanggal Masuk</label>
                                 <small><?= $mahasiswa['tanggal']; ?></small>
                                 <input value="<?= $mahasiswa['tanggal']; ?> " type="text" class="form-control" id="tanggal" name="tanggal" readonly>

                             </div>
                             <div class="form-group">
                                 <label for="rep">Status Pembayaran</label>
                                 <small><?= $mahasiswa['rep']; ?></small>
                                 <select autocomplete="off" autofocus="on" class="form-control custom-select " id="rep" name="rep">
                                     <option selected disabled> Pilih salah satu </option>
                                     <option value="Lunas">Lunas</option>
                                     <option value="Belum Lunas">Belum Lunas</option>

                                 </select>
                                 <small class="text-danger"><?= form_error('rep'); ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="res">Status Kursus</label>
                                 <small><?= $mahasiswa['res']; ?></small>
                                 <select autocomplete="off" autofocus="on" class="form-control custom-select " id="res" name="res">
                                     <option selected disabled> Pilih salah satu </option>
                                     <option value="1">Lulus</option>
                                     <option value="0">Belum Lulus</option>

                                 </select>
                             </div>
                             <button type="submit" name="ubah" class="btn btn-primary float-right">ubah Data</button>
                         </form>

                     </div>
                 </div>

             </div>
         </div>

     </div>

     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->