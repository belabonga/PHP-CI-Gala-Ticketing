<?php
/**
* 
*/
class Show_data extends CI_Model
{
	
	function get_show()
	{
		$query = $this->db->get('tabel_tiket');
		return $query->result_array();
	}

	function get_perfrom(){
		$query = $this->db->get('show');
		return $query->result_array();
	}

	function get_detail($id){
		$query = $this->db->get_where('tabel_tiket', array('id' => $id ));
		return $query->result();
	}

	function booking($data){
	return $this->db->insert('booking', $data);
	}
	
	function kurangstok($id){
		$sql = "update tabel_tiket set stok = stok - 1 where id =".$id."";
		return $this->db->query($sql);
	}

	function cancel($id_booking){
		return $this->db->delete('booking', array('id_booking' => $id_booking));
	}

	function tambahstok($id){
		$sql = "update tabel_tiket set stok = stok + 1 where id =".$id."";
		return $this->db->query($sql);
	}

	function showorder(){
		$id = $this->session->userdata('id_siswa');
		$query = $this->db->select('*')
		->from('booking')
		->join('tabel_tiket','tabel_tiket.id = booking.id','inner')
		->join('tabel_siswa','tabel_siswa.id_siswa = booking.id_siswa','inner')
		->where('tabel_siswa.id_siswa',$id)
		->get();
		return $query->result();
	}

	function updateTransfer($id){
		$rek = $this->input->post('rek');
		$data=array(
   			'payment' => $rek
		);
		//print_r($data);exit();
		 $this->db->where('id_siswa',$id);
  		$this->db->update('booking',$data);
	}

	function payment($uploads){
	 $user = $this->session->userdata('id_siswa');
	 $nobook  = $this->input->post('nobook');
	 $rek  = $this->input->post('rek');
	 $up = $uploads;
	 $data = array (
	   'id_siswa' => $user,  //input kedalam field nim
	   'norek'  => $rek, //input kedalam field nama
	   'id_booking'  => $nobook,
	   'bukti'  => $up
	 );
	print_r($data);exit();
  	 $this->db->insert('payment',$data);
	 
	}
}

?>