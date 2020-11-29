<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <form method="POST">
        <input type="hidden" name="id" value="<?= $konselor['id']; ?>">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nik">Username</label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK / Username" value="<?= $konselor['nik']; ?>">
                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                <!-- <input type="hidden" class="form-control" id="role" name="role" value="2"> -->
            </div>
            <div class="form-group col-md-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?= $konselor['password']; ?>">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="namalengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap" value="<?= $konselor['nama_lengkap']; ?>"">
                <?= form_error('namalengkap', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class=" form-row">
                <div class="form-group col-md-4">
                    <label for="no_hp">No HP</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone" value="<?= $konselor['no_hp']; ?>">
                    <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= $konselor['email']; ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
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
                    </div>
                </div>
            </fieldset>
            <a href="<?= base_url('admin/konselor'); ?>" class="btn btn-danger">Cencel</a>
            <button type="submit" class="btn btn-primary">Update</button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -a->