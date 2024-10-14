
                <div class="page-content">
                    <div class="page-info">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Pemkab Tanah Bumbu</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Daftar Berita</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="main-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-title">
                                    <h3>DAFTAR DOKUMEN</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="zero-conf" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Nama Dokumen</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($dokumen->result() as $row) : ?>
                                                <tr>
                                                    <td><?php echo $row->nama_dokumen ?></td>
                                                    <td>
                                                        <div class="btn-group btn-group-sm" role="group">
                                                            <button type="button" class="btn btn-info" data-placement="top" title="Detail" data-toggle="modal"  data-toggle="tooltip"><a href="<?php echo base_url();?>/upload-documents/dokumen/<?php echo $row->file ?>"><i class="material-icons">remove_red_eye</i></a></button>
                                                            <button type="button" onclick="deletedata(<?php echo $row->id ?>)" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="material-icons">delete</i></a></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php endforeach;?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Nama Dokumen</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                       
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
        <script src="<?php echo base_url();?>/assets-2/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/bootstrap/popper.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        
        <script src="<?php echo base_url();?>assets-2/plugins/DataTables/datatables.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/js/connect.min.js"></script>
        <script src="<?php echo base_url();?>assets-2/js/pages/datatables.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script type="text/javascript">
        function deletedata(id){
            Swal.fire({
                        title: 'Apakah Anda Yakin?',
                        text: "Data tidak dapat dikembalikan setelah dihapus!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Hapus!'
                    }).then((Delete) => {                       
                        if (Delete) {
                            $.ajax({
                                url: "<?php echo base_url('Download_Controller/hapus_dokumen')?>",
                                type: "post",
                                data:{id:id},
                                success:function(){                          
                                    window.location = "<?php echo base_url()?>daftar_dokumen";

                                },
                                error:function(){
                                    Swal.fire('data gagal di hapus', 'error');
                                  }                         
                            });
                        } else {
                            swal.close();
                        }
                    });
        }
    </script>
        <?php echo $this->session->flashdata('msg'); ?>
        <?php echo $this->session->flashdata('delete'); ?>
    </body>

</html>
