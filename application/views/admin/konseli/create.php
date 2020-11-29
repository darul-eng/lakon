<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <form method="POST" action="">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nis">Username</label>
                <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS / Username" value="<?= set_value('nis'); ?>">
                <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
                <!-- <input type="hidden" class="form-control" id="role" name="role" value="3"> -->
            </div>
            <div class="form-group col-md-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="namalengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap" value="<?= set_value('namalengkap'); ?>">
                <?= form_error('namalengkap', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="no_hp">No HP</label>
                <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone" value="<?= set_value('no_hp'); ?>">
                <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="kelas">Kelas</label>
                <input type="kelas" class="form-control" id="kelas" name="kelas" placeholder="Kelas" value="<?= set_value('kelas'); ?>">
                <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Pria">
                    <label class="form-check-label" for="gridRadios1">
                        Pria
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Wanita">
                    <label class="form-check-label" for="gridRadios2">
                        Wanita
                    </label>
                </div>
                <?= form_error('gridRadios', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <a href="<?= base_url('admin/konseli'); ?>" class="btn btn-danger mt-2">Cencel</a>
        <button type="submit" class="btn btn-primary mt-2">Tambah</button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -a->