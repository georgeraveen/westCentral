
<?php
  class regCustomer extends CI_Controller {

	
	public function index()
	{
		$this->load->view('regCustPage');
	}
	public function regCustQ(){
		$this->load->view('regCustQ');
	}
	
	
}