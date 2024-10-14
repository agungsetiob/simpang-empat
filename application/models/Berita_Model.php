<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_Model extends CI_Model {


	function insert_berita($data){
		$this->db->insert('berita', $data);
	}

	function get_berita(){
		$string_query = "
			SELECT *
			FROM berita
			ORDER BY tanggal DESC
		";
		$berita = $this->db->query($string_query);
		return $berita;
	}

	function get_detail_berita_slug ($slug){
		$string_query = "
			SELECT *
			FROM berita
			WHERE slug = '$slug'
		";
		$berita = $this->db->query($string_query);
		return $berita;
	}

	function get_detail_berita ($id_berita){
		$string_query = "
			SELECT *
			FROM berita
			WHERE id = $id_berita
		";
		$berita = $this->db->query($string_query);
		return $berita;
	}

	function hapus_berita($id){
		$this->db->where('id', $id);
		$this->db->delete('berita');
	}
	
	function total_berita(){
		$string_query = "
			SELECT count(id) as total
			FROM berita
		";
		$total = $this->db->query($string_query);
		return $total;
	}

	function get_berita_last(){
		$string_query = "
			SELECT *
			FROM berita
			ORDER BY tanggal DESC LIMIT 3

		";
		$berita = $this->db->query($string_query);
		return $berita;
	}
	function get_berita_today(){
		$tgl = date('Y-m-d');
		$tanggal = strval($tgl);
		$string_query = "
			SELECT count(id) as total
			FROM berita
			WHERE tanggal = '$tanggal'
		";
		$berita = $this->db->query($string_query);
		return $berita;
	}

	function update_berita($update, $id){
		$this->db->where('id', $id);
		$this->db->update('berita', $update);
	}



}
?>