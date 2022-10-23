<?php

/**
* 
*/
class Booking extends CI_Controller
{

	public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
	
	function book()
	{
		$num = $this->login_model->check_user();
		if ($num == 1) {
			$this->session->set_flashdata('notif','<div class="alert alert-danger alert-dismissible" role="alert">
				<strong>Maaf !</strong> anda tidak dapat mem-booking lagi.</div>');
			redirect('home/detail/'.$this->uri->segment(3));
		} else {
			$data = array(
				'id_booking' => rand(),
				'id' => $this->uri->segment(3),
				'id_siswa' => $this->session->userdata('id_siswa'),
				'qty' => '1',
				'status' => 'pending..'
				);
			$id = $this->uri->segment(3);
			$this->show_data->booking($data);
			$this->show_data->kurangstok($id);
			$this->session->set_flashdata('notif','<div class="alert alert-info alert-dismissible" role="alert">
				<strong>Order Success !</strong></div>');
			redirect('home');
		} 
	}
	
	function cancelbooking($id_booking, $id){
			$this->show_data->cancel($id_booking);
			$this->show_data->tambahstok($id);
			redirect('home/order');

	}

	function payment_method(){
		$data['title'] = 'Galasesa2K17 | Choose Payment';
		$this->load->view('header2');
		$this->load->view('payment_method', $data);
		$this->load->view('footer');
	}

	function order_confirm(){
		$data['title'] = 'Galasesa2K17 | Confirm';
		$data['sh'] = $this->show_data->showorder();
		$this->load->view('header2',$data);
		$this->load->view('check_out', $data);
		$this->load->view('footer');
	}

	function payment($id){
	$a = $this->session->userdata('id_siswa');
	if($this->input->post('submit')){
		$this->show_data->updateTransfer($id);
	}
	redirect("booking/order_confirm/$a");
	}

	private function do_upload()
	{
		
		$type = explode('.', $_FILES["berkas"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./uploads/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("gif", "png", "jpg")))
			if(is_uploaded_file($_FILES["berkas"]["tmp_name"]))
				if(move_uploaded_file($_FILES["berkas"]["tmp_name"],$url))
					return $url;
		return "";
	}

	function checkout($id_booking){
		$data['title'] = 'Galasesa2K17 | Choose Payment';
		$upload = $this->do_upload();
		if($this->input->post('submit')){
			$this->show_data->payment($upload);
			$this->show_data->cancel($id_booking);
		}
		redirect('home');
	}
}

?>