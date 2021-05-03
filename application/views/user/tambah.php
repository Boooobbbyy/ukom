 <!--------------------------------------------------------------------------- -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0">Tambah Form</h1>
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
                         <label>Tambah Data Form</label>
                     </div>
                     <div class="card-body">
                         <form action="" method="post">
                             <div class="form-group">
                                 <label for="nama">Nama</label>
                                 <input type="text" value="<?= $user['name']; ?>" class="form-control" id="nama" name="nama">
                                 <small class="text-danger"><?= form_error('nama'); ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="top">Topik</label>
                                 <input type="text" class="form-control" id="top" name="top">
                                 <small class="text-danger"><?= form_error('top'); ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="harga">Masukan</label>
                                 <input type="text" class="form-control" id="harga" name="harga">
                                 <small class="text-danger"><?= form_error('harga'); ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="tanggal">Tanggal Masuk</label>
                                 <input type="date" class="form-control" id="tanggal" name="tanggal">
                                 <small class="text-danger"><?= form_error('tanggal'); ?></small>
                             </div>

                             <div class="form-group">
                                 <input type="hidden" value="" class="form-control" id="rep" name="rep">
                                 <small class="text-danger"><?= form_error('nama'); ?></small>
                             </div>
                             <div class="form-group">
                                 <input type="hidden" value="0" class="form-control" id="res" name="res">
                                 <small class="text-danger"><?= form_error('nama'); ?></small>
                             </div>
                             <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                         </form>

                     </div>
                 </div>

             </div>
         </div>

     </div>

     <!-- /.content -->
 </div>