<html>
<body>

customer registration complete <?php 

$hid = $_POST["hcust"]; 
$cid = $_POST["ccust"];
$gid = $_POST["gcust"];
$jid = $_POST["jcust"];
$sid = $_POST["scust"];
$eid = $_POST["ecust"];

$hid2 = $_POST["hcust2"]; 
$cid2 = $_POST["ccust2"];
$gid2 = $_POST["gcust2"];
$jid2 = $_POST["jcust2"];
$sid2 = $_POST["scust2"];
$eid2 = $_POST["ecust2"];

$ty=$_POST["ctype"];
$town2=$_POST["cTown"];
$mid = $_POST["mcust"];

echo $mid;
/*
if($hid!='NULL'){
    $custdetail = $this->db->query("select distinct hID, hCustName, hTown from hemasoutupload where hID = $hid");
    foreach ($custdetail->result() as $row){
        $custNm = $row->hCustName;
        $custTw = $row->hTown;
    }
    $cust = $this->db->query("insert into hemas values($hid,'$custNm','$custTw')"); 
    
}
if($cid!='NULL'){
    $custdetail = $this->db->query("select distinct cID, cCustName, cTown from ciplaoutupload where cID = $cid");
    foreach ($custdetail->result() as $row){
        $custNm = $row->cCustName;
        $custTw = $row->cTown;
    }
    $cust = $this->db->query("insert into cipla values($cid,'$custNm','$custTw')"); 
    
}
if($gid!='NULL'){
    $custdetail = $this->db->query("select distinct gID, gCustName, gTown from gsoutupload where gID = $gid");
    foreach ($custdetail->result() as $row){
        $custNm = $row->gCustName;
        $custTw = $row->gTown;
    }
    $cust = $this->db->query("insert into gs values($gid,'$custNm','$custTw')"); 
    
}
if($jid!='NULL'){
    $custdetail = $this->db->query("select distinct jID, jCustName, jTown from jloutupload where jID = $jid");
    foreach ($custdetail->result() as $row){
        $custNm = $row->jCustName;
        $custTw = $row->jTown;
    }
    $cust = $this->db->query("insert into jlm values($jid,'$custNm','$custTw')"); 
    
}

if($hid2!='NULL'){
    $custdetail = $this->db->query("select distinct hID, hCustName, hTown from hemasoutupload where hID = $hid2");
    foreach ($custdetail->result() as $row){
        $custNm = $row->hCustName;
        $custTw = $row->hTown;
    }
    $cust = $this->db->query("insert into hemas values($hid2,'$custNm','$custTw')"); 
    
}
if($cid2!='NULL'){
    $custdetail = $this->db->query("select distinct cID, cCustName, cTown from ciplaoutupload where cID = $cid2");
    foreach ($custdetail->result() as $row){
        $custNm = $row->cCustName;
        $custTw = $row->cTown;
    }
    $cust = $this->db->query("insert into cipla values($cid2,'$custNm','$custTw')"); 
    
}
if($gid2!='NULL'){
    $custdetail = $this->db->query("select distinct gID, gCustName, gTown from gsoutupload where gID = $gid2");
    foreach ($custdetail->result() as $row){
        $custNm = $row->gCustName;
        $custTw = $row->gTown;
    }
    $cust = $this->db->query("insert into gs values($gid2,'$custNm','$custTw')"); 
    
}
if($jid2!='NULL'){
    $custdetail = $this->db->query("select distinct jID, jCustName, jTown from jloutupload where jID = $jid2");
    foreach ($custdetail->result() as $row){
        $custNm = $row->jCustName;
        $custTw = $row->jTown;
    }
    $cust = $this->db->query("insert into jlm values($jid2,'$custNm','$custTw')"); 
    
}*/
switch($mid){
    case "hemas":
        $mid = $hid;
        $custdetail = $this->db->query("select distinct hID, custName, town from hemas where hID = $hid");
        foreach ($custdetail->result() as $row){
            $custNm = $row->custName;
            $custTw = $row->town;
        }
        break;
    case "cipla":
        $mid = $cid;
        $custdetail = $this->db->query("select distinct cID, custName, town from cipla where cID = $cid");
        foreach ($custdetail->result() as $row){
            $custNm = $row->custName;
            $custTw = $row->town;
        }
        break;
    case "gs":
        $mid = $gid;
        $custdetail = $this->db->query("select distinct gID, custName, town from gs where gID = $gid");
        foreach ($custdetail->result() as $row){
            $custNm = $row->custName;
            $custTw = $row->town;
        }
        break;
    case "jl":
        $mid = $jid;
        $custdetail = $this->db->query("select distinct jID, custName, town from jlm where jID = $jid");
        foreach ($custdetail->result() as $row){
            $custNm = $row->custName;
            $custTw = $row->town;
        }
        break;
    case "san":
        $mid = $sid;
        $custdetail = $this->db->query("select distinct sID, custName, town from sanofi where sID = \"$sid\"");
        foreach ($custdetail->result() as $row){
            $custNm = $row->custName;
            $custTw = $row->town;
        }
        break;

	case "emchemie":
		$mid = $eid;
        $custdetail = $this->db->query("select distinct eID, custName, town from emchemie where eID = \"$eid\"");
        foreach ($custdetail->result() as $row){
            $custNm = $row->custName;
            $custTw = $row->town;
        }
        break;
    
    case "hemas2":
        $mid = $hid2;
        $custdetail = $this->db->query("select distinct hID, custName, town from hemas where hID = $hid2");
        foreach ($custdetail->result() as $row){
            $custNm = $row->custName;
            $custTw = $row->town;
        }
        break;
    case "cipla2":
        $mid = $cid2;
        $custdetail = $this->db->query("select distinct cID, custName, town from cipla where cID = $cid2");
        foreach ($custdetail->result() as $row){
            $custNm = $row->custName;
            $custTw = $row->town;
        }
        break;
    case "gs2":
        $mid = $gid2;
        $custdetail = $this->db->query("select distinct gID, custName, town from gs where gID = $gid2");
        foreach ($custdetail->result() as $row){
            $custNm = $row->custName;
            $custTw = $row->town;
        }
        break;
    
    case "jl2":
        $mid = $jid2;
        $custdetail = $this->db->query("select distinct jID, custName, town from jlm where jID = $jid2");
        foreach ($custdetail->result() as $row){
            $custNm = $row->custName;
            $custTw = $row->town;
        }
        break;
    
    case "san2":
        $mid = $sid2;
        $custdetail = $this->db->query("select distinct sID, custName, town from sanofi where sID = \"$sid2\"");
        foreach ($custdetail->result() as $row){
            $custNm = $row->custName;
            $custTw = $row->town;
        }
        break;

	case "emchemie2":
		$mid = $eid2;
		$custdetail = $this->db->query("select distinct eID, custName, town from emchemie where eID = \"$eid2\"");
		foreach ($custdetail->result() as $row){
			$custNm = $row->custName;
			$custTw = $row->town;
		}
		break;
}   
    //sanofi doesnt have id number
    if ($sid2!='NULL'){
        $sid2 = "\"".$sid2."\"";
    }
    if ($sid!='NULL'){
        $sid = "\"".$sid."\"";
    }
	if ($eid2!='NULL'){
        $eid2 = "\"".$eid2."\"";
    }
    if ($eid!='NULL'){
        $eid = "\"".$eid."\"";
    }
    //
    
    $cust = $this->db->query("insert into customer(custName,town,type,hID,gsID,cpID,jID,sID,eID,hID2,gsID2,cpID2,jID2,sID2,eID2) values('$custNm','$town2','$ty',$hid,$gid,$cid,$jid,$sid,$eid,$hid2,$gid2,$cid2,$jid2,$sid2,$eid2)");
	echo '
			<div class="alert alert-success" role="alert">
				Customer registration successful!
			</div>
				';
	
	echo $custNm.$town2.$ty.$hid.$cid.$gid.$jid.$sid.$eid.$hid2.$cid2.$gid2.$jid2.$sid2.$eid2;


?><br>
<div>
		<a href="./../regCustPage">
		<button class="btn btn-info mx-5"  type="button">
			<< Go Back
		</button>
		</a>
	</div>

</body>
</html>
