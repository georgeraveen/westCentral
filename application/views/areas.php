
<?php

$towns = ['Negombo','Katana','Kochikade','Raddolugama','Katunayake','Seeduwa','Averiwatta','Bopitiya','Ja-Ela',
		'Kapuwatte','Ekala','Pamunugama','Kandana','Enderamulla','Hunupitiya','Hendala','Ragama','Welisara',
		'Elakande','Mabole','Mahabage','Wattala','Peliyagoda','Divulapitiya','Minuwangoda'];
$areas = ['Negombo','Katana','Seeduwa','Peliyagoda'];

$areaTowns = array();
foreach($areas as $area){
	$areaTowns[$area] = array();
	if($area == 'Negombo'){
		$areaTowns[$area] = ['Negombo','Katana','Kochikade','Raddolugama','Katunayake'];
	}
	if($area == 'Katana'){
		$areaTowns[$area] = ['Katana','Seeduwa','Averiwatta','Bopitiya','Ja-Ela'];
	}
	if($area == 'Seeduwa'){
		$areaTowns[$area] = ['Seeduwa','Kapuwatte','Ekala','Pamunugama','Kandana'];
	}
	if($area == 'Peliyagoda'){
		$areaTowns[$area] = ['Peliyagoda','Enderamulla','Hunupitiya','Hendala','Ragama'];
	}
}


?>
