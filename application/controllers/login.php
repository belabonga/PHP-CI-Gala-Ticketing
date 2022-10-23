<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Login extends CI_Controller
{
	function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			redirect('home');
		} else {
			redirect('home/login');
		}
	}

	function login_do(){
	if ($this->input->post('submit')) {
			//validation
			$this->form_validation->set_rules('email_siswa','Email','trim|required|valid_email');
			$this->form_validation->set_rules('password','Password','trim|required');

			if ($this->form_validation->run() == TRUE) {
				if ($this->login_model->check_login() == TRUE) {
					$this->session->set_flashdata('notif','<div class="alert alert-success">Login Success</div>');
					redirect('home');
				} else {
					$this->session->set_flashdata('notif','<div class="alert alert-danger">Invalid Email or Password !</div>');
					redirect('home/login');
				} 
			} else {
					$this->session->set_flashdata('notif','<div class="alert alert-danger">'.validation_errors().'</div>');
					redirect('home/login');
				}
			}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

	function register_do(){
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nama_siswa','Name','trim|required');
			$this->form_validation->set_rules('email_siswa','Email','valid_email|callback_rolekey_exists');
			$this->form_validation->set_rules('password','Password','trim|required');
			$this->form_validation->set_rules('passconf','Confirm Password','trim|required|matches[password]');

			if ($this->form_validation->run() == TRUE) {
				if ($this->login_model->check_register() == TRUE) {
					if ($this->rolekey_exists($id) == TRUE) {
						redirect('home/register');
					} else {
						$this->session->set_flashdata('notif', '<div class="alert alert-success">Registration Success ! <a href="'.base_url().'home/login">Login here</a></div>');
					redirect('home/register');
					}
					
				} else {
					$this->session->set_flashdata('notif', '<div class="alert alert-danger">Registration Failed !</div>');
					redirect('home/register');
					}
			} else {
				$this->session->set_flashdata('notif', '<div class="alert alert-danger">'.validation_errors().'</div>');
					redirect('home/register');
			}
		}
	}

	function rolekey_exists($id){
		$result = $this->login_model->mail_exists($id);

		if ($result == TRUE) {
			$this->session->set_flashdata('notif', '<div class="alert alert-danger">Email already exists !</div>');
			redirect('home/register');
		}
	}
}
?>