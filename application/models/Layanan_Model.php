<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_Model extends CI_Model {

	
	function get_layanan(){
		$string_query = "
			SELECT *
			FROM layanan
		";
		$dokumen = $this->db->query($string_query);
		return $dokumen;
	}

	function get_layanan_id($id){
		$string_query = "
			SELECT *
			FROM layanan
			WHERE id = $id
		";
		$dokumen = $this->db->query($string_query);
		return $dokumen;
	}

	function insert_layanan($data){
		$this->db->insert('layanan', $data);
	}

	function hapus_layanan($id){
		$this->db->where('id', $id);
		$this->db->delete('layanan');
	}

}
?>