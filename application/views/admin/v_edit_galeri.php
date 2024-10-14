
                <div class="page-content">
                    <div class="page-info">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Pemkab Tanah Bumbu</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Galeri</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="main-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-title">
                                    <h3> EDIT GALERI</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl">
                                <div class="card">
                                    <div class="card-body">
                                        <?php foreach ($galeri->result() as $row) : ?>
                                        <form role="form" action="<?php echo base_url();?>submit_edit_galeri/<?php echo $row->id ?>" method="post" enctype="multipart/form-data">                                           
                                            <div class="form-group">
                                                <label for="inputAddress">Judul</label>
                                                <input type="text" class="form-control" id="inputAddress" name="judul" value="<?php echo $row->judul ?>">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Tanggal</label>
                                                    <input type="date" class="form-control" id="inputEmail4" placeholder="Tanggal" name="tanggal">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="lokasi">Lokasi</label>
                                                <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?php echo $row->lokasi ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="gambar">Gambar</label>
                                                 <input type="file"class="form-control" id="inputGroupFile01" name="foto">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <!-- <button type="submit" class="btn btn-success">Simpan dan Tambah </button> -->
                                            <?php endforeach;?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="footer-text"><div class="footer-copyright text-center"> Copyrights © 2021 <a href="<?php echo base_url();?>admin">Kabupaten Tanah Bumbu</a>. All rights reserved.</div></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Javascripts -->

        <script src="<?php echo base_url();?>/assets-2/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/apexcharts/dist/apexcharts.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/blockui/jquery.blockUI.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/js/connect.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/js/pages/dashboard.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        
        <?php //echo $this->session->flashdata('msg'); ?>
        
        
        <script src="<?php echo base_url();?>/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>

      <script type="text/javascript">
       $(function(){
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
       });
      </script>

    </body>

</html>