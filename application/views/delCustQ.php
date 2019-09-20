<html>
<body>
 <?php 

$ID = $_POST["custid"]; 
/*
$cust1=$this->db->query("select * from customer where Custid = $ID");
foreach($cust1->result() as $row){
    if($row->hID!=''){$cust= $this->db->query("delete from hemas where hID = '$row->hID'");} 
    if($row->cpID!=''){$cust= $this->db->query("delete from cipla where cID = '$row->cpID'");}
    if($row->gsID!=''){$cust= $this->db->query("delete from gs where gID = '$row->gsID'");}
    if($row->jID!=''){$cust= $this->db->query("delete from jlm where jID = '$row->jID'");}

    if($row->hID2!=''){$cust= $this->db->query("delete from hemas where hID = '$row->hID2'");}
    if($row->cpID2!=''){$cust= $this->db->query("delete from cipla where cID = '$row->cpID2'");}
    if($row->gsID2!=''){$cust= $this->db->query("delete from gs where gID = '$row->gsID2'");}
    if($row->jID2!=''){$cust= $this->db->query("delete from jlm where jID = '$row->jID2'");}
}
*/
$cust= $this->db->query("delete from customer where Custid = $ID");




?>
customer delete complete
</body>
</html>
