<?php

class upload_model extends CI_Model{

	
    function upload_hemas_out(){
		if(file_exists( './upload/csv/gvOutstadinghemas.csv')){
			$this->db->query("delete from hemasoutupload");
			return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadinghemas.csv' INTO TABLE hemasoutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (hID,hCustName,hTown,@d,inv,@date,age,amount,balAmount) SET date = STR_TO_DATE(@date,'%m/%d/%Y')");
		}
		else{
			throw new Exception("File not found", 1);
		}
        //return $this->db->query("select * from hemasoutupload");
    }
    // function upload_cipla_out(){
    //     if(file_exists( './upload/csv/gvOutstadingcipla.csv')){
    //         $this->db->query("delete from ciplaoutupload");
    //         return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadingcipla.csv' INTO TABLE ciplaoutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (cID,cCustName,@d,cTown,@d,@d,inv,@d,@d,@d,@date,@d,@d,age,amount,@d,balAmount,@d,@d,@d,@d,@d,@d,@d) SET date = STR_TO_DATE(@date,'%d/%m/%Y')");
    //     }
    //     else{
    //         throw new Exception("File not found", 1);
    //     }
    // }
    function upload_gs_out(){
        if(file_exists( './upload/csv/gvOutstadinggs.csv')){
            $this->db->query("delete from gsoutupload");
            return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadinggs.csv' INTO TABLE gsoutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (gID,gCustName,gTown,@d,inv,@date,age,amount,balAmount) SET date = STR_TO_DATE(@date,'%d-%b-%Y')");
        }
        else{
            throw new Exception("File not found", 1);
        }
    }
    function upload_jlm_out(){
        if(file_exists( './upload/csv/gvOutstadingJLM.csv')){
            $this->db->query("delete from jloutupload");
            return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadingJLM.csv' INTO TABLE jloutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (jID,jCustName,jTown,inv,@date,age,amount,balAmount) SET date = STR_TO_DATE(@date,'%d-%b-%Y')");
        }
        else{
            throw new Exception("File not found", 1);
        }
    }
    // function upload_san_out(){
    //     if(file_exists( './upload/csv/gvOutstadingSanofi.csv')){
    //         $this->db->query("delete from sanoutupload");
    //         return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadingSanofi.csv' INTO TABLE sanoutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,sTown,@CustName,inv,@d,@date,age,@d,balamount,@d,@d,@d,@d,@d,@d) SET date = STR_TO_DATE(@date,'%d/%m/%Y') , sID=@CustName, sCustName=@CustName");
    //     }
    //     else{
    //         throw new Exception("File not found", 1);
    //     }
    // }
	function upload_abc_out(){
        if(file_exists( './upload/csv/gvOutstadingABC.csv')){
            $this->db->query("delete from abcoutupload");
            return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadingABC.csv' INTO TABLE abcoutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (inv,@date,@CustName,age,amount,@d,@d,@d,balamount) SET date = STR_TO_DATE(@date,'%d-%b-%Y') , aID=@CustName, aCustName=@CustName");
        }
        else{
            throw new Exception("File not found", 1);
        }
    }
	function upload_neo_out(){
        if(file_exists( './upload/csv/gvOutstadingNEO.csv')){
            $this->db->query("delete from neooutupload");
            return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadingNEO.csv' INTO TABLE neooutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (inv,@date,@CustName,age,amount,@d,@d,@d,balamount) SET date = STR_TO_DATE(@date,'%d/%b/%Y') , nID=@CustName, nCustName=@CustName");
        }
        else{
            throw new Exception("File not found", 1);
        }
    }
	function upload_baur_out(){
		if(file_exists( './upload/csv/gvOutstadingbaur.csv')){
			$this->db->query("delete from bauroutupload");
			return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadingBAUR.csv' INTO TABLE bauroutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (bID,bCustName,bTown,inv,@d,@date,age,amount,balAmount) SET date = STR_TO_DATE(@date,'%m/%d/%Y')");
		}
		else{
			throw new Exception("File not found", 1);
		}
        //return $this->db->query("select * from hemasoutupload");
    }
    function upload_em_out(){
        if (file_exists('./upload/csv/gvOutstadingEmerchemie.csv')) {
            $this->db->query("delete from emoutupload");
            return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadingEmerchemie.csv' INTO TABLE emoutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (@CustName,inv,@date,age,amount,balamount) SET date = STR_TO_DATE(@date,'%m/%d/%Y') , eID=@CustName, eCustName=@CustName");
        }
        else{
            throw new Exception("File not found", 1);
        }
        
    }
}

