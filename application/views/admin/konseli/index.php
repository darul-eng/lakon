<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row ml-auto" style="margin-top: -10px;">

        <a href="<?= base_url('admin/createkonseli'); ?>" class="btn btn-primary mb-2" style="color: white;"><i class="fas fa-user-plus"></i>Tambah</a>
        <div class="ml-auto">
            <form action="<?= base_url('admin/konseli') ?>" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Keyword..." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?= $this->session->flashdata('message'); ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" width="50px">No.</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Password</th>
                <th scope="col">NIS</th>
                <th scope="col">Kelas</th>
                <th scope="col">Gender</th>
                <th scope="col">No Telpon</th>
                <th scope="col" width="155px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($konseli)) : ?>
                <tr>
                    <td colspan="6">
                        <div class="alert alert-danger" role="alert">
                            Konseli tidak DiTemukan!!!
                        </div>
                    </td>
                </tr>
            <?php endif; ?>
            <?php foreach ($konseli as $kons) : ?>
                <tr>
                    <th scope="row"><?= ++$start; ?></th>
                    <td><?= $kons['nama_lengkap']; ?></td>
                    <td><?= $kons['password']; ?></td>
                    <td><?= $kons['nis']; ?></td>
                    <td><?= $kons['kelas']; ?></td>
                    <td><?= $kons['gender']; ?></td>
                    <td><?= $kons['no_hp']; ?></td>
                    <td>
                        <a href="" class="badge badge-info" data-toggle="modal" data-target="#exampleModal<?= $kons['id']; ?>">detail</a>
                        <a href="<?= base_url('') ?>admin/updatekonseli/<?= $kons['id']; ?>" class="badge badge-success">edit</a>
                        <a href="<?= base_url('') ?>admin/destroyKonseli/<?= $kons['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin?')">delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= $this->pagination->create_links(); ?>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<?php foreach ($konseli as $kons) : ?>
    <div class="modal fade" id="exampleModal<?= $kons['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail <?= $kons['nama_panggilan']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card justify-content-center">
                        <img src="<?= base_url('') ?>/assets/img/<?= $kons['img']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $kons['nama_lengkap'] ?></h5>
                            <p class="card-subtitle"><?= $kons['no_hp']; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Kelas : <?= $kons['kelas']; ?></li>
                            <li class="list-group-item">NIS : <?= $kons['nis']; ?></li>
                            <li class="list-group-item">Gender : <?= $kons['gender']; ?></li>
                            <li class="list-group-item">Agama : <?= $kons['agama']; ?></li>
                            <li class="list-group-item">Hobi : <?= $kons['hobi']; ?></li>
                            <li class="list-group-item">Tinggal Bersama : <?= $kons['tinggal_bersama']; ?></li>
                            <li class="list-group-item">Alamat : <?= $kons['alamat']; ?></li>
                            <li class="list-group-item">Jarak Rumah : <?= $kons['jarak_rumah']; ?></li>
                            <li class="list-group-item">Ke Sekolah Dengan : <?= $kons['kesekolah_dengan']; ?></li>
                            <li class="list-group-item">Anak Ke- : <?= $kons['anak_ke']; ?></li>
                            <li class="list-group-item">Jumlah Kakak : <?= $kons['jumlah_kk']; ?></li>
                            <li class="list-group-item">Riwayat Penyakit : <?= $kons['riwayat_penyakit']; ?></li>
                            <li class="list-group-item">Minat/Bakat : <?= $kons['minat_bakat']; ?></li>
                            <li class="list-group-item">Masalah Yang Penah Di Alami : <?= $kons['masalah_yg_penah_dialami']; ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>