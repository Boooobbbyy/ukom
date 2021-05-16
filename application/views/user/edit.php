<section class="content">
    <div class="container-fluid">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <a href="<?= base_url('Form/tambah') ?>" class="btn btn-primary">Tambah Form</a>
                    </div>
                </div>
            </div>

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
                            <th scope="col">Topik</th>
                            <th scope="col">Masukan</th>
                            <th scope="col">Reply</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($buku as $ars) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $ars['judul']; ?></td>
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