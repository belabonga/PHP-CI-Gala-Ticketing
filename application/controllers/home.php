<?php

/**
* 
*/
class Home extends CI_Controller
{
	
	function index()
	{
		$data['title'] = 'Galasesa2017 | Home';
		$dt['tiket'] = $this->show_data->get_show();
		$data['perfrom'] = $this->show_data->get_perfrom();
		$this->load->view('header2',$data); //aslinya header
		$this->load->view('main',$dt, $data);
		$this->load->view('footer');

		//$this->load->view('cart');
	}

	function login(){
		$data['title'] = 'Galasesa2017 | Login';
		$this->load->view('header2',$data);
		$this->load->view('login_view');
		$this->load->view('footer');
	}

	function register(){
		$data['title'] = 'Galasesa2017 | Register';
		$this->load->view('header2',$data);
		$this->load->view('register_view');
		$this->load->view('footer');
	}

	function detail($id){
		$data['title'] = 'Galasesa2017 | Detail';
		$dt['tiket'] = $this->show_data->get_detail($id);
		$this->load->view('header2',$data);
		$this->load->view('detail_tiket',$dt);
		$this->load->view('footer');
	}

	function order(){
		$data['title'] = 'Galasesa2017 | Order View';
		$data['orderan'] = $this->show_data->showorder();
		$this->load->view('header2',$data);
		$this->load->view('order_view',$data);
		$this->load->view('footer');
	}

	function meet(){
		$data['title'] = 'Galasesa2017 | Meet The Team';
		$this->load->view('header2');
		$this->load->view('meetteam');
		$this->load->view('footer');
	}
}

?>