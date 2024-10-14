<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_Controller extends CI_Controller {

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
		$this->load->model('Berita_Model');
		$this->load->helper('tgl_indo');
	}

	

	public function index()
	{
		if($this->session->userdata('user')){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_navbar');
			$data['total_berita'] = $this->Berita_Model->total_berita();
			$data['get_berita_today'] = $this->Berita_Model->get_berita_today();
			$this->load->view('admin/v_content', $data);
			$this->load->view('admin/v_footer');	
		}else{
			$this->load->view('admin/v_login');
		}
	}

	function tambah_berita (){
		if($this->session->userdata('user')){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_navbar');
			$this->load->view('admin/v_tambah_berita');
		}else{
			$this->load->view('admin/v_login');
		}

	}

	function daftar_berita(){
		if($this->session->userdata('user')){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_navbar');

			$data['berita'] = $this->Berita_Model->get_berita();
			$this->load->view('admin/v_daftar_berita', $data);
		}else{
			$this->load->view('admin/v_login');
		}
	}

	function detail_berita($id_berita){
		if($this->session->userdata('user')){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_navbar');

			$data['berita'] = $this->Berita_Model->get_detail_berita($id_berita);
			$this->load->view('admin/v_detail_berita', $data);
			$this->load->view('admin/v_footer');
		}else{
			$this->load->view('admin/v_login');
		}
	}
	
	function submit_berita(){
		if($this->session->userdata('user')){
			$foto = $_FILES['foto']['name'];
			$fileSize = $_FILES['foto']['size'];  
			$fileError = $_FILES['foto']['error'];
			$waktu = date('d-m-Y-H_i_s');
			$nama_foto = $waktu.$foto;

			$slug =  $this->seo_friendly_url($this->input->post('judul'));

			if($fileSize > 0 || $fileError == 0){  
				$move = move_uploaded_file($_FILES['foto']['tmp_name'], 'upload-documents/'.$nama_foto);		
				if($move){  
					$insert = array(
						'judul' => $this->input->post('judul', true),
						'tanggal' => $this->input->post('tanggal', true),
						'kategori' => $this->input->post('kategori', true),
						'isi'  => $this->input->post('isi', true),
						'slug' => $slug,
						'gambar' => $nama_foto
					);

					$this->Berita_Model->insert_berita($insert);
					
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

					redirect('tambah_berita');


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

	function edit_berita($id_berita){
		if($this->session->userdata('user')){
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_navbar');

			$data['berita'] = $this->Berita_Model->get_detail_berita($id_berita);
			$this->load->view('admin/v_edit_berita', $data);
		}else{
			$this->load->view('admin/v_login');
		}
	}

	function submit_edit_berita($id_berita){
		if($this->session->userdata('user')){
			$foto = $_FILES['foto']['name'];
			$fileSize = $_FILES['foto']['size'];  
			$fileError = $_FILES['foto']['error'];
			$waktu = date('d-m-Y-H_i_s');
			$nama_foto = $waktu.$foto;

			$slug =  $this->seo_friendly_url($this->input->post('judul'));

			if($fileSize > 0 || $fileError == 0){ 
			$move = move_uploaded_file($_FILES['foto']['tmp_name'], 'upload-documents/'.$nama_foto);					
				if($move){  
					$update = array(
						'judul' => $this->input->post('judul', true),
						'tanggal' => $this->input->post('tanggal', true),
						'kategori' => $this->input->post('kategori', true),
						'isi'  => $this->input->post('isi', true),
						'slug' => $slug,
						'gambar' => $nama_foto
					);

					$this->Berita_Model->update_berita($update, $id_berita);
					
					$this->session->set_flashdata('msg', 
						"<script>
						Swal.fire({
							position: 'top-center',
							icon: 'success',
							title: 'Data Telah Diupdate',
							showConfirmButton: false,
							timer: 2000
							})
							</script>");

					redirect('daftar_berita');
				}else {
					echo 'gagal';
				} 					
								
			}else if($fileSize == 0){
				
				$update = array(
					'judul' => $this->input->post('judul', true),
					'tanggal' => $this->input->post('tanggal', true),
					'kategori' => $this->input->post('kategori', true),
					'slug' => $slug,
					'isi'  => $this->input->post('isi', true)
				);

				$this->Berita_Model->update_berita($update, $id_berita);
				
				$this->session->set_flashdata('msg', 
					"<script>
					Swal.fire({
						position: 'top-center',
						icon: 'success',
						title: 'Data Telah Diupdate',
						showConfirmButton: false,
						timer: 2000
						})
						</script>");

				redirect('daftar_berita');
			}

		}else{
			$this->load->view('admin/v_login');
		}
	}

	function hapus_berita(){
		if($this->session->userdata('user')){
			$id_berita = $this->input->post('id');

			$data = $this->Berita_Model->get_detail_berita($id_berita);
			$file;
			foreach ($data->result() as $row) :
				$file = $row->gambar;
			endforeach;
			$target = 'upload-documents/'.$file;
			
			if(file_exists($target)){
				unlink($target);
				$this->Berita_Model->hapus_berita($id_berita);
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

	public function seo_friendly_url($string){
	    $string = str_replace(array('[\', \']'), '', $string);
	    $string = preg_replace('/\[.*\]/U', '', $string);
	    $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
	    $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
	    return strtolower(trim($string, '-'));
	}

	function input_slug(){
		$data= $this->Berita_Model->get_berita();

		$judul;
		foreach($data->result() as $row):
			$judul[] = $row->judul;

		endforeach;

		$slug;
		for ($i=0; $i <count($judul) ; $i++) { 
			$slug[] = $this->seo_friendly_url($judul[$i]);
		}
		

		for ($i=0; $i <count($slug) ; $i++) { 
			$string_query = "
				UPDATE berita 
				SET slug = '$slug[$i]'
				WHERE judul = '$judul[$i]'
			";
		$this->db->query($string_query);

		}
		
		print_r($slug);

	}
}
?>