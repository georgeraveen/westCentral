<!DOCTYPE HTML>
<html>
    <head>
        <title>The West Central Pharma</title>
        <link href="../upload/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		
    </head>
    <body>
	<div class="container">
        <h1  class="mt-5" >Welcome</h1>
        <h2>Customer Outstanding Management System </h2>
		<h2>Modify Customer Details</h2>
	</div>
    <div class="container">
        Select a customer below to modify

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
	</div>
	<div class="mx-4">
        <div class="mt-4">
            <table class="table" id="reportTable1">
            <?php
                $vcust = $this->db->query("select * from customer order by custName");
				echo '<thead class="thead-dark">';
                echo "<tr><strong><th>Customer ID</th><th>Name</th><th>Town</th><th>hemas</th><th>ABC</th><th>GS</th><th>JLM</th><th>Neo</th><th>Emerchemie</th>
					<th>Baurs</th>
						<th>hemas-2</th><th>ABC-2</th><th>GS-2</th><th>JLM-2</th><th>Neo-2</th><th>Emerchemie-2</th><th>Baurs-2</th></strong></tr>"; 
                    echo '</thead>';
                foreach($vcust->result() as $row1){
                    //echo "";
                    //foreach ($cust->result() as $row){
                        echo "<tr>";
                        echo "<td>".$row1->Custid . "</td>";
                        echo "<td>".$row1->custName . "</td>";
                        echo "<td>".$row1->town. "</td>";
                        echo "<td>".$row1->hID . "</td>";
                        echo "<td>".$row1->aID . "</td>";
                        echo "<td>".$row1->gsID . "</td>";
                        echo "<td>".$row1->jID . "</td>";
                        echo "<td>".$row1->nID . "</td>";
						echo "<td>".$row1->eID . "</td>";
						echo "<td>".$row1->bID . "</td>";
                        echo "<td>".$row1->hID2 . "</td>";
                        echo "<td>".$row1->aID2 . "</td>";
                        echo "<td>".$row1->gsID2 . "</td>";
                        echo "<td>".$row1->jID2 . "</td>";
                        echo "<td>".$row1->nID2 . "</td>";
						echo "<td>".$row1->eID2 . "</td>";
						echo "<td>".$row1->bID2 . "</td>";
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
