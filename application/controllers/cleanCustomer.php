
<?php
  class cleanCustomer extends CI_Controller {

	
	public function index()
	{
		$this->load->view('cleanCustPage');
	}
	public function cleanHemasCust()
	{
		// sql query to clean hemas customers where id string is not in customers table hID1 or hID2 columns
		$cleanH = $this->db->query("delete from hemas where hID not in (select hID from customer WHERE hID != '' UNION select hID2 from customer WHERE hID2 != '')");
		if ($cleanH){
			echo '
					<div class="alert alert-success" role="alert">
						Hemas customers cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						Hemas customers clean error. Please check the file and try again.
					</div>
				';
		}
	}
	public function cleanCiplaCust()
	{
		// sql query to clean cipla customers where id string is not in customers table cID1 or cID2 columns
		$cleanC = $this->db->query("delete from cipla where cID not in (select cID from customer WHERE cID != '' UNION select cID2 from customer WHERE cID2 != '')");
		if ($cleanC){
			echo '
					<div class="alert alert-success" role="alert">
						Cipla customers cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						Cipla customers clean error. Please check the file and try again.
					</div>
				';
		}
	}
	public function cleanGSCust()
	{
		// sql query to clean gs customers where id string is not in customers table gID1 or gID2 columns
		$cleanG = $this->db->query("delete from gs where gID not in (select gsID from customer WHERE gsID != '' UNION select gsID2 from customer WHERE gsID2 != '')");
		if ($cleanG){
			echo '
					<div class="alert alert-success" role="alert">
						GS customers cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						GS customers clean error. Please check the file and try again.
					</div>
				';
		}
	}
	public function cleanJLMCust()
	{
		// sql query to clean jlm customers where id string is not in customers table jID1 or jID2 columns
		$cleanJ = $this->db->query("delete from jlm where jID not in (select jID from customer WHERE jID != '' UNION select jID2 from customer WHERE jID2 != '')");
		if ($cleanJ){
			echo '
					<div class="alert alert-success" role="alert">
						JLM customers cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						JLM customers clean error. Please check the file and try again.
					</div>
				';
		}
	}
	public function cleanSanCust()
	{
		// sql query to clean sanofi customers where id string is not in customers table sID1 or sID2 columns
		$cleanS = $this->db->query("delete from sanofi where sID not in (select sID from customer WHERE sID != '' UNION select sID2 from customer WHERE sID2 != '')");
		if ($cleanS){
			echo '
					<div class="alert alert-success" role="alert">
						Sanofi customers cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						Sanofi customers clean error. Please check the file and try again.
					</div>
				';
		}
	}
	public function cleanAbcCust()
	{
		// sql query to clean abc customers where id string is not in customers table aID1 or aID2 columns
		$cleanA = $this->db->query("delete from abc where aID not in (select aID from customer WHERE aID != '' UNION select aID2 from customer WHERE aID2 != '')");
		if ($cleanA){
			echo '
					<div class="alert alert-success" role="alert">
						ABC customers cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						ABC customers clean error. Please check the file and try again.
					</div>
				';
		}
	}
	public function cleanNeoCust()
	{
		// sql query to clean neo customers where id string is not in customers table nID1 or nID2 columns
		$cleanN = $this->db->query("delete from neo where nID not in (select nID from customer WHERE nID != '' UNION select nID2 from customer WHERE nID2 != '')");
		if ($cleanN){
			echo '
					<div class="alert alert-success" role="alert">
						Neo customers cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						Neo customers clean error. Please check the file and try again.
					</div>
				';
		}
	}
	public function cleanBaurCust()
	{
		// sql query to clean baur customers where id string is not in customers table bID1 or bID2 columns
		$cleanB = $this->db->query("delete from baur where bID not in (select bID from customer WHERE bID != '' UNION select bID2 from customer WHERE bID2 != '')");
		if ($cleanB){
			echo '
					<div class="alert alert-success" role="alert">
						Baur customers cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						Baur customers clean error. Please check the file and try again.
					</div>
				';
		}
	}
	public function cleanEmCust()
	{
		// sql query to clean emerchemie customers where id string is not in customers table eID1 or eID2 columns
		$cleanE = $this->db->query("delete from emerchemie where eID not in (select eID from customer WHERE eID != '' UNION select eID2 from customer WHERE eID2 != '')");
		if ($cleanE){
			echo '
					<div class="alert alert-success" role="alert">
						Emerchemie customers cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						Emerchemie customers clean error. Please check the file and try again.
					</div>
				';
		}
	}
	
}
