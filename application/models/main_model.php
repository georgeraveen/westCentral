<?php

class main_model extends CI_Model{

	function test_main(){
		echo "this is model function";
    }
    function upload_hemas_out(){
        return $this->db->query("LOAD DATA LOCAL INFILE 'd:\malli.csv' INTO TABLE hemasoutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (hID,hCustName,@d,hTown,@d,@d,inv,@d,@d,@d,@d,@date,@d,@d,amount,@d,balAmount,@d,@d,@d,@d,@d,@d,@d) SET date = STR_TO_DATE(@date,'%d/%m/%Y')");
        //return $this->db->query("select * from hemasoutupload");
    }
}