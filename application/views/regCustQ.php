<html>
<body>

customer registration complete <?php 

$hid = $_POST["hcust"]; 
$aid = $_POST["acust"];
$gid = $_POST["gcust"];
$jid = $_POST["jcust"];
$nid = $_POST["ncust"];
$eid = $_POST["ecust"];
$bid = $_POST["bcust"];

$hid2 = $_POST["hcust2"]; 
$aid2 = $_POST["acust2"];
$gid2 = $_POST["gcust2"];
$jid2 = $_POST["jcust2"];
$nid2 = $_POST["ncust2"];
$eid2 = $_POST["ecust2"];
$bid2 = $_POST["bcust2"];

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
if($aid!='NULL'){
    $custdetail = $this->db->query("select distinct aid, acustName, cTown from ciplaoutupload where aid = $aid");
    foreach ($custdetail->result() as $row){
        $custNm = $row->acustName;
        $custTw = $row->cTown;
    }
    $cust = $this->db->query("insert into cipla values($aid,'$custNm','$custTw')"); 
    
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
if($aid2!='NULL'){
    $custdetail = $this->db->query("select distinct aid, acustName, cTown from ciplaoutupload where aid = $aid2");
    foreach ($custdetail->result() as $row){
        $custNm = $row->acustName;
        $custTw = $row->cTown;
    }
    $cust = $this->db->query("insert into cipla values($aid2,'$custNm','$custTw')"); 
    
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
    case "abc":
        $mid = $aid;
        $custdetail = $this->db->query("select distinct aid, custName, town from abc where aid = $aid");
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
    case "neo":
        $mid = $nid;
        $custdetail = $this->db->query("select distinct nid, custName, town from neo where nid = \"$nid\"");
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
    
	case "baur":
		$mid = $bid;
		$custdetail = $this->db->query("select distinct bID, custName, town from baur where bID = \"$bid\"");
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
    case "abc2":
        $mid = $aid2;
        $custdetail = $this->db->query("select distinct aid, custName, town from abc where aid = $aid2");
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
    
    case "neo2":
        $mid = $nid2;
        $custdetail = $this->db->query("select distinct nid, custName, town from neo where nid = \"$nid2\"");
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
	
	case "baur2":
		$mid = $bid2;
		$custdetail = $this->db->query("select distinct bID, custName, town from baur where bID = \"$bid2\"");
		foreach ($custdetail->result() as $row){
			$custNm = $row->custName;
			$custTw = $row->town;
		}
		break;
}   
    //sanofi doesnt have id number
    if ($nid2!='NULL'){
        $nid2 = "\"".$nid2."\"";
    }
    if ($nid!='NULL'){
        $nid = "\"".$nid."\"";
    }
	if ($eid2!='NULL'){
        $eid2 = "\"".$eid2."\"";
    }
    if ($eid!='NULL'){
        $eid = "\"".$eid."\"";
    }
	if ($aid!='NULL'){
		$aid = "\"".$aid."\"";
	}
	if ($aid2!='NULL'){
		$aid2 = "\"".$aid2."\"";
	}
	
    //
    
    $cust = $this->db->query("insert into customer(custName,town,type,hID,gsID,jID,nID,eID,aID,bID,hID2,gsID2,jID2,nID2,eID2,aID2,bID2) values('$custNm','$town2','$ty',$hid,$gid,$jid,$nid,$eid,$aid,$bid,$hid2,$gid2,$jid2,$nid2,$eid2,$aid2,$bid2)");
	echo '
			<div class="alert alert-success" role="alert">
				Customer registration successful!
			</div>
				';
	
	echo $custNm.$town2.$ty.$hid.$gid.$jid.$nid.$eid.$aid.$bid.$hid2.$gid2.$jid2.$nid2.$eid2.$aid2.$bid2;


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
