<!DOCTYPE HTML>
<html>
    <head>
        <title>The West Central Pharma</title>
        <link href="../../upload/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
    
    

    <script>
        function exportTableToExcel(tableID, filename = ''){
            var downloadLink;
            var dataType = 'application/vnd.ms-excel';
            var tableSelect = document.getElementById(tableID);
            var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
            
            // Specify file name
            filename = filename?filename+'.xls':'excel_data.xls';
            
            // Create download link element
            downloadLink = document.createElement("a");
            
            document.body.appendChild(downloadLink);
            
            if(navigator.msSaveOrOpenBlob){
                var blob = new Blob(['\ufeff', tableHTML], {
                    type: dataType
                });
                navigator.msSaveOrOpenBlob( blob, filename);
            }else{
                // Create a link to the file
                downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
            
                // Setting the file name
                downloadLink.download = filename;
                
                //triggering the function
                downloadLink.click();
            }
        }
    </script>
    </head>
    <?php
        $mult=isset($_POST['mtown']) ? $_POST['mtown'] : array();
		$areas=isset($_POST['mArea']) ? $_POST['mArea'] : array() ;
		
		foreach($areas as $area){
			$twns = explode(".",$area);
			$mult = array_merge($mult,$twns);
		}
		// var_dump($areas);
		// var_dump($mult);
        $ageOut = $_POST["age"];
        $ty=$_POST["ctype"];
    ?>
    <body>
    <div class="container mt-5">
        <h2 class="mt-5">Multi town outstanding report</h2>
        
    
	    <button  class="btn btn-info" onclick="exportTableToExcel('reportTable')">Download Data To Excel File</button>
		<p class="mt-2">
			<?php
				foreach($mult as $m){
					echo $m." ";
				}
			?>
		</p>
    <div>

    <br>
    <div id="reportTableclass">
        
        <table border="1" id="reportTable">
            <?php
            $totalreport=0;
            for($x = 0; $x < count($mult); $x++) {

                echo "<tr><th colspan = \"5\">".$mult[$x]."</th></tr>";
                $totalTown=0;
                
                $cust = $this->db->query("select * from customer where town = $mult[$x] and type='$ty' order by custName");
                foreach($cust->result() as $row){
                    echo "<tr><th colspan = \"5\">";
                    echo $row->Custid."-".$row->custName."-".$mult[$x];
                    echo "</th></tr>";
                    $totalCustomer=0;
					//hemas
					
					if($row->hID!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from hemasoutupload where hID = \"$row->hID\" and age>=$ageOut order by date");
						if($cust3->result()){
							$cust2 = $this->db->query("select hID,custName,town from hemas where hID='$row->hID'");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(Hemas) - ".$row2->hID."--".$row2->custName."--".$row2->town."</th></tr>";
							}
							echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							
							foreach($cust3->result() as $row3){

								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\" data-cell-type=\"number\" data-cell-format-enum=\"2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}
				
					//abc
				
					if($row->aID!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from abcoutupload where aID='$row->aID'and age>=$ageOut order by date");
							
						if($cust3->result()){
							$cust2 = $this->db->query("select aID,custName,town from abc where aID='$row->aID'");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(Abc) - ".$row2->aID."</th></tr>";
							}
							//echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							foreach($cust3->result() as $row3){
								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}
				
					//gs
				
					if($row->gsID!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from gsoutupload where gID='$row->gsID'and age>=$ageOut order by date");
						if($cust3->result()){
							$cust2 = $this->db->query("select gID,custName,town from gs where gID='$row->gsID'");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(George Stuwert) - ".$row2->gID."--".$row2->custName."--".$row2->town."</th></tr>";
							}
							//echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							foreach($cust3->result() as $row3){
								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}
				
					//jlm
				
					if($row->jID!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from jloutupload where jID='$row->jID'and age>=$ageOut order by date");
						if($cust3->result()){
							$cust2 = $this->db->query("select jID,custName,town from jlm where jID='$row->jID'");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(J.L.Morison) - ".$row2->jID."--".$row2->custName."--".$row2->town."</th></tr>";
							}
							//echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							foreach($cust3->result() as $row3){
								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}
					//neo
				
					if($row->nID!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from neooutupload where nID=\"$row->nID\"and age>=$ageOut order by date");              
						if($cust3->result()){
							$cust2 = $this->db->query("select nID,custName,town from neo where nID=\"$row->nID\"");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(Neo) - ".$row2->nID."--".$row2->town."</th></tr>";
							}
							//echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							foreach($cust3->result() as $row3){
								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}
					//emerchemie
					if($row->eID!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from emoutupload where eID=\"$row->eID\"and age>=$ageOut order by date");              
						if($cust3->result()){
							$cust2 = $this->db->query("select eID,custName,town from emerchemie where eID=\"$row->eID\"");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(Emerchemie) - ".$row2->eID."--".$row2->town."</th></tr>";
							}
							//echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							foreach($cust3->result() as $row3){
								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}

					//baur
					if($row->bID!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from bauroutupload where bID=\"$row->bID\"and age>=$ageOut order by date");
						if($cust3->result()){
							$cust2 = $this->db->query("select bID,custName,town from baur where bID=\"$row->bID\"");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(Baur) - ".$row2->bID."--".$row2->town."</th></tr>";
							}
							//echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							foreach($cust3->result() as $row3){
								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}

					//hemas2
					
					if($row->hID2!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from hemasoutupload where hID = \"$row->hID2\" and age>=$ageOut order by date");
						if($cust3->result()){
							$cust2 = $this->db->query("select hID,custName,town from hemas where hID='$row->hID2'");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(Hemas) - ".$row2->hID."--".$row2->custName."--".$row2->town."</th></tr>";
							}
							//echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							
							foreach($cust3->result() as $row3){

								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\" data-cell-type=\"number\" data-cell-format-enum=\"2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}
				
					//abc2
				
					if($row->aID2!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from abcoutupload where aID='$row->aID2'and age>=$ageOut order by date");
							
						if($cust3->result()){
							$cust2 = $this->db->query("select aID,custName,town from abc where aID='$row->aID2'");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(Abc) - ".$row2->aID."--".$row2->custName."--".$row2->town."</th></tr>";
							}
							//echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							foreach($cust3->result() as $row3){
								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}
				
					//gs2
				
					if($row->gsID2!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from gsoutupload where gID='$row->gsID2'and age>=$ageOut order by date");
						if($cust3->result()){
							$cust2 = $this->db->query("select gID,custName,town from gs where gID='$row->gsID2'");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(George Stuwert) - ".$row2->gID."--".$row2->custName."--".$row2->town."</th></tr>";
							}
							//echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							foreach($cust3->result() as $row3){
								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}
				
					//jlm2
				
					if($row->jID2!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from jloutupload where jID='$row->jID2'and age>=$ageOut order by date");
						if($cust3->result()){
							$cust2 = $this->db->query("select jID,custName,town from jlm where jID='$row->jID2'");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(J.L.Morison) - ".$row2->jID."--".$row2->custName."--".$row2->town."</th></tr>";
							}
							//echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							foreach($cust3->result() as $row3){
								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}
					//neo2
				
					if($row->nID2!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from neooutupload where nID=\"$row->nID2\"and age>=$ageOut order by date");              
						if($cust3->result()){
							$cust2 = $this->db->query("select nID,custName,town from neo where nID=\"$row->nID2\"");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(Neo) - ".$row2->nID."--".$row2->town."</th></tr>";
							}
							//echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							foreach($cust3->result() as $row3){
								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}

					//emerchemie2
					if($row->eID2!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from emoutupload where eID=\"$row->eID2\"and age>=$ageOut order by date");              
						if($cust3->result()){
							$cust2 = $this->db->query("select eID,custName,town from emerchemie where eID=\"$row->eID2\"");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(Emerchemie) - ".$row2->eID."--".$row2->town."</th></tr>";
							}
							//echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							foreach($cust3->result() as $row3){
								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}

					//baur2
					if($row->bID2!=''){
						$cust3 = $this->db->query("select inv,date,age,amount,balAmount from bauroutupload where bID=\"$row->bID2\"and age>=$ageOut order by date");
						if($cust3->result()){
							$cust2 = $this->db->query("select bID,custName,town from baur where bID=\"$row->bID2\"");
							foreach($cust2->result() as $row2){
								echo "<tr><th id=\"tr2\" colspan = \"5\">(Baur) - ".$row2->bID."--".$row2->town."</th></tr>";
							}
							//echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
							$subtotal=0;
							foreach($cust3->result() as $row3){
								echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
								$subtotal+=$row3->balAmount;
							}
							$totalCustomer+=$subtotal;
							// echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
						}
					}
                    
                    echo "<tr><th colspan=\"4\">Grand Total for customer</th><th  id=\"tc3\">". sprintf("%.2f",$totalCustomer) ."</th></tr>";
                    //echo "<tr><td colspan =\"5\">  </td></tr>";
                    $totalTown+=$totalCustomer;
                }
                
                




                echo "<tr><th colspan=\"4\">Grand Total for Town</th><th  id=\"tc3\">". sprintf("%.2f",$totalTown) ."</th></tr>";
                echo "<tr><td colspan =\"5\">  </td></tr>";
                $totalreport+=$totalTown;
            }
            echo "<tr><th colspan=\"4\">Grand Total for report</th><th  id=\"tc3\">". sprintf("%.2f",$totalreport) ."</th></tr><tr></tr>";
            echo "<tr><td colspan =\"5\">  </td></tr>";       
           

            ?>
        </table>

    </div>
    

    </body>
    </html>
        