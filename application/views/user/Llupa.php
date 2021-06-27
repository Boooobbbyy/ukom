<section class="content">
    <div class="container-fluid">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">



            <div class="container mt-3">
                <?php if ($this->session->flashdata('flash')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert"> Data Form
                        <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama </th>
                            <th scope="col">email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $ars) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $ars['name']; ?></td>
                                <td><?= $ars['email']; ?></td>

                                <td>

                                    <a href="<?= base_url(); ?>Form/hapusL/<?= $ars['id']; ?>" class="badge badge-danger float-none" onclick="return confirm('yakin ?');">hapus</a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>