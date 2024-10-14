<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Download_Model extends CI_Model {

	
	function get_dokumen(){
		$string_query = "
			SELECT *
			FROM download_dokumen
		";
		$dokumen = $this->db->query($string_query);
		return $dokumen;
	}

	function get_dokumen_id($id){
		$string_query = "
			SELECT *
			FROM download_dokumen
			WHERE id = $id
		";
		$dokumen = $this->db->query($string_query);
		return $dokumen;
	}

	function insert_dokumen($data){
		$this->db->insert('download_dokumen', $data);
	}

	function hapus_dokumen($id){
		$this->db->where('id', $id);
		$this->db->delete('download_dokumen');
	}

}
?>