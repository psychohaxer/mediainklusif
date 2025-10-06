<body>
        <script src="<?= base_url('assets/static/js/initTheme.js') ?>"></script>
        <script>
            // Force light theme on this horizontal-layout landing page
            // This overrides any saved preference so the page always renders in light mode
            try {
                document.documentElement.setAttribute('data-bs-theme', 'light');
                localStorage.setItem('theme', 'light');
            } catch (e) {
                console && console.error && console.error('Theme override failed', e);
            }
        </script>

    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-3">
                <div class="header-top" style="padding: 2px;">
                    <div class="container">
                        <div class="logo">
                            <a href="#" class="text-decoration-none d-flex align-items-center">
                                <!-- <img src="<?= base_url('assets/img/fav.png') ?>" alt="Logo">  -->
                                <h2 class="text-bold" style="margin: 8px; padding: 4px; color: #435ebe;">
                                    <i class="bi bi-book"></i>
                                    Media Pembelajaran Inklusif
                                </h2>
                            </a>
                        </div>
                        <div class="header-top-right">

                            <!-- <div class="dropdown">
                                <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="<?= base_url('assets/img/user.png') ?>" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <span class="user-dropdown-name text-bold">Firdha R Fatin</span> | <span class="user-dropdown-status text-sm text-muted">User</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                                </ul>
                            </div> -->

                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <nav class="main-navbar">
                    <div class="container">

                        <ul>
                        <!-- Materi -->
                        <li class="menu-item has-sub <?= $navbar_mode === 'materi' ? 'active' : '' ?>">
                            <a href="#" class='menu-link'>
                                <span><i class="bi bi-book-fill"></i> Materi</span>
                            </a>
                            <div class="submenu">
                                <div class="submenu-group-wrapper">
                                    <ul class="submenu-group">
                                        <li class="submenu-item">
                                            <a href="#" class='submenu-link'>Jurnalistik Inklusif</a>
                                        </li>
                                        <li class="submenu-item">
                                            <a href="#" class='submenu-link'>Kearifan Lokal</a>
                                        </li>
                                        <li class="submenu-item">
                                            <a href="#" class='submenu-link'>Softskill</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- Pendidikan -->
                        <li class="menu-item <?= $navbar_mode === 'pendidikan' ? 'active' : '' ?>">
                            <a href="#" class='menu-link'>
                                <span><i class="bi bi-mortarboard-fill"></i> Pendidikan</span>
                            </a>
                        </li>

                        <!-- Budaya -->
                        <li class="menu-item <?= $navbar_mode === 'budaya' ? 'active' : '' ?>">
                            <a href="#" class='menu-link'>
                                <span><i class="bi bi-people-fill"></i> Budaya</span>
                            </a>
                        </li>

                        <!-- Sastra -->
                        <li class="menu-item <?= $navbar_mode === 'sastra' ? 'active' : '' ?>">
                            <a href="#" class='menu-link'>
                                <span><i class="bi bi-pen-fill"></i> Sastra</span>
                            </a>
                        </li>

                        <!-- Video -->
                        <li class="menu-item <?= $navbar_mode === 'video' ? 'active' : '' ?>">
                            <a href="#" class='menu-link'>
                                <span><i class="bi bi-play-circle-fill"></i> Video</span>
                            </a>
                        </li>

                        <!-- Opini -->
                        <li class="menu-item <?= $navbar_mode === 'opini' ? 'active' : '' ?>">
                            <a href="#" class='menu-link'>
                                <span><i class="bi bi-chat-quote-fill"></i> Opini</span>
                            </a>
                        </li>

                        </ul>
                    </div>
                </nav>

            </header>