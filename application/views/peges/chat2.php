<div class="container">
    <h1 class="text-center mt-3">Hai <?= $this->session->userdata('nama_lengkap'); ?></h1>
    <h3 class="text-center mt-3">Halaman Chat Personal dengan
        <?php if ($this->session->userdata('role_id') == 2) : ?>
            <?= $konseli['nama_lengkap']; ?>
        <?php else : ?>
            <?= $konselor['nama_lengkap']; ?>
        <?php endif; ?>
    </h3>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="pesan">
                    <?php foreach ($chat as $list) : ?>
                        <?php if ($list['u_pengirim'] == $this->session->userdata('username')) : ?>
                            <?php if ($list['u_penerima'] == $this->session->userdata('penerima')) : ?>
                                <p>
                                    <span style="margin-left: 200px;"><b><?= $list['u_pengirim']; ?></b></span> -
                                    <span><?= $list['pesan']; ?></span>

                                </p>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if ($list['u_pengirim'] == $this->session->userdata('penerima')) : ?>
                            <?php if ($list['u_penerima'] == $this->session->userdata('username')) : ?>
                                <p>
                                    <span style="color:green;"><b><?= $list['u_pengirim']; ?></b></span> -
                                    <span style="color:green;"><?= $list['pesan']; ?></span>

                                </p>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="pengirim" id="pengirim" class="form-control" value="<?= $this->session->userdata('username'); ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="pesan" id="message" class="form-control" placeholder="Pesan Anda" autocomplete="off" autofocus required>
                    </div>
                    <?php if ($this->session->userdata('role_id') == 2) : ?>
                        <div class="form-group">
                            <input type="hidden" name="penerima" id="penerima" class="form-control" value="<?= $konseli['nis']; ?>">
                        </div>
                    <?php else : ?>
                        <div class="form-group">
                            <input type="hidden" name="penerima" id="penerima" class="form-control" value="<?= $konselor['nik']; ?>">
                        </div>
                    <?php endif; ?>
                    <!-- <div class="form-group"> -->
                    <!-- <input type="submit" value="Kirim" class="btn btn-primary" onclick='store();'> -->
                    <!-- <input class="btn btn-primary" type="submit" name="submit"> -->
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <!-- </div> -->
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('cab0cc4b1d94c80dfc8e', {
        cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        // document.write(JSON.stringify(data));
        addData(data);
    });

    function addData(data) {
        var str = '';
        for (var z in data) {
            str += '<p><span><b>' + data[z].u_pengirim + '</b></span> - <span>' + data[z].pesan + '</span> <span><u>' + data[z].u_penerima + '</u></span></p>';
        }
        $('#pesan').html(str);
    }
</script>