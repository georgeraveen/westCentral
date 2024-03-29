
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
		try {
			$this->load->model('upload_model');
			$uploadH = $this->upload_model->upload_hemas_out();
			if ($uploadH){
				$cust=$this->db->query("select distinct a.hID,a.hCustName,a.hTown from hemasoutupload a");
				foreach($cust->result() as $row){
					$this->db->query("insert ignore into hemas values('$row->hID',\"$row->hCustName\",'$row->hTown')");
				}
				echo '
					<div class="alert alert-success" role="alert">
						Hemas data uploaded
					</div>
				';
			}
			
		} catch (\Throwable $th) {
			echo $th;
			echo '
					<div class="alert alert-danger" role="alert">
						Hemas data upload error. Please check the file and try again.
					</div>
				';
		}
	}
	public function uploadCiplaOut(){
		try{
			$this->load->model('upload_model');
			$uploadC = $this->upload_model->upload_cipla_out();
			if ($uploadC){
				$cust=$this->db->query("select distinct a.cID,a.cCustName,a.cTown from ciplaoutupload a");
				foreach($cust->result() as $row){
					$this->db->query("insert ignore into cipla values('$row->cID',\"$row->cCustName\",'$row->cTown')");
				}
				echo '
						<div class="alert alert-success" role="alert">
							Cipla data uploaded
						</div>
					';
			}
			
		} catch (\Throwable $th) {
			echo '
					<div class="alert alert-danger" role="alert">
						Cipla data upload error. Please check the file and try again.
					</div>
				';
		}
	}
	public function uploadGsOut(){
		try{
			$this->load->model('upload_model');
			$uploadG = $this->upload_model->upload_gs_out();
			if ($uploadG){
				$cust=$this->db->query("select distinct a.gID,a.gCustName,a.gTown from gsoutupload a");
				foreach($cust->result() as $row){
					$this->db->query("insert ignore into gs values('$row->gID',\"$row->gCustName\",'$row->gTown')");
				}
				echo '
					<div class="alert alert-success" role="alert">
						GS data uploaded
					</div>
						';
			}

		} catch (\Throwable $th) {
		echo '
			<div class="alert alert-danger" role="alert">
				GS data upload error. Please check the file and try again.
			</div>
			';
		}
	}
	public function uploadJlmOut(){
		try{
			$this->load->model('upload_model');
			$uploadJ = $this->upload_model->upload_jlm_out();
			if ($uploadJ){
				$cust=$this->db->query("select distinct a.jID,a.jCustName,a.jTown from jloutupload a");
				foreach($cust->result() as $row){
					$this->db->query("insert ignore into jlm values('$row->jID',\"$row->jCustName\",'$row->jTown')");
				}
				echo '
				<div class="alert alert-success" role="alert">
					JLM data uploaded
				</div>
					';
			}

		} catch (\Throwable $th) {
		echo '
			<div class="alert alert-danger" role="alert">
				JLM data upload error. Please check the file and try again.
			</div>
			';
		}
	}
	public function uploadSanOut(){
		try{
			$this->load->model('upload_model');
			$uploadS = $this->upload_model->upload_san_out();
			if ($uploadS){
				$cust=$this->db->query("select distinct a.sID,a.sCustName,a.sTown from sanoutupload a");
				foreach($cust->result() as $row){
					$this->db->query("insert ignore into sanofi values(\"$row->sID\",\"$row->sCustName\",'$row->sTown')");
				}
			echo '
				<div class="alert alert-success" role="alert">
					Sanofi data uploaded
				</div>
					';
			}

		} catch (\Throwable $th) {
		echo '
			<div class="alert alert-danger" role="alert">
				Sanofi data upload error. Please check the file and try again.
			</div>
			';
		}
	}
	public function uploadAbcOut(){
		try{
			$this->load->model('upload_model');
			$uploadS = $this->upload_model->upload_abc_out();
			if ($uploadS){
				$cust=$this->db->query("select distinct a.aID,a.aCustName,a.aTown from abcoutupload a");
				foreach($cust->result() as $row){
					$this->db->query("insert ignore into abc values(\"$row->aID\",\"$row->aCustName\",'$row->aTown')");
				}
			echo '
				<div class="alert alert-success" role="alert">
					ABC data uploaded
				</div>
					';
			}

		} catch (\Throwable $th) {
		echo '
			<div class="alert alert-danger" role="alert">
				ABC data upload error. Please check the file and try again.
			</div>
			';
		}
	}
	public function uploadNeoOut(){
		try{
			$this->load->model('upload_model');
			$uploadS = $this->upload_model->upload_neo_out();
			if ($uploadS){
				$cust=$this->db->query("select distinct a.nID,a.nCustName,a.nTown from neooutupload a");
				foreach($cust->result() as $row){
					$this->db->query("insert ignore into neo values(\"$row->nID\",\"$row->nCustName\",'$row->nTown')");
				}
			echo '
				<div class="alert alert-success" role="alert">
					NeoLife data uploaded
				</div>
					';
			}

		} catch (\Throwable $th) {
		echo '
			<div class="alert alert-danger" role="alert">
				NeoLife data upload error. Please check the file and try again.
			</div>
			';
		}
	}
	public function uploadBaurOut(){
		try{
			$this->load->model('upload_model');
			$uploadS = $this->upload_model->upload_baur_out();
			if ($uploadS){
				$cust=$this->db->query("select distinct a.bID,a.bCustName,a.bTown from bauroutupload a");
				foreach($cust->result() as $row){
					$this->db->query("insert ignore into baur values(\"$row->bID\",\"$row->bCustName\",'$row->bTown')");
				}
			echo '
				<div class="alert alert-success" role="alert">
					Baur data uploaded
				</div>
					';
			}

		} catch (\Throwable $th) {
		echo '
			<div class="alert alert-danger" role="alert">
				Baur data upload error. Please check the file and try again.
			</div>
			';
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
