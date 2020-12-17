<div class="container">
    <h1 class="text-center mt-3">Pilih Salah Satu Untuk Memulai Konsultasi</h1>
    <div class="row">
        <?php foreach ($konselor as $kons) : ?>
            <div class="col-md-3">
                <div class="card-deck mt-3">
                    <div class="card">
                        <img src="<?= base_url(''); ?>assets/img/<?= $kons['img']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark"><?= $kons['nama_lengkap']; ?></h5>
                            <p class="card-text"><?= $kons['gender']; ?></p>
                        </div>
                        <div class="card-footer">
                            <!-- <a href="" class="btn btn-primary">Go Konsultasi</a> -->
                            <form action="<?= base_url(''); ?>konseli/chat/<?= $kons['id']; ?>" method="POST">
                                <div class="form-group">
                                    <input type="hidden" name="nik" id="nik" value="<?= $kons['nik'] ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Go Konsultasi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>