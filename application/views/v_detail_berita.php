<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>Detail Berita</h1>
            <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li>Detail Berita</li>
            </ul>
        </div>
    </div>
</section>


<section class="blog-details ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php foreach ($berita->result() as $row) : ?>
                <div class="blog-details-text-area details-text-area">
                    <img src="<?php echo base_url();?>upload-documents/<?php echo $row->gambar ?>" alt="image">
                    <div class="blog-date">
                        <ul>
                            <li><i class="fas fa-user"></i> By <a href="<?php echo base_url();?>admin">Admin</a></li>
                            <li><i class="far fa-calendar-alt"></i> <?php echo longdate_indo($row->tanggal) ?></li>
                        </ul>
                    </div>
                    <h3 class="mt-0"><?php echo $row->judul ?></h3>
                    <p><?php echo $row->isi ?> </p>
                </div>
                <div class="blog-text-footer mt-30">
                    <div class="tag-area">
                        <ul>
                            <li><i class="fas fa-tags"></i></li>
                            <li><a href="#"><?php echo $row->kategori ?></a></li>
                        </ul>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><span>Share:</span></li>
                            <li><a href="https://wa.me/?text=<?php echo base_url().'detail_berita_beranda/'. $row->slug ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url().'detail_berita_beranda/'. $row->slug ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-area pl-20 pt-30">
                    <div class="sidebar-card recent-news mt-30">
                        <h3>Berita Terbaru</h3>
                        <?php foreach ($berita_last->result() as $row) : ?>
                        <div class="recent-news-card">
                            <a href="<?php echo base_url();?>detail_berita_beranda/<?php echo $row->slug?>"><!-- <img src="<?php echo base_url();?>upload-documents/<?php echo $row->gambar ?>" alt="image"> --></a>
                            <h5><a href="<?php echo base_url();?>detail_berita_beranda/<?php echo $row->slug?>"><?php echo $row->judul ?></a></h5>
                            <p><?php echo longdate_indo($row->tanggal) ?></p>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>