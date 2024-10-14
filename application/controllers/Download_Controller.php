<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download_Controller extends CI_Controller {

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
		$this->load->model('Download_Model');
		$this->load->helper('tgl_indo');

		if ( ! $this->session->userdata('user')){   
			redirect('admin');
		}
	}

	

	function tambah_dokumen() {
		if($this->session->userdata('user')){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_navbar');
			$this->load->view('admin/v_tambah_dokumen');
		}else{
			$this->load->view('admin/v_login');
		}
	}


	function daftar_dokumen(){
		if($this->session->userdata('user')){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_navbar');
			$data['dokumen'] = $this->Download_Model->get_dokumen();
			$this->load->view('admin/v_daftar_dokumen', $data);
		}else{
			$this->load->view('admin/v_login');
		}
	}

	function submit_dokumen(){
		if($this->session->userdata('user')){
			$dokumen = $_FILES['dokumen']['name'];
			$fileSize = $_FILES['dokumen']['size'];  
			$fileError = $_FILES['dokumen']['error'];

			if($fileSize > 0 || $fileError == 0){  
				$move = move_uploaded_file($_FILES['dokumen']['tmp_name'], 'upload-documents/dokumen/'.$dokumen);					
				if($move){  
					$insert = array(
						'nama_dokumen' => $this->input->post('judul', true),
						'file' => $dokumen
					);

					$this->Download_Model->insert_dokumen($insert);
					
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

					redirect('tambah_dokumen');
					
				}
			}else{
				echo 'gagal';
			}
		}else{
			$this->load->view('admin/v_login');
		}
	}

	function hapus_dokumen(){
		if($this->session->userdata('user')){
			$id_dokumen = $this->input->post('id');

			$data = $this->Download_Model->get_dokumen_id($id_dokumen);
			$file;
			foreach ($data->result() as $row) :
				$file = $row->file;
			endforeach;
			$target = 'upload-documents/dokumen/'.$file;
			
			if(file_exists($target)){
				unlink($target);
				$this->Download_Model->hapus_dokumen($id_dokumen);
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