<?php 

class Simpanan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
                $this->load->helper('url');
	}

	function index(){
		$data['hasil'] = $this->M_data->tampil_data4()->result();
		$this->load->view('simpanan',$data);
	}
}
?>