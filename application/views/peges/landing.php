<main>
    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="hero-title mt-0">
                        Selamat Datang di Lakon
                    </h1>
                    <p class="hero-paragraph">
                        Website Konsultasi Online Untuk Siswa SMK
                        Negeri 1 Makassar
                    </p>
                    <?php if ($this->session->userdata('role_id') == 2) : ?>
                        <div class="hero-cta">
                            <button class="button button-primary" data-toggle="modal" data-target="#exampleModal">Tambah Arikel</button>
                            <a class="button" href="<?= base_url(''); ?>konselor/pesan">Pesan</a>
                        </div>
                    <?php else : ?>
                        <div class="hero-cta">
                            <a class="button button-primary" href="<?= base_url(''); ?>konseli/pesan">Pesan</a>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="hero-figure anime-element">
                    <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                        <rect width="528" height="396" style="fill: transparent" />
                    </svg>
                    <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                    <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                    <div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
                    <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
                    <div class="hero-figure-box hero-figure-box-05"></div>
                    <div class="hero-figure-box hero-figure-box-06"></div>
                    <div class="hero-figure-box hero-figure-box-07"></div>
                    <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                    <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
                    <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="features section">
        <div class="container">
            <div class="features-inner section-inner has-bottom-divider">
                <div class="features-wrap">
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img src="<?= base_url(''); ?>assets/landing/dist/images/feature-icon-01.svg" alt="Feature 01" />
                            </div>
                            <h4 class="feature-title mt-24">
                                Be Productive
                            </h4>
                            <p class="text-sm mb-0">
                                Fermentum posuere urna nec tincidunt
                                praesent semper feugiat nibh. A arcu
                                cursus vitae congue mauris. Nam at
                                lectus urna duis convallis. Mauris
                                rhoncus aenean vel elit scelerisque
                                mauris. <a href="">More...</a>
                            </p>
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img src="<?= base_url(''); ?>assets/landing/dist/images/feature-icon-02.svg" alt="Feature 02" />
                            </div>
                            <h4 class="feature-title mt-24">
                                Be Productive
                            </h4>
                            <p class="text-sm mb-0">
                                Fermentum posuere urna nec tincidunt
                                praesent semper feugiat nibh. A arcu
                                cursus vitae congue mauris. Nam at
                                lectus urna duis convallis. Mauris
                                rhoncus aenean vel elit scelerisque
                                mauris.
                            </p>
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img src="<?= base_url(''); ?>assets/landing/dist/images/feature-icon-03.svg" alt="Feature 03" />
                            </div>
                            <h4 class="feature-title mt-24">
                                Be Productive
                            </h4>
                            <p class="text-sm mb-0">
                                Fermentum posuere urna nec tincidunt
                                praesent semper feugiat nibh. A arcu
                                cursus vitae congue mauris. Nam at
                                lectus urna duis convallis. Mauris
                                rhoncus aenean vel elit scelerisque
                                mauris.
                            </p>
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img src="<?= base_url(''); ?>assets/landing/dist/images/feature-icon-04.svg" alt="Feature 04" />
                            </div>
                            <h4 class="feature-title mt-24">
                                Be Productive
                            </h4>
                            <p class="text-sm mb-0">
                                Fermentum posuere urna nec tincidunt
                                praesent semper feugiat nibh. A arcu
                                cursus vitae congue mauris. Nam at
                                lectus urna duis convallis. Mauris
                                rhoncus aenean vel elit scelerisque
                                mauris.
                            </p>
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img src="<?= base_url(''); ?>assets/landing/dist/images/feature-icon-05.svg" alt="Feature 05" />
                            </div>
                            <h4 class="feature-title mt-24">
                                Be Productive
                            </h4>
                            <p class="text-sm mb-0">
                                Fermentum posuere urna nec tincidunt
                                praesent semper feugiat nibh. A arcu
                                cursus vitae congue mauris. Nam at
                                lectus urna duis convallis. Mauris
                                rhoncus aenean vel elit scelerisque
                                mauris.
                            </p>
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img src="<?= base_url(''); ?>assets/landing/dist/images/feature-icon-06.svg" alt="Feature 06" />
                            </div>
                            <h4 class="feature-title mt-24">
                                Be Productive
                            </h4>
                            <p class="text-sm mb-0">
                                Fermentum posuere urna nec tincidunt
                                praesent semper feugiat nibh. A arcu
                                cursus vitae congue mauris. Nam at
                                lectus urna duis convallis. Mauris
                                rhoncus aenean vel elit scelerisque
                                mauris.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Tambah Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="text-dark">Judul Artikel</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="text-dark">Isi Artikel</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="text-dark">Sampul Artikel</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>