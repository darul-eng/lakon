<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row ml-auto" style="margin-top: -10px;">

        <a href="<?= base_url('admin/createkonselor'); ?>" class="btn btn-primary mb-2" style="color: white;"><i class=" fas fa-user-plus"></i>Tambah</a>
        <div class="ml-auto">
            <form action="<?= base_url('admin/konselor') ?>" method="POST">
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
                <th scope="col">NIK</th>
                <th scope="col">Password</th>
                <th scope="col">Gender</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Email</th>
                <th scope="col" width="155px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($konselor)) : ?>
                <tr>
                    <td colspan="6">
                        <div class="alert alert-danger" role="alert">
                            Konselor tidak DiTemukan!!!
                        </div>
                    </td>
                </tr>
            <?php endif; ?>
            <?php foreach ($konselor as $kons) : ?>
                <tr>
                    <th scope="row"><?= ++$start; ?></th>
                    <td><?= $kons['nama_lengkap']; ?></td>
                    <td><?= $kons['nik']; ?></td>
                    <td><?= $kons['password']; ?></td>
                    <td><?= $kons['gender']; ?></td>
                    <td><?= $kons['no_hp']; ?></td>
                    <td><?= $kons['email']; ?></td>
                    <td>
                        <a href="" class="badge badge-info" data-toggle="modal" data-target="#exampleModal<?= $kons['id']; ?>">detail</a>
                        <a href="<?= base_url('') ?>admin/updatekonselor/<?= $kons['id']; ?>" class="badge badge-success">edit</a>
                        <a href="<?= base_url('') ?>admin/destroyKonselor/<?= $kons['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin?')">delete</a>
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
<?php foreach ($konselor as $kons) : ?>
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
                            <li class="list-group-item">Email : <?= $kons['email']; ?></li>
                            <li class="list-group-item">NIK : <?= $kons['nik']; ?></li>
                            <li class="list-group-item">Gender : <?= $kons['gender']; ?></li>
                            <li class="list-group-item">Agama : <?= $kons['agama']; ?></li>
                            <li class="list-group-item">Status Perkawinan : <?= $kons['status_perkawinan']; ?></li>
                            <li class="list-group-item">Pendidikan Terakhir : <?= $kons['pend_terakhir']; ?></li>
                            <li class="list-group-item">Alamat : <?= $kons['alamat']; ?></li>
                            <li class="list-group-item">Nama Sekolah : <?= $kons['nama_sekolah']; ?></li>
                            <li class="list-group-item">Status Kepegawaian : <?= $kons['status_kep']; ?></li>
                            <li class="list-group-item">Masa Kerja : <?= $kons['masa_kerja']; ?></li>
                            <li class="list-group-item">Kelas Bimbingan : <?= $kons['kelas_bimbingan']; ?></li>
                            <li class="list-group-item">Tugas Tambahan : <?= $kons['tugas_tambahan']; ?></li>
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