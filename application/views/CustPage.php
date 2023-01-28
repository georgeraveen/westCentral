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
									<th scope="col">hemas</th><th scope="col">cipla</th>
									<th scope="col">GS</th><th scope="col">JLM</th>
									<th scope="col">Sanofi</th><th scope="col">Emerchemie</th>
									<th scope="col">hemas-2</th>
									<th scope="col">cipla-2</th><th scope="col">GS-2</th>
									<th scope="col">JLM-2</th><th scope="col">Sanofi-2</th>
									<th scope="col">Emerchemie-2</th>
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
                        
                        
                        $x=$row1->cpID;
                        $a = $this->db->query("select  * from cipla where cID = \"$x\"");
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

                        echo "<td>".$row1->sID . "</td>";
                        echo "<td>".$row1->eID . "</td>";

                        $x=$row1->hID2;
                        $a = $this->db->query("select  * from hemas where hID = \"$x\"");
                        foreach($a->result() as $rz){
                            echo "<td>". $rz->custName ."-".$rz->town. "</td>";
                        }
                        
                        
                        $x=$row1->cpID2;
                        $a = $this->db->query("select  * from cipla where cID = \"$x\"");
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
                        
                        echo "<td>".$row1->sID2 . "</td>";
						echo "<td>".$row1->eID2 . "</td>";
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
