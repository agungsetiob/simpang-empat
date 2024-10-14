
<div class="page-content">
    <div class="page-info">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Pemkab Tanah Bumbu</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Layanan</li>
            </ol>
        </nav>
    </div>
    <div class="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title">
                    <h3> TAMBAH LAYANAN</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">


                        <form role="form" action="<?php echo base_url();?>submit_layanan" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputAddress">Nama Layanan</label>
                                <input type="text" class="form-control" id="inputAddress" name="nama_layanan" placeholder="Nama Layanan" required>
                            </div>
                            <div class="form-group">
                                    <label for="inputState">Jenis</label>
                                    <select id="inputState" class="form-control custom-select" name="jenis">
                                        <option value="Layanan Non Perizinan" selected>Layanan Non Perizinan</option>
                                    </select>
                                </div>
                            <div class="form-group">
                                <label for="persyaratan_layanan">Persyaratan Pelayanan</label>
                                <textarea class="form-control" id="summernote" rows="4" name="persyaratan_layanan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="prosedur_layanan">Prosedur/ Mekanisme Pelayanan</label>
                                <textarea class="form-control" id="summernote2" rows="4" name="prosedur_layanan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="waktu_penyelesaian">Waktu Penyelesaian</label>
                                <textarea class="form-control" id="summernote3" rows="4" name="waktu_penyelesaian"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="biaya_pelayanan">Biaya Pelayanan</label>
                                <textarea class="form-control" id="summernote4" rows="4" name="biaya_pelayanan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="produk_pelayanan">Produk Pelayanan</label>
                                <textarea class="form-control" id="summernote5" rows="4" name="produk_pelayanan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pengelolaan_pengaduan">Pengelolaan Pengaduan</label>
                                <textarea class="form-control" id="summernote6" rows="4" name="pengelolaan_pengaduan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="dasar_hukum">Dasar Hukum</label>
                                <textarea class="form-control" id="summernote7" rows="4" name="dasar_hukum"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="sarpras_fasilitas">Sarana/Prasarana dan Fasilitas</label>
                                <textarea class="form-control" id="summernote8" rows="4" name="sarpras_fasilitas"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="kompetensi_pelaksana">Kompetensi Pelaksana</label>
                                <textarea class="form-control" id="summernote9" rows="4" name="kompetensi_pelaksana"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="jumlah_pelaksana">Jumlah Pelaksana</label>
                                <textarea class="form-control" id="summernote11" rows="4" name="jumlah_pelaksana"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="jaminan_pelayanan">Jaminan Pelayanan</label>
                                <textarea class="form-control" id="summernote12" rows="4" name="jaminan_pelayanan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="jaminan_keamanan">Jaminan Keamanan dan Keselamatan Pelayanan</label>
                                <textarea class="form-control" id="summernote13" rows="4" name="jaminan_keamanan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pengawasan_internal">Pengawasan Internal</label>
                                <textarea class="form-control" id="summernote10" rows="4" name="pengawasan_internal"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="evaluasi_kinerja">Evaluasi Kinerja Pelaksana</label>
                                <textarea class="form-control" id="summernote14" rows="4" name="evaluasi_kinerja"></textarea>
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
                            <script>
                               $('#summernote2').summernote({
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
                            <script>
                               $('#summernote3').summernote({
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
                            <script>
                               $('#summernote4').summernote({
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
                            <script>
                               $('#summernote5').summernote({
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
                            <script>
                               $('#summernote6').summernote({
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
                            <script>
                               $('#summernote7').summernote({
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
                            <script>
                               $('#summernote8').summernote({
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
                            <script>
                               $('#summernote9').summernote({
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
                            <script>
                               $('#summernote10').summernote({
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
                            <script>
                               $('#summernote11').summernote({
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
                            <script>
                               $('#summernote12').summernote({
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
                            <script>
                               $('#summernote13').summernote({
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
                            <script>
                               $('#summernote14').summernote({
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