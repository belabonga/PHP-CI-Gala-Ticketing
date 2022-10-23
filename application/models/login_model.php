<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
	function check_login()
	{
		$email_siswa = $this->input->post('email_siswa');
		$password = $this->input->post('password');

		$query = $this->db->get_where('tabel_siswa',array(
			'email_siswa' => $email_siswa,
			'password' => $password)
		);

		$row = $query->row();

		if ($query->num_rows() > 0) {
			$data = array(
				'logged_in' => TRUE, 
				'email_siswa' => $email_siswa,
				'id_siswa' => $row->id_siswa
			);
		$this->session->set_userdata($data);
		return TRUE;
		} else {
			return FALSE;
		}
	}

		function check_register(){
		$data = array(
			'nama_siswa' => $this->input->post('nama_siswa'),
			'email_siswa' => $this->input->post('email_siswa'),
			'password' => $this->input->post('password'),
			'angkatan' => $this->input->post('angkatan'),
			'kelas' => $this->input->post('kelas') );

		$this->db->insert('tabel_siswa',$data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function mail_exists($id)
	{
		$this->db->where('email_siswa',$id);
		$query = $this->db->get('tabel_siswa');
		if ($query->num_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function check_user(){
		$id_user = $this->session->userdata('id_siswa');
		$query = $this->db->get_where('booking', array('id_siswa' => $id_user ));
		return $query->num_rows();
	}
}
?>