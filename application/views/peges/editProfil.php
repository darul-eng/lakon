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
                        Edit Profil
                    </div>
                    <div class="card-body">
                        <!-- <h5 class="card-title text-dark">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        <form action="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['nama_lengkap'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Panggilan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['nama_panggilan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['email'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telpon</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['no_hp'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['gender'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kepercayaan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['agama'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['ttl'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status Perkawinan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['status_perkawinan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['pend_terakhir'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['alamat'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Sekolah</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['nama_sekolah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status Kepegawaian</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['status_kep'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masa Kerja</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['masa_kerja'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kelas Bimbingan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['kelas_bimbingan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tugas Tambahan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konselor['tugas_tambahan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Foto Profil</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <a href="<?= base_url(''); ?>konselor/profil/<?= $konselor['id']; ?>" class="btn btn-danger">Cancel</a>
                            <a href="#" class="btn btn-primary">Edit Profil</a>
                        </form>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="col-4">
                <div class="card">
                    <img src="<?= base_url(''); ?>assets/img/<?= $konseli['img'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-dark"><?= $konseli['nama_lengkap'] ?></h5>
                        <p class="card-text"><?= $konseli['no_hp'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        Edit Profil
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['nama_lengkap'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Panggilan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['nama_panggilan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telpon</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['no_hp'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['gender'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kepercayaan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['agama'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['ttl'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tinggal Bersama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['tinggal_bersama'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jarak Rumah</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['jarak_rumah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['alamat'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kesekolah Dengan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['kesekolah_dengan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Anak Ke</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['anak_ke'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Kakak</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['jumlah_kk'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hobi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['hobi'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Riwayat Penyakit</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['riwayat_penyakit'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Minat dan Bakat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['minat_bakat'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Ayah</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['nama_ayah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Agama Ayah</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['agama_ayah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['ttl_ayah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pekerjaan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['pekerjaan_ayah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['alamat_ayah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telpon</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['no_hp_ayah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Ibu</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['nama_ibu'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Agama Ibu</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['agama_ibu'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['ttl_ibu'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pekerjaan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['pekerjaan_ibu'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['alamat_ibu'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telpon</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['no_hp_ibu'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Wali</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['nama_wali'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Agama Wali</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['agama_wali'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['ttl_wali'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pekerjaan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['pekejaan_wali'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['alamat_wali'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telpon</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $konseli['no_hp_wali'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Foto Profil</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <a href="<?= base_url(''); ?>konseli/profil/<?= $konseli['id']; ?>" class="btn btn-danger">Cancel</a>
                            <a href="#" class="btn btn-primary">Edit Profil</a>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>