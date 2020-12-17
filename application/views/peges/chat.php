<div class="container">
    <h1 class="text-center mt-1">Hai <?= $this->session->userdata('nama_lengkap'); ?></h1>
    <h3 class="text-center mt-1">Halaman Chat Personal dengan
        <?php if ($this->session->userdata('role_id') == 2) : ?>
            <?= $konseli['nama_lengkap']; ?>
        <?php else : ?>
            <?= $konselor['nama_lengkap']; ?>
        <?php endif; ?>
    </h3>
    <div class="main-wrapper">
        <header class="header">
            <!-- <div class="logo">
                <a href="#">My Messenger</a>
            </div>
            <div class="menu">
                <a href="#" onclick="logout()">Logout&nbsp;<i class="fas fa-sign-out-alt"></i></a>
            </div> -->
            <span class="text-white">Message</span>
        </header>
        <div class="flex-box">
            <div class="box-1">
                <div class="messenger">
                    <!-- <div class="heading">
                        <i class="fab fa-facebook-messenger"></i>&nbsp;<span>Messenger</span>
                    </div> -->
                    <div class="users">
                        <!-- Dynamic Users -->
                        <div class="user">
                            <div class="user-image mt-2">
                                <img class="img-profile" src="<?= base_url('') ?>assets/img/default.jpg">
                            </div>
                            <div class="user-details">
                                <span><strong>
                                        <?php if ($this->session->userdata('role_id') == 2) : ?>
                                            <?= $konseli['nama_lengkap']; ?>
                                        <?php else : ?>
                                            <?= $konselor['nama_lengkap']; ?>
                                        <?php endif; ?>
                                    </strong>
                                </span>
                                <?php if ($this->session->userdata('role_id') == 2) : ?>
                                    <small>Last Online</small>
                                    <a href="<?= base_url(''); ?>konselor/invite"><small>Alihkan</small></a>
                                <?php else : ?>
                                    <small>Last Online</small>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- Dynamic users End -->
                    </div>
                </div>
            </div>
            <div class="box-2">
                <div class="chat-container pt-2">
                    <!-- <div class="heading">
                        <i class="fas fa-user"></i>&nbsp;<span class="name"></span>
                    </div> -->
                    <div class="messages">
                        <div class="chats">
                            <div class="message-container">
                                <?php foreach ($chat as $list) : ?>
                                    <?php if ($list['u_pengirim'] == $this->session->userdata('username')) : ?>
                                        <?php if ($list['u_penerima'] == $this->session->userdata('penerima')) : ?>
                                            <div class="message-block">
                                                <div class="user-icon">
                                                    <img class="img-profile" src="<?= base_url('') ?>assets/img/default.jpg">
                                                </div>
                                                <div class="message"><?= $list['pesan']; ?></div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if ($list['u_pengirim'] == $this->session->userdata('penerima')) : ?>
                                        <?php if ($list['u_penerima'] == $this->session->userdata('username')) : ?>
                                            <div class="message-block received-message">
                                                <div class="user-icon">
                                                    <img class="img-profile" src="<?= base_url('') ?>assets/img/default.jpg">
                                                </div>
                                                <div class="message"><?= $list['pesan']; ?></div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="write-message">
                            <div class="message-area">
                                <textarea class="message-input" placeholder="Type a message"></textarea>
                                <button class="send-btn">
                                    <i class="fab fa-telegram-plane"></i>&nbsp;Send
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
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