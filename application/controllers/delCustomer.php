<?php
  class delCustomer extends CI_Controller {

	
	public function index()
	{
		$this->load->view('delCustPage');
    }
    
    public function delCustQ()
	{
		$this->load->view('delCustQ');
    }
}
?>