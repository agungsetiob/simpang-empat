<section class="topbar plr-100 bg-black">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="topbar-left-area">
                        <ul>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="topbar-right-area">
                        <ul>
                            <li> <a href="<?php echo base_url();?>admin"><i class="fas fa-user"></i> Login</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<body>

    <div class="navbar-area">

        <div class="main-responsive-nav">
            <div class="container">
                <div class="mobile-nav">
                    <a href="<?php echo base_url();?>" class="logo"><img src="<?php echo base_url();?>assets/images/logo_tanbu_small.png" alt="logo" /></a>
                    <ul class="menu-sidebar menu-small-device">
                        <li><button class="popup-button"><i class="fas fa-search"></i></button></li>
                        <li><a class="default-button" href="https://maps.app.goo.gl/rBqnQVCo4As8e8Zw5">Lokasi Kami <i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-nav plr-100">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="<?php echo base_url();?>">
                        <img src="<?php echo base_url();?>assets/images/logo_tanbu_label.png" alt="logo" width="200px" />
                    </a>
                    <img src="<?php echo base_url();?>assets/images/Logo_BerAKHLAK.png" alt="logo" width="160px" />
                    <img src="<?php echo base_url();?>assets/images/Logo_EVP.png" alt="logo" width="120px" />
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="<?php echo base_url();?>" <?php if ($this->uri->segment(1) == '') {
                                echo 'class="nav-link active"';
                            }else {
                                echo 'class="nav-link"';
                            }
                            ?>>Home</a></li>                         
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Profil</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="<?php echo base_url();?>struktur_organisasi" class="nav-link">Struktur Organisasi</a></li>
                                    <li class="nav-item"><a href="<?php echo base_url();?>visi_misi" class="nav-link">Visi Misi</a></li>
                                    <li class="nav-item"><a href="<?php echo base_url();?>tupoksi" class="nav-link">Tupoksi</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="<?php echo base_url();?>list_berita" <?php if ($this->uri->segment(1) == 'list_berita') {
                                echo 'class="nav-link active"';
                            }else {
                                echo 'class="nav-link"';
                            }
                            ?>>Berita dan Kegiatan</a></li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Layanan </a>
                                <ul class="dropdown-menu">
                                    <a href="#" class="nav-link dropdown-toggle">Layanan Pengaduan </a>
                                    <ul>
                                        <li class="nav-item"><a href="<?php echo base_url();?>#" class="nav-link">Website Form</a>
                                        <li class="nav-item"><a href="https://instagram.com/simpangempat.kec?igshid=MzRlODBiNWFlZA==" class="nav-link" target="_blank">Instagram </a>
                                        <li class="nav-item"><a href="mailto:kecamatansimpangempat01@gmail.com" class="nav-link">e-Mail</a>                                     
                                    </ul>
                                    <a href="<?php echo base_url();?>layanannonperizinan" class="nav-link">Layanan Non Perizinaan </a>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="https://bit.ly/LabuNona" target="_blank" <?php if ($this->uri->segment(1) == 'labunona') {
                                echo 'class="nav-link active"';
                            }else {
                                echo 'class="nav-link"';
                            }
                            ?>>LabuNona</a></li>
                            <li class="nav-item"><a href="<?php echo base_url();?>download_dokumen" <?php if ($this->uri->segment(1) == 'download_dokumen') {
                                echo 'class="nav-link active"';
                            }else {
                                echo 'class="nav-link"';
                            }
                            ?>>Download Dokumen</a></li>                        
                            <li class="nav-item"><a href="<?php echo base_url();?>kontak" <?php if ($this->uri->segment(1) == 'kontak') {
                                echo 'class="nav-link active"';
                            }else {
                                echo 'class="nav-link"';
                            }
                            ?>>Kontak Kami</a></li>
                        </ul>
                        <div class="menu-sidebar">
                            <ul>
                                <li><button class="popup-button"><i class="fas fa-search"></i></button></li>
                                <li><a target="_blank" class="default-button" href="https://maps.app.goo.gl/rBqnQVCo4As8e8Zw5">Lokasi Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
