<html>
<body>

customer registration details modified <?php 
$idn = $_POST["idN"]; 
$hid = $_POST["hid"]; 
$aid = $_POST["aid"];
$gid = $_POST["gsid"];
$jid = $_POST["jid"];
$nid = $_POST["nid"];
$eid = $_POST["eid"];
$bid = $_POST["bid"];

$hid2 = $_POST["hid2"]; 
$aid2 = $_POST["aid2"];
$gid2 = $_POST["gsid2"];
$jid2 = $_POST["jid2"];
$nid2 = $_POST["nid2"];
$eid2 = $_POST["eid2"];
$bid2 = $_POST["bid2"];
$twn = $_POST["town"];
echo $nid;
echo $nid2;
//sanofi doesnt have id number
// if ($nid2!='NULL'){
//     $nid2 = "\"".$nid2."\"";
// }
// if ($nid!='NULL'){
//     $nid = "\"".$nid."\"";
// }
// if ($eid2!='NULL'){
//     $eid2 = "\"".$eid2."\"";
// }
// if ($eid!='NULL'){
//     $eid = "\"".$eid."\"";
// }
// if ($aid2!='NULL'){
// 	$aid2 = "\"".$aid2."\"";
// }
// if ($aid!='NULL'){
// 	$aid = "\"".$aid."\"";
// }
var_dump($nid2);
//

if($hid2=="''"){$hid2='NULL';}

if($aid2=="''"){$aid2='NULL';}

if($gid2=="''"){$gid2='NULL';}
if($jid2=="''"){$jid2='NULL';}
if($nid2=="''"){$nid2='NULL';}
if($eid2=="''"){$eid2='NULL';}
if($bid2=="''"){$bid2='NULL';}
if($hid=="''"){$hid='NULL';}
if($aid=="''"){$aid='NULL';}
if($gid=="''"){$gid='NULL';}
if($jid=="''"){$jid='NULL';} 
if($nid=="''"){$nid='NULL';}
if($eid=="''"){$eid='NULL';}
if($bid=="''"){$bid='NULL';}

$c=$this->db->query("update customer set town='$twn', hID=$hid,gsID=$gid,aid=$aid,jID=$jid,nID=$nid,eID=$eid,bID=$bid,hID2=$hid2,gsID2=$gid2,aid2=$aid2,jID2=$jid2,nID2=$nid2,eID2=$eid2,bID2=$bid2 where Custid=$idn");
?>

			<div class="alert alert-success" role="alert">
				Customer update successful!
			</div>
	<div>
		<a href="./../modCustomer">
		<button class="btn btn-info mx-5"  type="button">
			<< Go Back
		</button>
		</a>
	</div>

</body>
</html>
