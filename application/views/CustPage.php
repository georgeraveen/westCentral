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
        <h2>View Customers </h2>
	</div>
	<div>
    <div>
        <div>
            <table  id="reportTable1"  class="table">
            <?php
                $vcust = $this->db->query("select * from customer order by custName");
				echo '<thead class="thead-dark">';
                echo '<tr><strong><th  scope="col">Customer ID</th>
									<th  scope="col">Name</th><th scope="col">Town</th>
									<th scope="col">hemas</th><th scope="col">abc</th>
									<th scope="col">GS</th><th scope="col">JLM</th>
									<th scope="col">neo</th><th scope="col">Emerchemie</th>
									<th scope="col">baur</th>
									<th scope="col">hemas-2</th>
									<th scope="col">abc-2</th><th scope="col">GS-2</th>
									<th scope="col">JLM-2</th><th scope="col">neo-2</th>
									<th scope="col">Emerchemie-2</th><th scope="col">baur-2</th>
									</strong></tr>'; 
                echo '</thead>';
                foreach($vcust->result() as $row1){
                    //echo "";
                    //foreach ($cust->result() as $row){
                        echo '<tr scope="row">';
                        echo "<td>".$row1->Custid . "</td>";
                        echo "<td>".$row1->custName . "</td>";
                        echo "<td>".$row1->town. "</td>";

                        $x=$row1->hID;
                        $a = $this->db->query("select  * from hemas where hID = \"$x\"");
                        foreach($a->result() as $rz){
                            echo "<td>". $rz->custName ."-".$rz->town. "</td>";
                        }
                        
                        
                        $x=$row1->aID;
                        $a = $this->db->query("select  * from abc where aID = \"$x\"");
                        foreach($a->result() as $rz){
                            echo "<td>". $rz->custName ."-".$rz->town. "</td>";
                        }
                        
                        $x=$row1->gsID;
                        $a = $this->db->query("select  * from gs where gID = \"$x\"");
                        foreach($a->result() as $rz){
                            echo "<td>". $rz->custName ."-".$rz->town. "</td>";
                        }

                        $x=$row1->jID;
                        $a = $this->db->query("select  * from jlm where jID = \"$x\"");
                        foreach($a->result() as $rz){
                            echo "<td>". $rz->custName ."-".$rz->town. "</td>";
                        }

                        echo "<td>".$row1->nID . "</td>";
						
                        echo "<td>".$row1->eID . "</td>";
						$x=$row1->bID;
                        $a = $this->db->query("select  * from baur where bID = \"$x\"");
                        foreach($a->result() as $rz){
                            echo "<td>". $rz->custName ."-".$rz->town. "</td>";
                        }

                        $x=$row1->hID2;
                        $a = $this->db->query("select  * from hemas where hID = \"$x\"");
                        foreach($a->result() as $rz){
                            echo "<td>". $rz->custName ."-".$rz->town. "</td>";
                        }
                        
                        
                        $x=$row1->aID2;
                        $a = $this->db->query("select  * from abc where aID = \"$x\"");
                        foreach($a->result() as $rz){
                            echo "<td>". $rz->custName ."-".$rz->town. "</td>";
                        }
                        
                        $x=$row1->gsID2;
                        $a = $this->db->query("select  * from gs where gID = \"$x\"");
                        foreach($a->result() as $rz){
                            echo "<td>". $rz->custName ."-".$rz->town. "</td>";
                        }

                        $x=$row1->jID2;
                        $a = $this->db->query("select  * from jlm where jID = \"$x\"");
                        foreach($a->result() as $rz){
                            echo "<td>". $rz->custName ."-".$rz->town. "</td>";
                        }
                        
                        echo "<td>".$row1->nID2 . "</td>";
						echo "<td>".$row1->eID2 . "</td>";
						$x=$row1->bID2;
						$a = $this->db->query("select  * from baur where bID = \"$x\"");
						foreach($a->result() as $rz){
							echo "<td>". $rz->custName ."-".$rz->town. "</td>";
						}
						
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
