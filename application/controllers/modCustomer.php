
<?php
  class modCustomer extends CI_Controller {

	
	public function index()
	{
		$this->load->view('modCustPage');
  }
  public function modCustP(){
		$this->load->view('modCustP');
	}
	public function modCustQ(){
		$this->load->view('modCustQ');
	}
	
	
}
?>