
<?php

$areas = ["SEEDUWA","JA - ELA",	"GAMPAHA","KANDANA","DANKOTUWA","WENNAPPUWA","MARAWILA","WATTALA","MIRIGAMA","NEGOMBO",	"KOCHCHIKADE","MINUWANGODA","DIVULAPITIYA",	"NATTANDIYA"];

$areaTowns = array();
foreach($areas as $area){
	$areaTowns[$area] = array();
	if($area == 'SEEDUWA'){
		$areaTowns[$area] = ["Raddolugama",	"Averiwatta","Katunayake","Amandoluwa","Liyanagemulla","Kotugoda","Seeduwa"];
	}
	if($area == 'JA - ELA'){
		$areaTowns[$area] = [ "Pamunugama","Bopitiya","Kapuwatta","Ekala","Niwasipura","Uswatakeiyawa","Makewita","Thudella","Ja-ela"];
	}
	if($area == 'GAMPAHA'){
		$areaTowns[$area] = ["Udugampola","Gampaha"];
	}
	if($area == 'KANDANA'){
		$areaTowns[$area] = ["Rilaulla","Nagoda","Ganemulla","Polpithimukalana","Kandana"];
	}
	if($area == 'DANKOTUWA'){
		$areaTowns[$area] = ["Kottramulla","Kirimetiyana","Dankotuwa"];
	}
	if($area == 'WENNAPPUWA'){
		$areaTowns[$area] = ["Nainamadama","Lunuwila","Waikkala","Bolawatta","Wenappuwa"];
	}
	if($area == 'MARAWILA'){
		$areaTowns[$area] = ["Mudukatuwa","Katuneriya","Marawila"];
	}
	if($area == 'WATTALA'){
		$areaTowns[$area] = ["Ragama","Elakanda","Enderamulla","Hunupitiya","Hendala","Mahabage","Mabola","Welisara","Peliyagoda","Delpe","Peralanda","Hekiththa","Wattala"];
	}
	if($area == 'MIRIGAMA'){
		$areaTowns[$area] = ["Pallewela","Mirigama"];
	}
	if($area == 'NEGOMBO'){
		$areaTowns[$area] = ["Katana","Badalgama","Thalahena","Pitipana","Munnakara","Kandawala","Kurana","Kadolkale","Periyamulla","Akaragama","Negombo"];
	}
	if($area == 'KOCHCHIKADE'){
		$areaTowns[$area] = ["Kattuwa","Dalupotha","Kochchikade"];
	}
	if($area == 'MINUWANGODA'){
		$areaTowns[$area] = ["Andiambalama","Dagonna","Kimbulapitiya","Minuwangoda"];
	}
	if($area == 'DIVULAPITIYA'){
		$areaTowns[$area] = ["Marandahamula","Dunagaha","Divulapitiya"];
	}
	if($area == 'NATTANDIYA'){
		$areaTowns[$area] = ["Nattandiya"];
	}
}
$towns = array();
foreach($areaTowns as $area => $townList){
	$towns = array_merge($towns,$townList);
}


?>
