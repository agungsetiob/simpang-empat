
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
                    <h3>DAFTAR LAYANAN</h3>
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
                                    <th>No</th>
                                    <th>Nama Layanan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($layanan->result() as $row) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row->nama_layanan ?></td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-info" data-placement="top" title="Detail" data-toggle="modal" data-target="#detail<?php echo $no; ?>"  data-toggle="tooltip"><i class="material-icons" >remove_red_eye</i></button>
                                                <!-- <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><a href="<?php echo base_url();?>edit_layanan/<?php echo $row->id?>"><i class="material-icons">edit</i></a></button> -->
                                                <button type="button" onclick="deletedata(<?php echo $row->id ?>)" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="material-icons">delete</i></a></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade bd-example-modal-lg" id="detail<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Layanan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul>
                                                        <li>nama layanan : <?php echo $row->nama_layanan ?></li>
                                                        <li>persyaratan layanan : <?php echo $row->persyaratan_layanan ?></li>
                                                        <li>prosedur layanan : <?php echo $row->prosedur_pelayanan ?></li>
                                                        <li>waktu penyelesaian : <?php echo $row->waktu_penyelesaian ?></li>
                                                        <li>produk layanan : <?php echo $row->produk_pelayanan ?></li>
                                                        <li>biaya layanan : <?php echo $row->biaya_pelayanan ?></li>
                                                        <li>penanganan pengaduan : <?php echo $row->pengelolaan_pengaduan ?></li>
                                                        <li>dasar hukum  : <?php echo $row->dasar_hukum ?></li>
                                                        <li>sarana dan prasarana : <?php echo $row->sarpras_fasilitas ?></li>
                                                        <li>kompetensi pelaksana : <?php echo $row->kompetensi_pelaksana ?></li>
                                                        <li>jumlah pelaksana : <?php echo $row->jumlah_pelaksana ?></li>
                                                        <li>jaminan pelayanan  : <?php echo $row->jaminan_pelayanan ?></li>
                                                        <li>jaminan keamanan : <?php echo $row->jaminan_keamanan ?></li>
                                                        <li>pengawasan internal : <?php echo $row->pengawasan_internal ?></li>
                                                        <li>evaluasi kinerja : <?php echo $row->evaluasi_kinerja ?></li>
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Layanan</th>
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
                    url: "<?php echo base_url('Layanan_Controller/hapus_layanan')?>",
                    type: "post",
                    data:{id:id},
                    success:function(){                          
                        window.location = "<?php echo base_url()?>daftar_layanan";

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
