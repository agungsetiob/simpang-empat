
<div class="page-content">
    <div class="page-info">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Pemkab Tanah Bumbu</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Berita</li>
            </ol>
        </nav>
    </div>
    <div class="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title">
                    <h3> TAMBAH BERITA</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">


                        <form role="form" action="<?php echo base_url();?>submit_berita" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputAddress">Judul</label>
                                <input type="text" class="form-control" id="inputAddress" name="judul" placeholder="Judul">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input type="date" class="form-control" id="inputEmail4" name="tanggal">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">Kategori</label>
                                    <select id="inputState" class="form-control custom-select" name="kategori">
                                        <option value="Berita" selected>Berita</option>
                                        <option value="Informasi">Informasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Isi Berita</label>
                                <textarea class="form-control" id="summernote" rows="4" name="isi"></textarea>
                            </div>
                            <script>
                               $('#summernote').summernote({
                                placeholder: 'Ketik Disini',
                                tabsize: 2,
                                height: 200,
                                toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'underline', 'clear']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['view', ['fullscreen', 'codeview', 'help']],
                                ['insert', ['link']]
                                ]
                            });
                        </script>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file"placeholder="tambahkan gambar" class="form-control" id="inputGroupFile01" name="foto" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <!-- <button type="submit" class="btn btn-success">Simpan dan Tambah </button> -->
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


<?php echo $this->session->flashdata('msg'); 
        //$this->session->unset_userdata('msg'); ?>
        
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