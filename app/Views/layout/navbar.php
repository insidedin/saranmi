<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="#" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="">Praktikum Rekayasa Web</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/home" class="<?= (($title == 'Home')) ? 'active' : ''; ?>">Home</a></li>
                <li><a href="/tentang" class="<?= (($title == 'Tentang')) ? 'active' : ''; ?>">Tentang</a></li>
                <li><a href="<?= base_url('/berita') ?>" class="<?= (($title == 'Berita')) ? 'active' : ''; ?>">Berita</a></li>
                <li><a href="/kontak" class="<?= (($title == 'Kontak')) ? 'active' : ''; ?>">Kontak</a></li>


            </ul>

            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>



    </div>
</header>

<!-- <?php d($title); ?> -->