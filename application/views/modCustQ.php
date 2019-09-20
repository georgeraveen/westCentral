<html>
<body>

customer registration details modified <?php 
$idn = $_POST["idN"]; 
$hid = $_POST["hid"]; 
$cid = $_POST["cpid"];
$gid = $_POST["gsid"];
$jid = $_POST["jid"];
$sid = $_POST["sid"];

$hid2 = $_POST["hid2"]; 
$cid2 = $_POST["cpid2"];
$gid2 = $_POST["gsid2"];
$jid2 = $_POST["jid2"];
$sid2 = $_POST["sid2"];
$twn = $_POST["town"];
echo $sid;
echo $sid2;
//sanofi doesnt have id number
if ($sid2!='NULL'){
    $sid2 = "\"".$sid2."\"";
}
if ($sid!='NULL'){
    $sid = "\"".$sid."\"";
}
//

if($hid2=="''"){$hid2='NULL';}

if($cid2=="''"){$cid2='NULL';}

if($gid2=="''"){$gid2='NULL';}
if($jid2=="''"){$jid2='NULL';}
if($sid2=="\"\""){$sid2='NULL';}
if($hid=="''"){$hid='NULL';}
if($cid=="''"){$cid='NULL';}
if($gid=="''"){$gid='NULL';}
if($jid=="''"){$jid='NULL';} 
if($sid=="\"\""){$sid='NULL';}

$c=$this->db->query("update customer set town='$twn', hID=$hid,gsID=$gid,cpID=$cid,jID=$jid,sID=$sid,hID2=$hid2,gsID2=$gid2,cpID2=$cid2,jID2=$jid2,sID2=$sid2 where Custid=$idn");
?>


</body>
</html>