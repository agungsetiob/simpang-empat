    <section class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>Galeri Kami</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Galeri Kami</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="events pt-70 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <?php foreach ($galeri->result() as $row) : ?>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="events-card">
                        <img src="<?php echo base_url();?>upload-documents/<?php echo $row->gambar ?>" alt="image">
                        <div class="events-card-text">
                            <ul>
                                <li><?php echo longdate_indo($row->tanggal) ?></li>
                            </ul>
                            <h4><a href=""><?php echo $row->judul ?></a></h4>
                            <p><i class="fas fa-map-marker-alt"></i> <a href="#"><?php echo $row->lokasi ?></a></p>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            
            <!-- <div class="paginations mt-30">
                <ul>
                    <li><a class="active" href="events.html">1</a></li>
                    <li><a href="events.html">2</a></li>
                    <li><a href="events.html">3</a></li>
                    <li><a href="events.html"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div> -->
        </div>
    </section>
