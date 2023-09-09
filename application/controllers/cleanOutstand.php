
<?php
  class cleanOutstand extends CI_Controller {

	
	public function index()
	{
		$this->load->view('cleanOutstandPage');
	}
	public function cleanHemasOutstand()
	{
		$cleanH = $this->db->query("delete from hemasoutupload");
		if ($cleanH){
			echo '
					<div class="alert alert-success" role="alert">
						Hemas outstanding cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						Hemas outstanding clean error. Please check the file and try again.
					</div>
				';
		}
	}
	public function cleanCiplaOutstand()
	{
		$cleanC = $this->db->query("delete from ciplaoutupload");
		if ($cleanC){
			echo '
					<div class="alert alert-success" role="alert">
						Cipla outstanding cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						Cipla outstanding clean error. Please check the file and try again.
					</div>
				';
		}
	}
	public function cleanGSOutstand()
	{
		$cleanG = $this->db->query("delete from gsoutupload");
		if ($cleanG){
			echo '
					<div class="alert alert-success" role="alert">
						GS outstanding cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						GS outstanding clean error. Please check the file and try again.
					</div>
				';
		}
	}

	public function cleanJLMOutstand()
	{
		$cleanJ = $this->db->query("delete from jloutupload");
		if ($cleanJ){
			echo '
					<div class="alert alert-success" role="alert">
						JLM outstanding cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						JLM outstanding clean error. Please check the file and try again.
					</div>
				';
		}
	}

	public function cleanABCOutstand()
	{
		$cleanA = $this->db->query("delete from abcoutupload");
		if ($cleanA){
			echo '
					<div class="alert alert-success" role="alert">
						ABC outstanding cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						ABC outstanding clean error. Please check the file and try again.
					</div>
				';
		}
	}

	public function cleanNEOOutstand()
	{
		$cleanN = $this->db->query("delete from neooutupload");
		if ($cleanN){
			echo '
					<div class="alert alert-success" role="alert">
						NEO outstanding cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						NEO outstanding clean error. Please check the file and try again.
					</div>
				';
		}
	}

	public function cleanBAUROutstand()
	{
		$cleanB = $this->db->query("delete from bauroutupload");
		if ($cleanB){
			echo '
					<div class="alert alert-success" role="alert">
						BAUR outstanding cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						BAUR outstanding clean error. Please check the file and try again.
					</div>
				';
		}
	}

	public function cleanEMEROutstand()
	{
		$cleanE = $this->db->query("delete from emoutupload");
		if ($cleanE){
			echo '
					<div class="alert alert-success" role="alert">
						EMER outstanding cleaned
					</div>
				';
		}
		else{
			echo '
					<div class="alert alert-danger" role="alert">
						EMER outstanding clean error. Please check the file and try again.
					</div>
				';
		}
	}
}
