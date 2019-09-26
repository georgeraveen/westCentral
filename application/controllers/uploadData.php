
<?php
  class uploadData extends CI_Controller {

	
	public function index()
	{
		$this->load->view('uploadDataPage');
	}
	public function importcsv()
	{
		$this->load->view('importcsv');
	}

	public function uploadHemasOut(){
		$this->load->model('upload_model');
		$uploadH = $this->upload_model->upload_hemas_out();
		if ($uploadH){
			$cust=$this->db->query("select distinct a.hID,a.hCustName,a.hTown from hemasoutupload a");
			foreach($cust->result() as $row){
				$this->db->query("insert ignore into hemas values('$row->hID',\"$row->hCustName\",'$row->hTown')");
			}

			echo 'Hemas  data uploaded';
		}
		else{
			echo 'hemas upload error';
		}
	}
	public function uploadCiplaOut(){
		$this->load->model('upload_model');
		$uploadC = $this->upload_model->upload_cipla_out();
		if ($uploadC){
			$cust=$this->db->query("select distinct a.cID,a.cCustName,a.cTown from ciplaoutupload a");
			foreach($cust->result() as $row){
				$this->db->query("insert ignore into cipla values('$row->cID',\"$row->cCustName\",'$row->cTown')");
			}
			echo 'Cipla  data uploaded';
		}
		else{
			echo 'cipla upload error';
		}
	}
	public function uploadGsOut(){
		$this->load->model('upload_model');
		$uploadG = $this->upload_model->upload_gs_out();
		if ($uploadG){
			$cust=$this->db->query("select distinct a.gID,a.gCustName,a.gTown from gsoutupload a");
			foreach($cust->result() as $row){
				$this->db->query("insert ignore into gs values('$row->gID',\"$row->gCustName\",'$row->gTown')");
			}
			echo 'GS  data uploaded';
		}
		else{
			echo 'gs upload error';
		}
	}
	public function uploadJlmOut(){
		$this->load->model('upload_model');
		$uploadJ = $this->upload_model->upload_jlm_out();
		if ($uploadJ){
			$cust=$this->db->query("select distinct a.jID,a.jCustName,a.jTown from jloutupload a");
			foreach($cust->result() as $row){
				$this->db->query("insert ignore into jlm values('$row->jID',\"$row->jCustName\",'$row->jTown')");
			}
			echo 'JLM  data uploaded';
		}
		else{
			echo 'jlm upload error';
		}
	}
	public function uploadSanOut(){
		$this->load->model('upload_model');
		$uploadS = $this->upload_model->upload_san_out();
		if ($uploadS){
			$cust=$this->db->query("select distinct a.sID,a.sCustName,a.sTown from sanoutupload a");
			foreach($cust->result() as $row){
				$this->db->query("insert ignore into sanofi values(\"$row->sID\",\"$row->sCustName\",'$row->sTown')");
			}
			echo 'Sanofi  data uploaded';
		}
		else{
			echo 'Sanofi upload error';
		}
	}
	public function uploadEmOut(){
		$this->load->model('upload_model');
		$uploadS = $this->upload_model->upload_em_out();
		if ($uploadS){
			$cust=$this->db->query("select distinct a.eID,a.eCustName,a.eTown from emoutupload a");
			foreach($cust->result() as $row){
				$this->db->query("insert ignore into emerchemie values(\"$row->eID\",\"$row->eCustName\",'$row->eTown')");
			}
			echo 'Emerchemie  data uploaded';
		}
		else{
			echo 'Emerchemie upload error';
		}
	}
}