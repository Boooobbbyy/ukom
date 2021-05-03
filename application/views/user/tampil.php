 <!-- Content Wrapper. Contains page content -->
 <?php
    $url = file_get_contents('http://www.omdbapi.com/?apikey=c259a5e8&i=tt6342474');
    $data = json_decode($url, true);


    ?>
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
                     <th scope="col">Progress</th>
                     <th scope="col">Harga</th>
                     <th scope="col">Pembayaran</th>
                 </tr>
             </thead>
             <tbody>
                 <?php $i = 1; ?>
                 <?php foreach ($info as $ars) : ?>
                     <tr>
                         <th scope="row"><?= $i++; ?></th>
                         <td><?= $ars['nama']; ?></td>
                         <td><?= $ars['top']; ?>%</td>
                         <td><?= $ars['harga'] * 1000; ?></td>
                         <td><?= $ars['rep']; ?>

                         </td>
                     </tr>
                 <?php endforeach; ?>
             </tbody>
         </table>
     </div>

     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->