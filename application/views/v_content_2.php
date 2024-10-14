    <section class="main-banner plr-100 bg-f9fbfe">

        <div class="banner-social-icons">
            <ul>
                <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/kecamatan_simpang_empat" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-text-area banner-text-area-1">
                        <h6>Pemerintah Kabupaten Tanah Bumbu</h6>
                        <h2>Kecamatan Simpang Empat</h2>
                        <p></p>
                        <!-- <a class="default-button" href="about.html">Learn More</a> -->
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-img-area-1">
                        <img src="/upload-documents/Home.jpg" alt="image" width="100%">

                    </div>
                </div>
            </div>
        </div>
    </section>

      <section class="precess pb-100 mt-10">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
               
            </div>
            <div class="section-content">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="process-card">
                            <!-- <i class="flaticon-google-docs"></i> -->
                            <i><img src="assets/images/lapor.png"></i>
                            <h4><a href="https://lapor.go.id/">E-Lapor</a></h4>
                            <p>Layanan Aspirasi dan Pengaduan Online Rakyat Kab. Tanah Bumbu</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="process-card">
                            <!-- <i class="flaticon-process"></i> -->
                            <i><img src="assets/images/ppid.png"></i>
                            <h4><a href="http://ppid.tanahbumbukab.go.id" target="_blank">PPID</a></h4>
                            <p>Pejabat Pengelola Informasi dan Dokumentasi Kab. Tanah Bumbu</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="blog ptb-100 bg-f9fbfe">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>Berita dan Kegiatan Terbaru</h3>
                <p>Temukan Kegiatan OPD Disini</p>
            </div>
            <div class="section-content">
                <div class="row justify-content-center">
                    <?php foreach ($berita->result() as $row) : ?>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <a href="#"><img src="<?php echo base_url();?>upload-documents/<?php echo $row->gambar ?>" alt="image" ></a>
                            </div>
                            <div class="blog-card-text-area">
                                <div class="blog-date">
                                    <ul>
                                        <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                        <li><i class="far fa-calendar-alt"></i> <?php echo longdate_indo($row->tanggal) ?></li>
                                    </ul>
                                </div>
                                <b><a href="<?php echo base_url();?>detail_berita_beranda/<?php echo $row->slug?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo $row->judul?>"><?php echo substr($row->judul,0,50)  ?>...</a></b>
                                <p></p>
                                <a class="read-more-btn"  href="<?php echo base_url();?>detail_berita_beranda/<?php echo $row->slug?>">Lanjutkan Membaca</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <img src="/upload-documents/ikm.PNG">
                    </div>
                </div>
            </div>
        </div>
    </section>
  
   <section class="blog ptb-100 bg-f9fbfe">
        <div class="container">
            
                <h1>Infografis</h1>
                <hr><br>
            <div class="row">
            <div class="col-3">
                
        <img src="/upload-documents/operasional.jpeg">
            </div>
            <div class="col-3">
        <img src="/upload-documents/medsos.jpeg">
            </div>
            <div class="col-3">
        <img src="/upload-documents/motto.jpeg">
            </div>
            <div class="col-3">
        <img src="/upload-documents/maklumat.jpeg">
            </div>
        </div>
    </div>
            </div>
    </section>
            