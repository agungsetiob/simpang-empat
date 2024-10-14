    <body>
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="page-sidebar">
                <div class="logo-box"><a href="#" class="logo-text"><img src="<?php echo base_url();?>/assets/images/logo_tanbu_label.png" height="auto" width="150px" ></a><a href="#" id="sidebar-close"><i class="material-icons">close</i></a> <a href="#" id="sidebar-state"><i class="material-icons">adjust</i><i class="material-icons compact-sidebar-icon">panorama_fish_eye</i></a></div>
                <div class="page-sidebar-inner slimscroll">
                    <ul class="accordion-menu">
                        <li class="sidebar-title">
                            Apps
                        </li>
                        <li <?php if ($this->uri->segment(1) == 'admin' || $this->uri->segment(1) == ' ') {
                                        echo 'class="active-page"';
                                    }else {
                                        echo ' ';
                                    }
                                    ?>>
                            <a href="<?php echo base_url();?>admin" class="active"><i class="material-icons-outlined">home</i>Beranda</a>
                        </li>
                        <li <?php if ($this->uri->segment(1) == 'tambah_berita' || $this->uri->segment(1) == 'daftar_berita') {
                                        echo 'class="active-page"';
                                    }else {
                                        echo ' ';
                                    }
                                    ?>>
                            <a href="#"><i class="material-icons">dashboard</i>Berita<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li <?php if ($this->uri->segment(1) == 'tambah_berita') {
                                        echo 'class="active-page"';
                                    }else {
                                        echo ' ';
                                    }
                                    ?>>
                                    <a href="<?php echo base_url();?>tambah_berita">Tambah Berita</a>
                                </li>
                                <li <?php if ($this->uri->segment(1) == 'daftar_berita') {
                                        echo 'class="active-page"';
                                    }else {
                                        echo ' ';
                                    }
                                    ?>>
                                    <a href="<?php echo base_url();?>daftar_berita">Daftar Berita</a>
                                </li>
                            </ul>
                        </li>

                        <li <?php if ($this->uri->segment(1) == 'tambah_galeri' || $this->uri->segment(1) == 'daftar_galeri') {
                                        echo 'class="active-page"';
                                    }else {
                                        echo ' ';
                                    }
                                    ?>>
                            <a href="#"><i class="material-icons-outlined">inbox</i>Galeri<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li <?php if ($this->uri->segment(1) == 'tambah_galeri') {
                                        echo 'class="active-page"';
                                    }else {
                                        echo ' ';
                                    }
                                    ?>>
                                    <a href="<?php echo base_url();?>tambah_galeri">Tambah Galeri</a>
                                </li>
                                <li <?php if ($this->uri->segment(1) == 'daftar_galeri') {
                                        echo 'class="active-page"';
                                    }else {
                                        echo ' ';
                                    }
                                    ?>>
                                    <a href="<?php echo base_url();?>daftar_galeri">Daftar Galeri</a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if ($this->uri->segment(1) == 'tambah_dokumen' || $this->uri->segment(1) == 'daftar_dokumen') {
                                        echo 'class="active-page"';
                                    }else {
                                        echo ' ';
                                    }
                                    ?>>
                            <a href="#"><i class="material-icons-outlined">collections_bookmark</i>Dokumen<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li <?php if ($this->uri->segment(1) == 'tambah_dokumen') {
                                        echo 'class="active-page"';
                                    }else {
                                        echo ' ';
                                    }
                                    ?>>
                                    <a href="<?php echo base_url();?>tambah_dokumen">Tambah Dokumen</a>
                                </li>
                                <li <?php if ($this->uri->segment(1) == 'daftar_dokumen') {
                                        echo 'class="active-page"';
                                    }else {
                                        echo ' ';
                                    }
                                    ?>>
                                    <a href="<?php echo base_url();?>daftar_dokumen">Daftar Dokumen</a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if ($this->uri->segment(1) == 'tambah_layanan' || $this->uri->segment(1) == 'daftar_layanan') {
                                        echo 'class="active-page"';
                                    }else {
                                        echo ' ';
                                    }
                                    ?>>
                            <a href="#"><i class="material-icons-outlined">collections_bookmark</i>Pelayanan<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li <?php if ($this->uri->segment(1) == 'tambah_layanan') {
                                        echo 'class="active-page"';
                                    }else {
                                        echo ' ';
                                    }
                                    ?>>
                                    <a href="<?php echo base_url();?>tambah_layanan">Tambah Layanan</a>
                                </li>
                                <li <?php if ($this->uri->segment(1) == 'daftar_layanan') {
                                        echo 'class="active-page"';
                                    }else {
                                        echo ' ';
                                    }
                                    ?>>
                                    <a href="<?php echo base_url();?>daftar_layanan">Daftar Layanan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-container">
                <div class="page-header">
                    <nav class="navbar navbar-expand">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-nav">
                            <li class="nav-item small-screens-sidebar-link">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                            </li>
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?php echo base_url();?>/assets-2/images/avatars/profile-image-1.png" alt="profile image">
                                    <span>Administrator</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url();?>logout">Log out</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                            </li>
                        </ul>
                    </nav>
                </div>