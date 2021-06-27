 <!--------------------------------------------------------------------------- -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0">ubah data user</h1>
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
                         <label>ubah Data user</label>
                     </div>
                     <div class="card-body">
                         <form action="" method="post">
                             <input type="hidden" name="id" value="<?= $userss["id"];  ?>">
                             <div class="form-group">
                                 <label for="name">Nama </label>
                                 <input value=" <?= $userss['name']; ?>" type="text" class="form-control" id="name" name="name">
                                 <small class="text-danger"><?= form_error('name'); ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="email">email</label>
                                 <input value="<?= $userss['email']; ?> " type="text" class="form-control" id="email" name="email">
                                 <small class="text-danger"><?= form_error('email'); ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="password">password</label>
                                 <input value="" type="text" class="form-control" id="password" name="password">
                                 <small class="text-danger"><?= form_error('password'); ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="date_created">Tanggal Masuk</label>
                                 <small><?= $userss['date_created']; ?></small>
                                 <input value="<?= $userss['date_created']; ?> " type="text" class="form-control" id="date_created" name="date_created">

                             </div>

                             <div class="form-group">
                                 <label for="role_id">peran</label>
                                 <select autocomplete="off" autofocus="on" class="form-control custom-select " id="role_id" name="role_id">
                                     <option value="<?= $userss['role_id']; ?>" selected> Pilih salah satu </option>
                                     <option value="1">user</option>
                                     <option value="2">admin</option>

                                 </select>

                                 <small class="text-danger"><?= form_error('role_id'); ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="is_active">status</label>
                                 <select autocomplete="off" autofocus="on" class="form-control custom-select " id="is_active" name="is_active">
                                     <option value="<?= $userss['is_active']; ?>" selected> Pilih salah satu </option>
                                     <option value="1">aktif</option>
                                     <option value="0">non aktif</option>

                                 </select>

                                 <small class="text-danger"><?= form_error('is_active'); ?></small>
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


 </div>
 <!-- /.content-wrapper -->