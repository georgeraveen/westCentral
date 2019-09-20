<?php

class upload_model extends CI_Model{

	
    function upload_hemas_out(){
        $this->db->query("delete from hemasoutupload");
        return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadinghemas.csv' INTO TABLE hemasoutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (hID,hCustName,@d,hTown,@d,@d,inv,@d,@d,@d,@date,@d,@d,age,amount,@d,balAmount,@d,@d,@d,@d,@d,@d,@d) SET date = STR_TO_DATE(@date,'%d/%m/%Y')");
        //return $this->db->query("select * from hemasoutupload");
    }
    function upload_cipla_out(){
        $this->db->query("delete from ciplaoutupload");
        return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadingcipla.csv' INTO TABLE ciplaoutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (cID,cCustName,@d,cTown,@d,@d,inv,@d,@d,@d,@date,@d,@d,age,amount,@d,balAmount,@d,@d,@d,@d,@d,@d,@d) SET date = STR_TO_DATE(@date,'%d/%m/%Y')");
        
    }
    function upload_gs_out(){
        $this->db->query("delete from gsoutupload");
        return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadinggs.csv' INTO TABLE gsoutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (gID,gCustName,@d,gTown,@d,@d,@d,inv,@d,@d,@d,@date,@d,@d,age,amount,@d,balAmount,@d,@d,@d,@d,@d,@d,@d) SET date = STR_TO_DATE(@date,'%d-%b-%Y')");
        
    }
    function upload_jlm_out(){
        $this->db->query("delete from jloutupload");
        return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadingJLM.csv' INTO TABLE jloutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (jID,jCustName,jTown,@d,@d,inv,@d,@date,@d,age,amount,@d,balAmount,@d,@d,@d,@d,@d,@d,@d) SET date = STR_TO_DATE(@date,'%d/%m/%Y')");
        
    }
    function upload_san_out(){
        $this->db->query("delete from sanoutupload");
        return $this->db->query("LOAD DATA LOCAL INFILE 'http://localhost/westCentral/upload/csv/gvOutstadingSanofi.csv' INTO TABLE sanoutupload FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS (@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,@d,sTown,@CustName,inv,@d,@date,age,@d,balamount,@d,@d,@d,@d,@d,@d) SET date = STR_TO_DATE(@date,'%d/%m/%Y') , sID=@CustName, sCustName=@CustName");
        
    }
}