<div class="container">
    <div class="row">
        <?php if ($this->session->userdata('role_id') == 2) : ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url(''); ?>assets/img/<?= $konselor['img'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-dark"><?= $konselor['nama_lengkap'] ?></h5>
                        <p class="card-text"><?= $konselor['email'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <?= $konselor['nama_panggilan']; ?>
                    </div>
                    <div class="card-body">
                        <!-- <h5 class="card-title text-dark">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Username : <?= $konselor['nik'] ?></li>
                            <li class="list-group-item">Password : <?= $konselor['password'] ?></li>
                            <li class="list-group-item">Telpon : <?= $konselor['no_hp'] ?></li>
                            <li class="list-group-item">Jenis Kelamin : <?= $konselor['gender'] ?></li>
                            <li class="list-group-item">Kepercayaan : <?= $konselor['agama'] ?></li>
                            <li class="list-group-item">Tempat Tanggal Lahir : <?= $konselor['ttl'] ?></li>
                            <li class="list-group-item">Status Perkawinan : <?= $konselor['status_perkawinan'] ?></li>
                            <li class="list-group-item">Pendidikan Terakhir : <?= $konselor['pend_terakhir'] ?></li>
                            <li class="list-group-item">Alamat : <?= $konselor['alamat'] ?></li>
                            <li class="list-group-item">Nama Sekolah : <?= $konselor['nama_sekolah'] ?></li>
                            <li class="list-group-item">Status Kepegawaian : <?= $konselor['status_kep'] ?></li>
                            <li class="list-group-item">Masa Kerja : <?= $konselor['masa_kerja'] ?></li>
                            <li class="list-group-item">Kelas Bimbingan: <?= $konselor['kelas_bimbingan'] ?></li>
                            <li class="list-group-item">Tugas Tambahan : <?= $konselor['tugas_tambahan'] ?></li>
                        </ul>
                        <a href="<?= base_url(''); ?>konselor/edit/<?= $konselor['id']; ?>" class="btn btn-primary">Edit Profil</a>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="col-6">
                <div class="card">
                    <img src="<?= base_url(''); ?>assets/img/<?= $konseli['img'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-dark"><?= $konseli['nama_lengkap'] ?></h5>
                        <p class="card-text"><?= $konseli['no_hp'] ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Kelas : <?= $konseli['kelas'] ?></li>
                        <li class="list-group-item">NIS/Username :<?= $konseli['nis'] ?></li>
                        <li class="list-group-item">Password : <?= $konseli['password'] ?></li>
                        <li class="list-group-item">Jenis Kelamin :<?= $konseli['gender'] ?></li>
                        <li class="list-group-item">Kepercayaan :<?= $konseli['agama'] ?></li>
                        <li class="list-group-item">Tempat Tanggal Lahir :<?= $konseli['ttl'] ?></li>
                        <li class="list-group-item">Tinggal Bersama :<?= $konseli['tinggal_bersama'] ?></li>
                        <li class="list-group-item">Jarak Rumah :<?= $konseli['jarak_rumah'] ?></li>
                        <li class="list-group-item">Alamat : <?= $konseli['alamat'] ?></li>
                        <li class="list-group-item">Kesekolah Dengan :<?= $konseli['kesekolah_dengan'] ?></li>
                        <li class="list-group-item">anak ke- : <?= $konseli['anak_ke'] ?></li>
                        <li class="list-group-item">Jumlah Kakak :<?= $konseli['jumlah_kk'] ?></li>
                        <li class="list-group-item">Hobi :<?= $konseli['hobi'] ?></li>
                        <li class="list-group-item">Riwayat Penyakit :<?= $konseli['riwayat_penyakit'] ?></li>
                        <li class="list-group-item">Minat dan Bakat :<?= $konseli['minat_bakat'] ?></li>
                        <li class="list-group-item">Masalah Yang Pernah Di Alami :<?= $konseli['masalah_yg_penah_dialami'] ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Orang Tua / Wali
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <p class="text-dark">Ayah</p>
                            <li class="list-group-item">Nama Ayah : <?= $konseli['nama_ayah'] ?></li>
                            <li class="list-group-item">Agama : <?= $konseli['agama_ayah'] ?></li>
                            <li class="list-group-item">Tempat Tanggal Lahir :<?= $konseli['ttl_ayah'] ?></li>
                            <li class="list-group-item">Pekerjaan : <?= $konseli['pekerjaan_ayah'] ?></li>
                            <li class="list-group-item">Alamat :<?= $konseli['alamat_ayah'] ?></li>
                            <li class="list-group-item">Telpon :<?= $konseli['no_hp_ayah'] ?></li>
                        </ul>
                        <ul class="list-group list-group-flush">
                            <p class="text-dark mt-4">Ibu</p>
                            <li class="list-group-item">Nama Ibu : <?= $konseli['nama_ibu'] ?></li>
                            <li class="list-group-item">Agama : <?= $konseli['agama_ibu'] ?></li>
                            <li class="list-group-item">Tempat Tanggal Lahir :<?= $konseli['ttl_ibu'] ?></li>
                            <li class="list-group-item">Pekerjaan : <?= $konseli['pekerjaan_ibu'] ?></li>
                            <li class="list-group-item">Alamat :<?= $konseli['alamat_ibu'] ?></li>
                            <li class="list-group-item">Telpon :<?= $konseli['no_hp_ibu'] ?></li>
                        </ul>
                        <ul class="list-group list-group-flush">
                            <p class="text-dark mt-4">Wali</p>
                            <li class="list-group-item">Nama Wali : <?= $konseli['nama_wali'] ?></li>
                            <li class="list-group-item">Agama : <?= $konseli['agama_wali'] ?></li>
                            <li class="list-group-item">Tempat Tanggal Lahir :<?= $konseli['ttl_wali'] ?></li>
                            <li class="list-group-item">Pekerjaan : <?= $konseli['pekejaan_wali'] ?></li>
                            <li class="list-group-item">Alamat :<?= $konseli['alamat_wali'] ?></li>
                            <li class="list-group-item">Telpon :<?= $konseli['no_hp_wali'] ?></li>
                        </ul>
                        <a href="<?= base_url(''); ?>konseli/edit/<?= $konseli['id']; ?>" class="btn btn-primary">Edit Profil</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>