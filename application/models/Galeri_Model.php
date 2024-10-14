<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_Model extends CI_Model {

	function insert_galeri($data){
		$this->db->insert('galeri', $data);
	}

	function get_galeri(){
		$string_query = "
			SELECT *
			FROM galeri
			ORDER BY tanggal DESC
		";
		$galeri = $this->db->query($string_query);
		return $galeri;
	}
	function hapus_galeri($id){
		$this->db->where('id', $id);
		$this->db->delete('galeri');
	}

	function get_galeri_id($id_galeri){
		$string_query = "
			SELECT *
			FROM galeri
			WHERE id = $id_galeri
		";
		$galeri = $this->db->query($string_query);
		return $galeri;
	}

	function update_galeri($update, $id){
		$this->db->where('id', $id);
		$this->db->update('galeri', $update);
	}

}