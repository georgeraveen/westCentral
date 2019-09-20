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
        <h2>details of customers</h2>
        hello
    <div>
 
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
