<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->ci = & get_instance ();
		$this->load->database();
		$this->load->helper(array('url'));
		$this->load->model('Layanan_Model');
		$this->load->helper('tgl_indo');

		if ( ! $this->session->userdata('user')){   
			redirect('admin');
		}
	}

	

	function tambah_layanan() {
		if($this->session->userdata('user')){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_navbar');
			$this->load->view('admin/v_tambah_layanan');
		}else{
			$this->load->view('admin/v_login');
		}
	}


	function daftar_layanan(){
		if($this->session->userdata('user')){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_navbar');
			$data['layanan'] = $this->Layanan_Model->get_layanan();
			$this->load->view('admin/v_daftar_layanan', $data);
		}else{
			$this->load->view('admin/v_login');
		}
	}

	function submit_layanan(){
		if($this->session->userdata('user')){ 
					$insert = array(
						'nama_layanan' => $this->input->post('nama_layanan', true),
						'jenis' => $this->input->post('jenis', true),
						'persyaratan_layanan' => $this->input->post('persyaratan_layanan', true),
						'prosedur_pelayanan' => $this->input->post('prosedur_layanan', true),
						'waktu_penyelesaian' => $this->input->post('waktu_penyelesaian', true),
						'biaya_pelayanan' => $this->input->post('biaya_pelayanan', true),
						'produk_pelayanan' => $this->input->post('produk_pelayanan', true),
						'pengelolaan_pengaduan' => $this->input->post('pengelolaan_pengaduan', true),
						'dasar_hukum' => $this->input->post('dasar_hukum', true),
						'sarpras_fasilitas' => $this->input->post('sarpras_fasilitas', true),
						'kompetensi_pelaksana' => $this->input->post('kompetensi_pelaksana', true),
						'pengawasan_internal' => $this->input->post('pengawasan_internal', true),
						'jumlah_pelaksana' => $this->input->post('jumlah_pelaksana', true),
						'jaminan_pelayanan' => $this->input->post('jaminan_pelayanan', true),
						'jaminan_keamanan' => $this->input->post('jaminan_keamanan', true),
						'evaluasi_kinerja' => $this->input->post('evaluasi_kinerja', true)						
					);

					$this->Layanan_Model->insert_layanan($insert);
					
					$this->session->set_flashdata('msg', 
						"<script>
						Swal.fire({
							position: 'top-center',
							icon: 'success',
							title: 'Data Telah Disimpan',
							showConfirmButton: false,
							timer: 2000
							})
							</script>");

					redirect('tambah_layanan');
		}else{
			$this->load->view('admin/v_login');
		}
	}

	function hapus_layanan(){
		if($this->session->userdata('user')){
			$id_dokumen = $this->input->post('id');

			$set ='a';
			
			if($set='a'){
				unlink($target);
				$this->Layanan_Model->hapus_layanan($id_dokumen);
				$this->session->set_flashdata('delete', 
				"<script> Swal.fire({
					type: 'success',
					title: 'Data Telah hapus',
					showConfirmButton: false,
					timer: 2000
				}); </script>");
			}else{
				$this->session->set_flashdata('delete', 
				"<script> Swal.fire({
					type: 'success',
					title: 'Gagal ',
					showConfirmButton: false,
					timer: 2000
				}); </script>");
			}

			 

		}else{
			$this->load->view('admin/v_login');
		}
	}

	
}
?>