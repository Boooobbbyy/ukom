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
                                 <label for="judul">Nama </label>
                                 <input value=" <?= $user['name']; ?>" type="text" class="form-control" id="judul" name="judul" readonly>
                                 <small class="text-danger"><?= form_error('judul'); ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="jumlah">komen</label>
                                 <input value="<?= $mahasiswa['jumlah']; ?> " type="text" class="form-control" id="jumlah" name="jumlah" readonly>
                                 <small class="text-danger"><?= form_error('jumlah'); ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="tanggal">Tanggal Masuk</label>
                                 <small><?= $mahasiswa['tanggal']; ?></small>
                                 <input value="<?= $mahasiswa['tanggal']; ?> " type="text" class="form-control" id="tanggal" name="tanggal" readonly>

                             </div>
                             <div class="form-group">
                                 <label for="rep">Reply </label>
                                 <input value=" <?= $mahasiswa['rep']; ?>" type="text" class="form-control" id="rep" name="rep">
                                 <small class="text-danger"><?= form_error('rep'); ?></small>
                             </div>
                             <div class="form-group">
                                 <input type="hidden" value="1" class="form-control" id="res" name="res">
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