<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->ci = & get_instance ();
		$this->load->database();
		$this->load->helper(array('url'));
		$this->load->library('session');
		$this->load->model('Main_Model');
		$this->load->model('Berita_Model');
		$this->load->model('Galeri_Model');
		$this->load->model('Download_Model');
		$this->load->model('Layanan_Model');
		$this->load->helper('tgl_indo');
 	}

 	function admin(){
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

 	function login(){
 		$username = $this->input->post('username');
 		$password = $this->input->post('password');
 		if(empty($username) or empty($password)){
 			redirect('');
 		}else{
 			if($this->Main_Model->login($username, $password)){
 				header('Location:'.base_url().'admin');
 			}else{
	        echo "password atau username salah";
 			}
 		}
 	}

 	function logout(){
 		$this->session->unset_userdata('user');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		header( 'Location: '.base_url() );
 	}

 	
	public function index()
	{
		//$this->load->view('home');
		$this->load->view('v_header');
		$this->load->view('v_navbar');
		$data['berita'] = $this->Berita_Model->get_berita_last();
		$this->load->view('v_content_2', $data);
		$this->load->view('v_footer');	
	}

	public function list_berita(){
		$this->load->view('v_header');
		$this->load->view('v_navbar');
		$data['berita'] = $this->Berita_Model->get_berita();
		$this->load->view('v_berita', $data);
		$this->load->view('v_footer');
	}

	function detail_berita_slug($slug){
		$data['berita'] = $this->Berita_Model->get_detail_berita_slug($slug);
		$data['berita_last'] = $this->Berita_Model->get_berita_last();

		$this->load->view('v_header', $data);
		$this->load->view('v_navbar');		

		$this->load->view('v_detail_berita', $data);
		$this->load->view('v_footer');
	}

	public function galeri(){
		$this->load->view('v_header');
		$this->load->view('v_navbar');
		$data['galeri'] = $this->Galeri_Model->get_galeri();
		$this->load->view('v_galeri', $data);
		$this->load->view('v_footer');
	}
	function download_dokumen(){
		$this->load->view('v_header');
		$this->load->view('v_navbar');
		$data['dokumen'] = $this->Download_Model->get_dokumen();
		$this->load->view('v_download_dokumen',$data);
		$this->load->view('v_footer');
	}
	public function kontak(){
		$this->load->view('v_header');
		$this->load->view('v_navbar');
		$this->load->view('v_kontak');
		$this->load->view('v_footer');
	}

	function struktur_organisasi(){
		$this->load->view('v_header');
		$this->load->view('v_navbar');
		$this->load->view('v_struktur_organisasi');
		$this->load->view('v_footer');
	}
	function sejarah(){
		$this->load->view('v_header');
		$this->load->view('v_navbar');
		$this->load->view('V_sejarah');
		$this->load->view('v_footer');
	}
	function visi_misi(){
		$this->load->view('v_header');
		$this->load->view('v_navbar');
		$this->load->view('v_visi_misi');
		$this->load->view('v_footer');
	}
	function tupoksi(){
		$this->load->view('v_header');
		$this->load->view('v_navbar');
		$this->load->view('v_tupoksi');
		$this->load->view('v_footer');
	}
	function layanan(){
		$this->load->view('v_header');
		$this->load->view('v_navbar');
		$this->load->view('v_layanan');
		$this->load->view('v_footer');
	}
	function layanan_pengaduan(){
		$this->load->view('v_header');
		$this->load->view('v_navbar');
		$this->load->view('v_layanan_pengaduan');
		$this->load->view('v_footer');
	}
	
	function layanannonperizinan(){
		$this->load->view('v_header');
		$this->load->view('v_navbar');
		$data['layanan'] = $this->Layanan_Model->get_layanan();
		$this->load->view('v_nonpelayanan', $data);
		$this->load->view('v_footer');
	}
}
?>