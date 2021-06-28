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
                            <th scope="col">NISN</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($psb as $ars) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $ars['name']; ?></td>
                                <td><?= $ars['nisn']; ?></td>
                                <td><?= $ars['top']; ?></td>
                                <td><?= $ars['jumlah']; ?></td>
                                <td><?= $ars['rep']; ?>
                                <td>
                                    <a href="<?= base_url(); ?>Form/ubahx/<?= $ars['id']; ?>" class="badge badge-success float-none">ubah</a>
                                    <a href="<?= base_url(); ?>Form/detail/<?= $ars['id']; ?>" class="badge badge-primary float-none">detail</a>
                                    <a href="<?= base_url(); ?>Form/hapus/<?= $ars['id']; ?>" class="badge badge-danger float-none" onclick="return confirm('yakin ?');">hapus</a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>