<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <?php if ($this->session->userdata('username')) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/') ?>">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="  <?php if ($this->session->userdata('role_id') == 2) : ?>
                                                        <?= base_url('konselor/choose'); ?>
                                                    <?php else : ?>
                                                        <?= base_url('konseli/choose'); ?>
                                                    <?php endif; ?>
                                                    ">Individu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('kelompok') ?>">Kelompok</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/') ?>">Artikel</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <?php if (!$this->session->userdata('username')) : ?>
                    <a class="btn btn-outline-success my-2 my-sm-0" href="<?= base_url('auth') ?>">Login</a>
                <?php else : ?>
                    <!-- Nav Item - User Information -->
                    <div class="nav-item dropdown my-2 my-sm-0">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('nama_lengkap'); ?></span>
                            <img class="img-profile rounded-circle" style="width: 20px;" src="<?= base_url('assets/img/default.jpg') ?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                My Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>