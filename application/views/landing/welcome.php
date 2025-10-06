            <div class="content-wrapper">
                <section class="hero py-5">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h1 class="display-5">Media Pembelajaran Inklusif</h1>
                                <p class="lead text-muted">Sumber belajar interaktif untuk semua — materi, video, dan latihan dirancang agar mudah diakses dan inklusif.</p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-primary me-2"><i class="bi bi-play-fill"></i> Mulai Belajar</a>
                                    <a href="#" class="btn btn-outline-primary"><i class="bi bi-info-circle"></i> Pelajari Lebih Lanjut</a>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center d-none d-lg-block">
                                <img src="<?= base_url('assets/img/logo-long.png') ?>" alt="Hero" class="img-fluid" style="max-height:320px;">
                            </div>
                        </div>
                    </div>
                </section>

                <section id="features" class="py-5 bg-light">
                    <div class="container">
                        <div class="text-center mb-4">
                            <h3>Fitur Utama</h3>
                            <p class="text-muted">Dirancang untuk kebutuhan pendidikan inklusif dengan antarmuka sederhana dan konten berkualitas.</p>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body text-center">
                                        <div class="mb-3 display-6 text-primary"><i class="bi bi-easel2-fill"></i></div>
                                        <h5 class="card-title">Materi Interaktif</h5>
                                        <p class="card-text text-muted">Modul yang mudah diikuti, dilengkapi kuis dan contoh nyata.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body text-center">
                                        <div class="mb-3 display-6 text-success"><i class="bi bi-people-fill"></i></div>
                                        <h5 class="card-title">Akses untuk Semua</h5>
                                        <p class="card-text text-muted">Dukungan kontras tinggi, teks alternatif, dan tata letak responsif.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body text-center">
                                        <div class="mb-3 display-6 text-warning"><i class="bi bi-pc-display"></i></div>
                                        <h5 class="card-title">Video & Media</h5>
                                        <p class="card-text text-muted">Koleksi video pembelajaran dan materi multimedia yang mudah diputar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-5">
                    <div class="container">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Materi Terbaru</h4>
                            <a href="#" class="text-decoration-none">Lihat semua <i class="bi bi-chevron-right"></i></a>
                        </div>
                        <div class="row g-4">
                            <?php for ($i = 1; $i <= 3; $i++): ?>
                                <div class="col-md-4">
                                    <div class="card h-100 shadow-sm">
                                        <img src="<?= base_url('assets/compiled/jpg/sample-'.$i.'.jpg') ?>" onerror="this.onerror=null;this.src='<?= base_url('assets/img/logo-white.png') ?>';" class="card-img-top" alt="Materi <?= $i ?>">
                                        <div class="card-body">
                                            <h5 class="card-title">Judul Materi <?= $i ?></h5>
                                            <p class="card-text text-muted">Ringkasan singkat materi nomor <?= $i ?> yang menjelaskan inti pembelajaran.</p>
                                            <a href="#" class="btn btn-sm btn-primary">Buka Materi</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </section>

                <!-- Artikel Section -->
                <section id="articles" class="py-5 bg-light">
                    <div class="container">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Artikel</h4>
                            <a href="#" class="text-decoration-none">Lihat semua <i class="bi bi-chevron-right"></i></a>
                        </div>
                        <div class="row g-4">
                            <?php for ($j = 1; $j <= 3; $j++): ?>
                                <div class="col-md-4">
                                    <article class="card h-100 shadow-sm">
                                        <div class="card-body">
                                            <h5 class="card-title">Judul Artikel <?= $j ?></h5>
                                            <div class="text-muted small mb-2"><?= date('d M Y', strtotime('-'.$j.' days')) ?> &middot; Penulis <?= $j ?></div>
                                            <p class="card-text text-muted">Cuplikan atau ringkasan artikel <?= $j ?> yang memperkenalkan topik dan mengundang pembaca untuk membaca lebih lanjut.</p>
                                            <a href="#" class="btn btn-sm btn-outline-primary">Baca selengkapnya</a>
                                        </div>
                                    </article>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </section>

                <!-- Newsletter / Call-to-action -->
                <section id="newsletter" class="py-5">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5>Berlangganan Newsletter</h5>
                                <p class="text-muted">Dapatkan pembaruan materi, artikel, dan video terbaru langsung ke email Anda.</p>
                            </div>
                            <div class="col-md-4">
                                <form action="#" class="d-flex"> 
                                    <input type="email" class="form-control me-2" placeholder="Alamat email" aria-label="Email" required>
                                    <button class="btn btn-primary" type="submit">Berlangganan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <footer class="footer py-4 bg-white border-top">
                    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <div class="text-muted small">&copy; <?= date('Y') ?> Media Pembelajaran Inklusif. All rights reserved.</div>
                        <div>
                            <a href="#" class="text-decoration-none me-3">Tentang</a>
                            <a href="#" class="text-decoration-none me-3">Kontak</a>
                            <a href="#" class="text-decoration-none">Kebijakan Privasi</a>
                        </div>
                    </div>
                </footer>

            </div> <!-- content-wrapper -->

        </div> <!-- #main -->
    </div> <!-- #app -->

    <script>
      // Smooth scroll for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function (e) {
          var href = this.getAttribute('href');
          if (href.startsWith('#')) {
            e.preventDefault();
            var target = document.querySelector(href);
            if (target) {
              target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
          }
        });
      });
    </script>

</body>

