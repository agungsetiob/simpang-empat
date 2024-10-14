<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>Berita dan Kegiatan</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Berita dan Kegiatan</li>
            </ul>
        </div>
    </div>
</section>


<section class="blog-details pt-70 pb-100">
    <div class="container">
        <div class="row ">
            <?php foreach ($berita->result() as $row) : ?>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <a href="blog-details.html"><img src="<?php echo base_url();?>upload-documents/<?php echo $row->gambar ?>" alt="image"></a>
                        </div>
                        <div class="blog-card-text-area">
                            <div class="blog-date">
                                <ul>
                                    <li><i class="fas fa-user"></i> By <a href="<?php echo base_url();?>admin">Admin</a></li>
                                    <li><i class="far fa-calendar-alt"></i><?php echo longdate_indo($row->tanggal) ?></li>
                                </ul>
                            </div>
                            <h4><a href="<?php echo base_url();?>detail_berita_beranda/<?php echo $row->slug?>"><?php echo $row->judul ?></a></h4>
                            <!-- <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p> -->
                            <a class="read-more-btn" href="<?php echo base_url();?>detail_berita_beranda/<?php echo $row->slug?>">Lanjutkan membaca</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        <!-- <div class="paginations mt-30">
            <ul>
                <li><a class="active" href="blog.html">1</a></li>
                <li><a href="blog.html">2</a></li>
                <li><a href="blog.html">3</a></li>
                <li><a href="blog.html"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
        </div> -->
    </div>
</section>