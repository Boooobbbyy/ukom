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
                             <div class="row mt-3">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="name">Nama </label>
                                         <input value=" <?= $mahasiswa['name']; ?>" type="text" class="form-control" id="name" name="name" readonly>
                                         <small class="text-danger"><?= form_error('name'); ?></small>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="nisn">NISN</label>
                                         <input value="<?= $mahasiswa['nisn']; ?> " type="text" class="form-control" id="nisn" name="nisn" readonly>
                                         <small class="text-danger"><?= form_error('nisn'); ?></small>
                                     </div>
                                 </div>
                             </div>
                             <div class="row mt-3">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="jumlah">Alamat</label>
                                         <input value="<?= $mahasiswa['jumlah']; ?> " type="text" class="form-control" id="jumlah" name="jumlah" readonly>
                                         <small class="text-danger"><?= form_error('jumlah'); ?></small>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="res">Gender</label>
                                         <input value="<?= $mahasiswa['res']; ?> " type="text" class="form-control" id="res" name="res" readonly>
                                         <small class="text-danger"><?= form_error('res'); ?></small>
                                     </div>
                                 </div>
                             </div>
                             <div class="row mt-3">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="tanggal">Tanggal Lahir</label>

                                         <input value="<?= $mahasiswa['tanggal']; ?> " type="text" class="form-control" id="tanggal" name="tanggal" readonly>

                                     </div>

                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="top">Agama</label>
                                         <input value="<?= $mahasiswa['top']; ?> " type="text" class="form-control" id="top" name="top" readonly>
                                     </div>

                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="rep">Status </label>
                                         <select name="rep" id="rep" class="form-control">
                                             <option value="0">Tidak Lulus</option>
                                             <option value="1">Lulus</option>
                                         </select>
                                         <small class="text-danger"><?= form_error('rep'); ?></small>
                                     </div>
                                 </div>
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