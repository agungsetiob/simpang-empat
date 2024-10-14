<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Model extends CI_Model {


	function login($username, $password){
		$hash = $id = $this -> db
                               -> select('password')
                               -> from('pengguna')
                               -> where('username', $username)
                               -> limit(1)
                               -> get()
                               -> row()
                               -> password;
        $validation = password_verify($password, $hash);
        if($validation) {
            $sess_array = array(
				'user' => 'admin',
				'logged_in' => TRUE
			);
			$this->load->library('session');
			$this->session->set_userdata($sess_array);
            return true;
        }else
        return false;

	}

}
?>