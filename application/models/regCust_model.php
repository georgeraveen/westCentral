<?php

class regCust_model extends CI_Model{

	
function viewOtherCust(){
    return $this->db->query("select * from hemasoutupload");
}

//temp
public function insert_d(){
    
    echo "sdsf";
    return $this->db->query("insert into hemasoutupload values('CD23','dcdsfds','dsd','rr','2019-07-01',78,56)");
}
}