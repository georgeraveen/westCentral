<!DOCTYPE HTML>
<html>
    <head>
        <title>The West Central Pharma</title>
        <link href="../upload/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		
    </head>
    <body>
    <div class="header">
        <h1>welcome</h1>
        <h2>Modify a customer</h2>
        hello
    <div>
        select a customer below to modify

        <div>
        <form action = "./modCustomer/modCustP"  method="post">
            <select name="custid">
                <?php
                    echo "<option value=NULL>select customer </option>";
                    $cust = $this->db->query("select Custid,custName,town from customer order by custName");
                   
                    foreach ($cust->result() as $row){
                        $cc = $row->Custid;
                        echo "<option value=\"'" . $cc . "'\">". $row->custName." - ". $row->town ." - ".$cc  ."</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Next->modify">
        </form>
        </div>


        <div>
            <table  id="reportTable1">
            <?php
                $vcust = $this->db->query("select * from customer order by custName");
                echo "<tr><strong><th>Customer ID</th><th>Name</th><th>Town</th><th>hemas</th><th>cipla</th><th>GS</th><th>JLM</th><th>Sanofi</th><th>hemas-2</th><th>cipla-2</th><th>GS-2</th><th>JLM-2</th><th>Sanofi-2</th></strong></tr>"; 
                    
                foreach($vcust->result() as $row1){
                    //echo "";
                    //foreach ($cust->result() as $row){
                        echo "<tr>";
                        echo "<td>".$row1->Custid . "</td>";
                        echo "<td>".$row1->custName . "</td>";
                        echo "<td>".$row1->town. "</td>";
                        echo "<td>".$row1->hID . "</td>";
                        echo "<td>".$row1->cpID . "</td>";
                        echo "<td>".$row1->gsID . "</td>";
                        echo "<td>".$row1->jID . "</td>";
                        echo "<td>".$row1->sID . "</td>";
                        echo "<td>".$row1->hID2 . "</td>";
                        echo "<td>".$row1->cpID2 . "</td>";
                        echo "<td>".$row1->gsID2 . "</td>";
                        echo "<td>".$row1->jID2 . "</td>";
                        echo "<td>".$row1->sID2 . "</td>";
                        echo "</tr>";
            
                    //}
                
                

                }
            ?>
            </table>
        </div>
    </div>
    </div>
    </body>
</html>
