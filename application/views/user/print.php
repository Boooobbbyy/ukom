<!DOCTYPE html>

<html lang="en">


<body>


    <hr>
    <h5 class="text-center"><u>Penerimaan Siswa Baru</u></h5>
    <h6 class="text-center">TAHUN AJARAN 2021/2022</h6><br>
    <h4 class="text-center"><?= $mahasiswa['rep']; ?></h4>
    <br>
    <div class="container box">
        <div class="col-lg-12 box">
            <div class="panel panel-default">
                <div class="panel-body noselect">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>NISN</td>
                                <td>:<?= $mahasiswa['nisn']; ?></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>: <?= $mahasiswa['name']; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>: <?= $mahasiswa['res']; ?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>: <?= $mahasiswa['top']; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>: <?= $mahasiswa['tanggal']; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: <?= $mahasiswa['jumlah']; ?></td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</body>