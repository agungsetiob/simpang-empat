<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		$this->ci = & get_instance ();
		$this->load->database();
		$this->load->helper(array('url'));
		$this->load->model('Galeri_Model');
		$this->load->helper('tgl_indo');
	}

	function tambah_galeri() {
		if($this->session->userdata('user')){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_navbar');
			$this->load->view('admin/v_tambah_galeri');
		}else{
			$this->load->view('admin/v_login');
		}
	}

	function daftar_galeri() {
		if($this->session->userdata('user')){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_navbar');
			$data['galeri'] = $this->Galeri_Model->get_galeri();
			$this->load->view('admin/v_daftar_galeri', $data);
		}else{
			$this->load->view('admin/v_login');
		}
	}

	function submit_galeri() {
		if($this->session->userdata('user')){
			$foto = $_FILES['foto']['name'];
			$fileSize = $_FILES['foto']['size'];  
			$fileError = $_FILES['foto']['error'];
			$waktu = date('d-m-Y-H_i_s');
			$nama_foto = $foto.$waktu;
			if($fileSize > 0 || $fileError == 0){  
				$move = move_uploaded_file($_FILES['foto']['tmp_name'], 'upload-documents/'.$nama_foto);					
				if($move){  
					$insert = array(
						'judul' => $this->input->post('judul', true),
						'tanggal' => $this->input->post('tanggal', true),
						'lokasi' => $this->input->post('lokasi', true),
						'gambar' => $nama_foto
					);

					$this->Galeri_Model->insert_galeri($insert);
					
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

					redirect('tambah_galeri');


					// if($this->input->post('simpan', true)== 'simpan'){
					// 	redirect('daftar_berita');
					// } else{
					// 	redirect('tambah_berita');
					// }
					
				}
			}else{
				echo 'gagal';
			}
		}else{
			$this->load->view('admin/v_login');
		}
	}

	function edit_galeri($id_galeri) {
		if($this->session->userdata('user')){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_navbar');

			$data['galeri'] = $this->Galeri_Model->get_galeri_id($id_galeri);
			$this->load->view('admin/v_edit_galeri', $data);
		}else{
			$this->load->view('admin/v_login');
		}
	}

	function submit_edit_galeri($id_galeri){
		if($this->session->userdata('user')){
			$foto = $_FILES['foto']['name'];
			$fileSize = $_FILES['foto']['size'];  
			$fileError = $_FILES['foto']['error'];
			$waktu = date('d-m-Y-H_i_s');
			$nama_foto = $foto.$waktu;
			if($fileSize > 0 || $fileError == 0){  
				$move = move_uploaded_file($_FILES['foto']['tmp_name'], 'upload-documents/'.$nama_foto);					
				if($move){  
					$insert = array(
						'judul' => $this->input->post('judul', true),
						'tanggal' => $this->input->post('tanggal', true),
						'lokasi' => $this->input->post('lokasi', true),
						'gambar' => $nama_foto
					);

					$this->Galeri_Model->update_galeri($insert,$id_galeri);
					
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

					redirect('daftar_galeri');


					// if($this->input->post('simpan', true)== 'simpan'){
					// 	redirect('daftar_berita');
					// } else{
					// 	redirect('tambah_berita');
					// }
					
				}
			}else{
				echo 'gagal';
			}
		}else{
			$this->load->view('admin/v_login');
		}
	}
	
	function hapus_galeri(){
		if($this->session->userdata('user')){
			$id_galeri = $this->input->post('id');

			$data = $this->Galeri_Model->get_galeri_id($id_galeri);
			$file;
			foreach ($data->result() as $row) :
				$file = $row->gambar;
			endforeach;
			$target = 'upload-documents/'.$file;
			
			if(file_exists($target)){
				unlink($target);
				$this->Galeri_Model->hapus_galeri($id_galeri);
				$this->session->set_flashdata('delete', 
				"<script> Swal.fire({
					type: 'success',
					title: 'Data Telah Dihapus',
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