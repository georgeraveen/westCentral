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
        $singleCust= $_POST["vcust"];
        $ageOut = $_POST["age"];
        
        
    ?>
    <body>
    <div class="header">
        <h1>welcome</h1>
        <h2>customer outstanding report</h2>
        
    <div>
    single customer wise
    <br>

    <button onclick="exportTableToExcel('reportTable')">Export Table Data To Excel File</button>
   

    <br>


    

    <div id="reportTableclass">
        
        <table border="1" id="reportTable">
        <tr>
            <th colspan="5"><?php
                $cust = $this->db->query("select custName from customer where Custid = $singleCust ");
                foreach($cust->result() as $row){
                    echo $row->custName;
                }
                ?>
            </th>
        </tr>
        <?php 
        $totalCustomer=0;
        //hemas
        $cust = $this->db->query("select * from customer where Custid = $singleCust");

        foreach($cust->result() as $row){
            //hemas
            
            if($row->hID!=''){
                $cust2 = $this->db->query("select hID,custName,town from hemas where hID='$row->hID'");
                foreach($cust2->result() as $row2){
                    echo "<tr><th id=\"tr2\" colspan = \"5\">(Hemas) - ".$row2->hID."--".$row2->custName."--".$row2->town."</th></tr>";
                }
                echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
                $cust3 = $this->db->query("select inv,date,age,amount,balAmount from hemasoutupload where hID = \"$row->hID\" and age>=$ageOut order by date");
                $subtotal=0;
                foreach($cust3->result() as $row3){
                    echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\" data-cell-type=\"number\" data-cell-format-enum=\"2\">". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
                    $subtotal+=$row3->balAmount;
                }
                $totalCustomer+=$subtotal;
                echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
            }
        
            //cipla
        
            if($row->cpID!=''){
                $cust2 = $this->db->query("select cID,custName,town from cipla where cID='$row->cpID'");
                foreach($cust2->result() as $row2){
                    echo "<tr><th id=\"tr2\" colspan = \"5\">(Cipla) - ".$row2->cID."--".$row2->custName."--".$row2->town."</th></tr>";
                }
                //echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
                $cust2 = $this->db->query("select inv,date,age,amount,balAmount from ciplaoutupload where cID='$row->cpID'and age>=$ageOut order by date");
                $subtotal=0;
                foreach($cust2->result() as $row2){
                    echo "<tr><td>".$row2->inv."</td><td>".$row2->date."</td><td>".$row2->age."</td><td id=\"tc2\">". sprintf("%.2f",$row2->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row2->balAmount)."</td></tr>";
                    $subtotal+=$row2->balAmount;
                }
                $totalCustomer+=$subtotal;
                echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
            }
        
            //gs
        
            if($row->gsID!=''){
                $cust2 = $this->db->query("select gID,custName,town from gs where gID='$row->gsID'");
                foreach($cust2->result() as $row2){
                    echo "<tr><th id=\"tr2\" colspan = \"5\">(George Steuart) - ".$row2->gID."--".$row2->custName."--".$row2->town."</th></tr>";
                }
                //echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
                $cust2 = $this->db->query("select inv,date,age,amount,balAmount from gsoutupload where gID='$row->gsID'and age>=$ageOut order by date");
                $subtotal=0;
                foreach($cust2->result() as $row2){
                    echo "<tr><td>".$row2->inv."</td><td>".$row2->date."</td><td>".$row2->age."</td><td id=\"tc2\">". sprintf("%.2f",$row2->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row2->balAmount)."</td></tr>";
                    $subtotal+=$row2->balAmount;
                }
                $totalCustomer+=$subtotal;
                echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
            }
        
            //jlm
        
            if($row->jID!=''){
                $cust2 = $this->db->query("select jID,custName,town from jlm where jID='$row->jID'");
                foreach($cust2->result() as $row2){
                    echo "<tr><th id=\"tr2\" colspan = \"5\">(J.L.Morison) - ".$row2->jID."--".$row2->custName."--".$row2->town."</th></tr>";
                }
                //echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
                $cust2 = $this->db->query("select inv,date,age,amount,balAmount from jloutupload where jID='$row->jID'and age>=$ageOut order by date");
                $subtotal=0;
                foreach($cust2->result() as $row2){
                    echo "<tr><td>".$row2->inv."</td><td>".$row2->date."</td><td>".$row2->age."</td><td id=\"tc2\">". sprintf("%.2f",$row2->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row2->balAmount)."</td></tr>";
                    $subtotal+=$row2->balAmount;
                }
                $totalCustomer+=$subtotal;
                echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
            }
            //sanofi
        
            if($row->sID!=''){
                $cust2 = $this->db->query("select sID,custName,town from sanofi where sID=\"$row->sID\"");
                foreach($cust2->result() as $row2){
                    echo "<tr><th id=\"tr2\" colspan = \"5\">(Sanofi) - ".$row2->sID."--".$row2->town."</th></tr>";
                }
                //echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
                $cust2 = $this->db->query("select inv,date,age,amount,balAmount from sanoutupload where sID=\"$row->sID\"and age>=$ageOut order by date");
                $subtotal=0;
                foreach($cust2->result() as $row2){
                    echo "<tr><td>".$row2->inv."</td><td>".$row2->date."</td><td>".$row2->age."</td><td id=\"tc2\">". sprintf("%.2f",$row2->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row2->balAmount)."</td></tr>";
                    $subtotal+=$row2->balAmount;
                }
                $totalCustomer+=$subtotal;
                echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
            }
            //hemas2
            
            if($row->hID2!=''){
                $cust2 = $this->db->query("select hID,custName,town from hemas where hID='$row->hID2'");
                foreach($cust2->result() as $row2){
                    echo "<tr><th id=\"tr2\" colspan = \"5\">(Hemas) - ".$row2->hID."--".$row2->custName."--".$row2->town."</th></tr>";
                }
                //echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
                $cust3 = $this->db->query("select inv,date,age,amount,balAmount from hemasoutupload where hID = \"$row->hID2\" and age>=$ageOut order by date");
                $subtotal=0;
                foreach($cust3->result() as $row3){
                    echo "<tr><td>".$row3->inv."</td><td>".$row3->date."</td><td>".$row3->age."</td><td id=\"tc2\" >". sprintf("%.2f",$row3->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row3->balAmount)."</td></tr>";
                    $subtotal+=$row3->balAmount;
                }
                $totalCustomer+=$subtotal;
                echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
            }
        
            //cipla2
        
            if($row->cpID2!=''){
                $cust2 = $this->db->query("select cID,custName,town from cipla where cID='$row->cpID2'");
                foreach($cust2->result() as $row2){
                    echo "<tr><th id=\"tr2\" colspan = \"5\">(Cipla) - ".$row2->cID."--".$row2->custName."--".$row2->town."</th></tr>";
                }
                //echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
                $cust2 = $this->db->query("select inv,date,age,amount,balAmount from ciplaoutupload where cID='$row->cpID2'and age>=$ageOut order by date");
                $subtotal=0;
                foreach($cust2->result() as $row2){
                    echo "<tr><td>".$row2->inv."</td><td>".$row2->date."</td><td>".$row2->age."</td><td id=\"tc2\">". sprintf("%.2f",$row2->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row2->balAmount)."</td></tr>";
                    $subtotal+=$row2->balAmount;
                }
                $totalCustomer+=$subtotal;
                echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
            }
        
            //gs2
        
            if($row->gsID2!=''){
                $cust2 = $this->db->query("select gID,custName,town from gs where gID='$row->gsID2'");
                foreach($cust2->result() as $row2){
                    echo "<tr><th id=\"tr2\" colspan = \"5\">(George Steuart) - ".$row2->gID."--".$row2->custName."--".$row2->town."</th></tr>";
                }
                //echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
                $cust2 = $this->db->query("select inv,date,age,amount,balAmount from gsoutupload where gID='$row->gsID2'and age>=$ageOut order by date");
                $subtotal=0;
                foreach($cust2->result() as $row2){
                    echo "<tr><td>".$row2->inv."</td><td>".$row2->date."</td><td>".$row2->age."</td><td id=\"tc2\">". sprintf("%.2f",$row2->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row2->balAmount)."</td></tr>";
                    $subtotal+=$row2->balAmount;
                }
                $totalCustomer+=$subtotal;
                echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
            }
        
            //jlm2
        
            if($row->jID2!=''){
                $cust2 = $this->db->query("select jID,custName,town from jlm where jID='$row->jID2'");
                foreach($cust2->result() as $row2){
                    echo "<tr><th id=\"tr2\" colspan = \"5\">(J.L.Morison) - ".$row2->jID."--".$row2->custName."--".$row2->town."</th></tr>";
                }
                //echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
                $cust2 = $this->db->query("select inv,date,age,amount,balAmount from jloutupload where jID='$row->jID2'and age>=$ageOut order by date");
                $subtotal=0;
                foreach($cust2->result() as $row2){
                    echo "<tr><td>".$row2->inv."</td><td>".$row2->date."</td><td>".$row2->age."</td><td id=\"tc2\">". sprintf("%.2f",$row2->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row2->balAmount)."</td></tr>";
                    $subtotal+=$row2->balAmount;
                }
                $totalCustomer+=$subtotal;
                echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
            }
            //sanofi2
        
            if($row->sID2!=''){
                $cust2 = $this->db->query("select sID,custName,town from sanofi where sID=\"$row->sID2\"");
                foreach($cust2->result() as $row2){
                    echo "<tr><th id=\"tr2\" colspan = \"5\">(Sanofi) - ".$row2->sID."--".$row2->town."</th></tr>";
                }
                //echo "<tr><th>Invoice No</th><th>Date</th><th>Age</th><th>Amount</th><th>Outstanding Amount</th></tr>";
                $cust2 = $this->db->query("select inv,date,age,amount,balAmount from sanoutupload where sID=\"$row->sID2\"and age>=$ageOut order by date");
                $subtotal=0;
                foreach($cust2->result() as $row2){
                    echo "<tr><td>".$row2->inv."</td><td>".$row2->date."</td><td>".$row2->age."</td><td id=\"tc2\">". sprintf("%.2f",$row2->amount)."</td><td id=\"tc2\">". sprintf("%.2f",$row2->balAmount)."</td></tr>";
                    $subtotal+=$row2->balAmount;
                }
                $totalCustomer+=$subtotal;
                echo "<tr><th colspan = \"4\">SubTotal</th><th id=\"tc2\">". sprintf("%.2f",$subtotal)."</th></tr>";
            }
        }
        echo "<tr><th colspan=\"4\">Grand Total for customer</th><th  id=\"tc3\">". sprintf("%.2f",$totalCustomer) ."</th></tr>";
        ?>
        </table>

    </div>

    </body>
    </html>
        