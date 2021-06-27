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

     <!-- Main content -->

     <div class="container">
         <div class="row">
             <div class="col-md-6 mt-3">
                 <a href="<?= base_url('Form/print') ?>" class="btn btn-primary">print Form</a>
             </div>
         </div>
     </div>


     <div class="container mt-3">

         <table class="table">
             <thead class="table-dark">
                 <tr>
                     <th scope="col">No</th>
                     <th scope="col">Nama </th>
                     <th scope="col">NISN</th>
                     <th scope="col">Alamat</th>
                     <th scope="col">Gender</th>
                 </tr>
             </thead>
             <tbody>
                 <?php $i = 1; ?>
                 <?php foreach ($psb as $ars) : ?>
                     <tr>
                         <th scope="row"><?= $i++; ?></th>
                         <td><?= $ars['name']; ?></td>
                         <td><?= $ars['nisn']; ?></td>
                         <td><?= $ars['jumlah']; ?></td>
                         <td><?= $ars['res']; ?>

                         </td>
                     </tr>
                 <?php endforeach; ?>
             </tbody>
         </table>
     </div>

     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->