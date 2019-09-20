<?php
  class viewOutstand extends CI_Controller {

	
	public function index()
	{
		$this->load->view('viewOutstandPage');
	}
	public function singleOutQ(){
		$this->load->view('singleOutQ');
	}
	public function singleTwOutQ(){
		$this->load->view('singleTwOutQ');
	}
	public function multiOutQ(){
		$this->load->view('multiOutQ');
	}
	public function multiTwOutQ(){
		$this->load->view('multiTwOutQ');
	}
	
}
?>