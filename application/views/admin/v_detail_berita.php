
                <div class="page-content">
                    <div class="page-info">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Pemkab Tanah Bumbu</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="main-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-title">
                                    <h3>DETAIL BERITA</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl">
                                <div class="card">
                                    <?php foreach ($berita->result() as $row) : ?>
                                        <br>
                                    <center><img src="<?php echo base_url();?>upload-documents/<?php echo $row->gambar ?>" height="auto" width="500px" ></center>
                                    <div class="card-body">
                                        <h2 ><?php echo $row->judul ?></h2>
                                        <h4 class="card-title"><strong><?php echo longdate_indo($row->tanggal) ?></strong></h4>
                                        <p class="card-text"><?php echo $row->isi ?></p>
                                        <a href="<?php echo base_url();?>daftar_berita" class="btn btn-primary">Daftar Berita</a>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>