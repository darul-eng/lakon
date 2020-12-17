<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?= base_url(''); ?>assets/landing/dist/css/style.css" />
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/landing/dist/css/mystyle.css" />
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/mystyle.css">

    <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

</head>

<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <!-- <div class="site-header-inner"> -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <img class="header-logo-image" src="<?= base_url(''); ?>assets/landing/dist/images/logo.svg" alt="Logo" />
                            </a>
                        </h1>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <?php if ($this->session->userdata('username')) : ?>
                                <li class="nav-item active">
                                    <a class="nav-link text-white" href="<?= base_url('/') ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="  <?php if ($this->session->userdata('role_id') == 2) : ?>
                                                                                    <?= base_url('konselor/choose'); ?>
                                                                                <?php else : ?>
                                                                                    <?= base_url('konseli/choose'); ?>
                                                                                <?php endif; ?>
                                                                                ">Individu</a>
                                </li>
                                <li class=" nav-item">
                                    <a class="nav-link text-white" href="<?php if ($this->session->userdata('role_id') == 2) : ?>
                                                                                    <?= base_url('konselor/group'); ?>
                                                                                <?php else : ?>
                                                                                    <?= base_url('konseli/group'); ?>
                                                                                <?php endif; ?>">Kelompok</a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="<?= base_url('/') ?>">Artikel</a>
                                </li>
                            <?php endif; ?>
                            <?php if (!$this->session->userdata('username')) : ?>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary text-white" href="<?= base_url('auth') ?>">Login</a>
                                </li>
                            <?php else : ?>
                                <!-- Nav Item - User Information -->
                                <li class="nav-item">
                                    <div class="nav-item dropdown my-2 my-sm-0">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-white small"><?= $this->session->userdata('nama_lengkap'); ?></span>

                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="<?php if ($this->session->userdata('role_id') == 2) : ?>
                                                                                    <?= base_url(''); ?>konselor/profil/<?= $this->session->userdata('id'); ?>
                                                                                <?php else : ?>
                                                                                    <?= base_url(''); ?>konseli/profil/<?= $this->session->userdata('id'); ?>
                                                                                <?php endif; ?>">
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
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
                <!-- </div> -->
            </div>
        </header>