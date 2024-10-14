
                <div class="page-content">
                    <div class="page-info">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Pemkab Tanah Bumbu</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Beranda</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="main-wrapper">
                        <div class="row stats-row">
                            <?php
                            //echo date('Y-m-d');
                            ?>
                            
                            <div class="col-lg-4 col-md-12">
                                <div class="card card-transparent stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title">
                                                <?php 
                                                foreach($total_berita->result() as $row):
                                                echo $row->total
                                                ?>
                                                <?php endforeach; ?>
                                                <span class="stats-change stats-change-danger">-</span></h5>
                                            <p class="stats-text">Total Berita</p>
                                        </div>
                                        <div class="stats-icon change-success">
                                            <i class="material-icons">trending_up</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="card card-transparent stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title"><?php 
                                                foreach($get_berita_today->result() as $row):
                                                echo $row->total
                                                ?>
                                                <?php endforeach; ?>
                                                <span class="stats-change stats-change-success">-</span></h5>
                                            <p class="stats-text">Total Berita Hari Ini</p>
                                        </div>
                                        <div class="stats-icon change-success">
                                            <i class="material-icons">trending_up</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="card card-transparent stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title">240<span class="stats-change stats-change-success">-</span></h5>
                                            <p class="stats-text">Total Pengunjung</p>
                                        </div>
                                        <div class="stats-icon change-success">
                                            <i class="material-icons">trending_up</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                