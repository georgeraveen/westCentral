<!DOCTYPE HTML>
<html>
    <head>
        <title>The West Central Pharma</title>
        <link href="../../upload/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#hBlock").hide();
                $("#cBlock").hide();
                $("#gBlock").hide();
                $("#jBlock").hide();
                $("#sBlock").hide();
                $("#hBlock2").hide();
                $("#cBlock2").hide();
                $("#gBlock2").hide();
                $("#jBlock2").hide();
                $("#sBlock2").hide();
                $("#selectTwn").hide();
                
                $("#tshow").click(function(){
                    $("#selectTwn").show();
                });
                $("#hshow").click(function(){
                    $("#hBlock").hide();
                    $("#cBlock").hide();
                    $("#gBlock").hide();
                    $("#jBlock").hide();
                    $("#sBlock").hide();
                    $("#hBlock2").hide();
                    $("#cBlock2").hide();
                    $("#gBlock2").hide();
                    $("#jBlock2").hide();
                    $("#sBlock2").hide();
                    $("#hBlock").toggle();
                   
                });
                $("#cshow").click(function(){
                    $("#hBlock").hide();
                    $("#cBlock").hide();
                    $("#gBlock").hide();
                    $("#jBlock").hide();
                    $("#sBlock").hide();
                    $("#hBlock2").hide();
                    $("#cBlock2").hide();
                    $("#gBlock2").hide();
                    $("#jBlock2").hide();
                    $("#sBlock2").hide();
                    $("#cBlock").toggle();
                });
                $("#gshow").click(function(){
                    $("#hBlock").hide();
                    $("#cBlock").hide();
                    $("#gBlock").hide();
                    $("#jBlock").hide();
                    $("#sBlock").hide();
                    $("#hBlock2").hide();
                    $("#cBlock2").hide();
                    $("#gBlock2").hide();
                    $("#jBlock2").hide();
                    $("#sBlock2").hide();
                    $("#gBlock").toggle();
                });
                $("#jshow").click(function(){
                    $("#hBlock").hide();
                    $("#cBlock").hide();
                    $("#gBlock").hide();
                    $("#jBlock").hide();
                    $("#sBlock").hide();
                    $("#hBlock2").hide();
                    $("#cBlock2").hide();
                    $("#gBlock2").hide();
                    $("#jBlock2").hide();
                    $("#sBlock2").hide();
                    $("#jBlock").toggle();
                });
                $("#sshow").click(function(){
                    $("#hBlock").hide();
                    $("#cBlock").hide();
                    $("#gBlock").hide();
                    $("#jBlock").hide();
                    $("#sBlock").hide();
                    $("#hBlock2").hide();
                    $("#cBlock2").hide();
                    $("#gBlock2").hide();
                    $("#jBlock2").hide();
                    $("#sBlock2").hide();
                    $("#sBlock").toggle();
                });
                $("#hshow2").click(function(){
                    $("#hBlock").hide();
                    $("#cBlock").hide();
                    $("#gBlock").hide();
                    $("#jBlock").hide();
                    $("#sBlock").hide();
                    $("#hBlock2").hide();
                    $("#cBlock2").hide();
                    $("#gBlock2").hide();
                    $("#jBlock2").hide();
                    $("#sBlock2").hide();
                    $("#hBlock2").toggle();
                    
                });
                $("#cshow2").click(function(){
                    $("#hBlock").hide();
                    $("#cBlock").hide();
                    $("#gBlock").hide();
                    $("#jBlock").hide();
                    $("#sBlock").hide();
                    $("#hBlock2").hide();
                    $("#cBlock2").hide();
                    $("#gBlock2").hide();
                    $("#jBlock2").hide();
                    $("#sBlock2").hide();
                    $("#cBlock2").toggle();
                });
                $("#gshow2").click(function(){
                    $("#hBlock").hide();
                    $("#cBlock").hide();
                    $("#gBlock").hide();
                    $("#jBlock").hide();
                    $("#sBlock").hide();
                    $("#hBlock2").hide();
                    $("#cBlock2").hide();
                    $("#gBlock2").hide();
                    $("#jBlock2").hide();
                    $("#sBlock2").hide();
                    $("#gBlock2").toggle();
                });
                $("#jshow2").click(function(){
                    $("#hBlock").hide();
                    $("#cBlock").hide();
                    $("#gBlock").hide();
                    $("#jBlock").hide();
                    $("#sBlock").hide();
                    $("#hBlock2").hide();
                    $("#cBlock2").hide();
                    $("#gBlock2").hide();
                    $("#jBlock2").hide();
                    $("#sBlock2").hide();
                    $("#jBlock2").toggle();
                });
                $("#sshow2").click(function(){
                    $("#hBlock").hide();
                    $("#cBlock").hide();
                    $("#gBlock").hide();
                    $("#jBlock").hide();
                    $("#sBlock").hide();
                    $("#hBlock2").hide();
                    $("#cBlock2").hide();
                    $("#gBlock2").hide();
                    $("#jBlock2").hide();
                    $("#sBlock2").hide();
                    $("#sBlock2").toggle();
                });
                $("#selectH").change(function(){
                    $selectedCust = $("#selectH option:selected").val();
                    $("#HID").val($selectedCust);
                });
                $("#selectC").change(function(){
                    $selectedCust = $("#selectC option:selected").val();
                    $("#CPID").val($selectedCust);
                });
                $("#selectG").change(function(){
                    $selectedCust = $("#selectG option:selected").val();
                    $("#GSID").val($selectedCust);
                });
                $("#selectJ").change(function(){
                    $selectedCust = $("#selectJ option:selected").val();
                    $("#JID").val($selectedCust);
                });
                $("#selectS").change(function(){
                    $selectedCust = $("#selectS option:selected").val();
                    $("#SID").val($selectedCust);
                });
                $("#selectH2").change(function(){
                    $selectedCust = $("#selectH2 option:selected").val();
                    $("#HID2").val($selectedCust);
                });
                $("#selectC2").change(function(){
                    $selectedCust = $("#selectC2 option:selected").val();
                    $("#CPID2").val($selectedCust);
                });
                $("#selectG2").change(function(){
                    $selectedCust = $("#selectG2 option:selected").val();
                    $("#GSID2").val($selectedCust);
                });
                $("#selectJ2").change(function(){
                    $selectedCust = $("#selectJ2 option:selected").val();
                    $("#JID2").val($selectedCust);
                });
                $("#selectS2").change(function(){
                    $selectedCust = $("#selectS2 option:selected").val();
                    $("#SID2").val($selectedCust);
                });
                $("#selectTwn").change(function(){
                    $selectedTwn = $("#selectTwn option:selected").val();
                    $("#TWN").val($selectedTwn);
                });
                
            });
        </script>
    </head>
    <body>
    <?php
    $mcust=$_POST["custid"];
    
    ?>
    <div class="header">
        <h1>welcome</h1>
        <h2>Modify a customer</h2>
        hello
    <div>
        
        <div>
            <form action = "./modCustQ"  method="post">
            <table  id="reportTable" >
            <?php
                $vcust = $this->db->query("select * from customer where Custid=$mcust order by custName");
                echo "<tr><strong><th>Customer ID</th><th>Name</th><th>Town</th><th>hemas</th><th>cipla</th><th>GS</th><th>JLM</th><th>Sanofi</th><th>hemas-2</th><th>cipla-2</th><th>GS-2</th><th>JLM-2</th><th>Sanofi-2</th></strong></tr>"; 
                    
                foreach($vcust->result() as $row1){
                        echo "<tr>";
                        echo "<td><input type=\"text\" id=\"ID\" name=\"idN\" value=\"".($row1->Custid). "\" readonly</td>";
                        echo "<td>".$row1->custName . "</td>";
                        echo "<td><input type=\"text\" id=\"TWN\" name=\"town\" value=\"".($twn=$row1->town). "\" readonly></td>";
                        echo "<td><input type=\"text\" id=\"HID\" name=\"hid\" value=\"'".($hid=$row1->hID) . "'\" readonly></td>";
                        echo "<td><input type=\"text\" id=\"CPID\" name=\"cpid\" value=\"'".($cid=$row1->cpID) . "'\" readonly></td>";
                        echo "<td><input type=\"text\" id=\"GSID\" name=\"gsid\" value=\"'".($gid=$row1->gsID) . "'\" readonly></td>";
                        echo "<td><input type=\"text\" id=\"JID\" name=\"jid\" value=\"'".($jid=$row1->jID) . "'\" readonly></td>";
                        echo "<td><input type=\"text\" id=\"SID\" name=\"sid\" value=\"".($sid=$row1->sID) . "\" readonly></td>";//
                        echo "<td><input type=\"text\" id=\"HID2\" name=\"hid2\" value=\"'".($hid2=$row1->hID2) . "'\" readonly></td>";
                        echo "<td><input type=\"text\" id=\"CPID2\" name=\"cpid2\" value=\"'".($cid2=$row1->cpID2) . "'\" readonly></td>";
                        echo "<td><input type=\"text\" id=\"GSID2\" name=\"gsid2\" value=\"'".($gid2=$row1->gsID2) . "'\" readonly></td>";
                        echo "<td><input type=\"text\" id=\"JID2\" name=\"jid2\" value=\"'".($jid2=$row1->jID2) . "'\" readonly></td>";
                        echo "<td><input type=\"text\" id=\"SID2\" name=\"sid2\" value=\"".($sid2=$row1->sID2) . "\" readonly></td>";//
                        echo "</tr>";
                }
            ?>
            <tr><td colspan="2"></td><td align="center" id="tshow">edit</td>
            <td align="center" id="hshow">edit</td><td align="center" id="cshow">edit</td><td align="center" id="gshow">edit</td><td align="center" id="jshow">edit</td><td align="center" id="sshow">edit</td>
            <td align="center" id="hshow2">edit</td><td align="center" id="cshow2">edit</td><td align="center" id="gshow2">edit</td><td align="center" id="jshow2">edit</td><td align="center" id="sshow2">edit</td>
            </tr>
            </table>
            <br>
            <input type="submit" value="Register">
            </form>
        <br><br><br>
        <div>
            <select name="Town" id="selectTwn">
                <option>Select New Town</option>
                <option value="Negombo">Negombo</option><option value="Katana">Katana</option><option value="Kochikade">Kochchikade</option><option value="Raddolugama">Raddolugama</option>
                <option value="Katunayake">Katunayake</option><option value="Seeduwa">Seeduwa</option><option value="Averiwatta">Averiwatta</option><option value="Bopitiya">Bopitiya</option>
                <option value="Ja-Ela">Ja-Ela</option><option value="Kapuwatte">Kapuwatte</option><option value="Ekala">Ekala</option><option value="Pamunugama">Pamunugama</option>
                <option value="Kandana">Kandana</option><option value="Enderamulla">Enderamulla</option><option value="Hunupitiya">Hunupitiya</option>
                <option value="Hendala">Hendala</option><option value="Ragama">Ragama</option><option value="Welisara">Welisara</option>
                <option value="Elakande">Elakande</option><option value="Mabole">Mabole</option><option value="Mahabage">Mahabage</option>
                <option value="Wattala">Wattala</option><option value="Peliyagoda">Peliyagoda</option>
                <option value="Divulapitiya">Divulapitiya</option><option value="Minuwangoda">Minuwangoda</option>
            </select>
        </div>
        <br><br>
        </div>
            <div id="hBlock" style="float: center">
                <select name="hcust" id="selectH">
                    <?php
                        echo "<option value=NULL>select new customer from Hemas</option>";
                        echo "<option value=\"NULL\">empty</option>";
                        $cust = $this->db->query("select distinct a.hID,a.custName,a.town from hemas a Left join customer h on (a.hID = h.hID) left join customer hh on (a.hID = hh.hID2) where h.Custid is null and hh.Custid is null and a.custName not like '%Dr.' order by a.custName");
                        foreach ($cust->result() as $row){
                            $cc = $row->hID;
                            echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
                        }
                    ?>
                </select> 
                <table  id="reportTable1">
                <?php
                    $cust = $this->db->query("select distinct a.hID,a.custName,a.town from hemas a Left join customer h on (a.hID = h.hID) left join customer hh on (a.hID = hh.hID2) where h.Custid is null and hh.Custid is null and a.custName not like '%Dr.' order by a.custName");
                    echo "<strong><th>Hemas ID</th><th>Name</th><th>Town</th></strong>"; 
                    echo "";
                    foreach ($cust->result() as $row){
                        echo "<tr>";
                        echo "<td>".$row->hID. "</td>";
                        echo "<td>".$row->custName. "</td>";
                        echo "<td>".$row->town. "</td>";
                        echo "</tr>";
            
                    }
                ?>
                </table>
            </div>
            <div id="cBlock" style="float: center">	
                <select name="ccust" id="selectC">
                    <?php
                        echo "<option value=NULL>select new customer from Cipla</option>";
                        echo "<option value=\"NULL\">empty</option>";
                        $cust = $this->db->query("select distinct a.cID,a.custName,a.town from cipla a Left join customer h on (a.cID = h.cpID) left join customer hh on (a.cID = hh.cpID2) where h.Custid is null and hh.Custid is null and a.custName not like '%Dr.' order by a.custName");
                        foreach ($cust->result() as $row){
                            $cc = $row->cID;                         
                            echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
                        }
                    ?>
                </select>
                <table id="reportTable2">
                <?php
                      //DISPLAY CIPLA OTHER CUSTOMERS
                    $cust = $this->db->query("select distinct a.cID,a.custName,a.town from cipla a Left join customer h on (a.cID = h.cpID) left join customer hh on (a.cID = hh.cpID2) where h.Custid is null and hh.Custid is null and a.custName not like '%Dr.' order by a.custName");
                    echo "<strong><th>Cipla ID</th><th>Name</th><th>Town</th></strong>"; 
                    echo "";
                    foreach ($cust->result() as $row){
                        echo "<tr>";
                        echo "<td>".$row->cID. "</td>";
                        echo "<td>".$row->custName. "</td>";
                        echo "<td>".$row->town. "</td>";
                        echo "</tr>";           
                    }
                ?>
                </table>	
		    </div>
            <div id="gBlock" style="float: center">	
                <select name="gcust" id="selectG">
                    <?php
                        echo "<option value=NULL>select new customer from George Stewart</option>";
                        echo "<option value=\"NULL\">empty</option>";
                        $cust = $this->db->query("select distinct a.gID,a.custName,a.town from gs a Left join customer h on (a.gID = h.gsID) left join customer hh on (a.gID = hh.gsID2) where h.Custid is null and hh.Custid is null and a.town not like 'Put%' and a.town not like 'KUL%' and a.town not like 'WEN%' and a.town not like 'MAR%' and a.town not like 'CHI%' and a.custName not like 'Dr%' order by a.custName");
                        foreach ($cust->result() as $row){
                            $cc = $row->gID;                         
                            echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
                        }
                    ?>
                </select>
                <table id="reportTable3">
                <?php
                      //DISPLAY GS OTHER CUSTOMERS
                    $cust = $this->db->query("select distinct a.gID,a.custName,a.town from gs a Left join customer h on (a.gID = h.gsID) left join customer hh on (a.gID = hh.gsID2) where h.Custid is null and hh.Custid is null and a.town not like 'Put%' and a.town not like 'KUL%' and a.town not like 'WEN%' and a.town not like 'MAR%' and a.town not like 'CHI%' and a.custName not like 'Dr%' order by a.custName");
                    echo "<strong><th>GS ID</th><th>Name</th><th>Town</th></strong>"; 
                    echo "";
                    foreach ($cust->result() as $row){
                        echo "<tr>";
                        echo "<td>".$row->gID. "</td>";
                        echo "<td>".$row->custName. "</td>";
                        echo "<td>".$row->town. "</td>";
                        echo "</tr>";           
                    }
                ?>
                </table>	
		    </div>
            <div id="jBlock" style="float: center">
                <select name="jcust" id="selectJ">
                    <?php
                        echo "<option value=NULL>select new customer from J.L.Morison</option>";
                        echo "<option value=\"NULL\">empty</option>";
                        $cust = $this->db->query("select distinct a.jID,a.custName,a.town from jlm a Left join customer h on (a.jID = h.jID) left join customer hh on (a.jID = hh.jID2) where h.Custid is null and hh.Custid is null and a.custName not like 'Dr%' order by a.custName");
                        
                        foreach ($cust->result() as $row){
                            $cc = $row->jID;                         
                            echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
                        }
                    ?>
                </select>
                <table id="reportTable4">
                <?php
                      //DISPLAY JLM OTHER CUSTOMERS
                    $cust = $this->db->query("select distinct a.jID,a.custName,a.town from jlm a Left join customer h on (a.jID = h.jID) left join customer hh on (a.jID = hh.jID2) where h.Custid is null and hh.Custid is null and a.custName not like 'Dr%' order by a.custName");
                    echo "<strong><th>JLM ID</th><th>Name</th><th>Town</th></strong>"; 
                    echo "";
                    foreach ($cust->result() as $row){
                        echo "<tr>";
                        echo "<td>".$row->jID. "</td>";
                        echo "<td>".$row->custName. "</td>";
                        echo "<td>".$row->town. "</td>";
                        echo "</tr>";           
                    }
                ?>
                </table>	
		    </div>
            <div id="sBlock" style="float: center">
                <select name="scust" id="selectS">
                    <?php
                        echo "<option value=NULL>select new customer from Sanofi</option>";
                        echo "<option value=\"NULL\">empty</option>";
                        $cust = $this->db->query("select distinct a.sID,a.custName,a.town from sanofi a Left join customer h on (a.sID = h.sID) left join customer hh on (a.sID = hh.sID2) where h.Custid is null and hh.Custid is null and a.custName not like 'Dr%' and a.town not like 'Putt%' and a.town not like 'Chi%' and a.town not like 'Wen%' and a.town not like 'Mar%' and a.town not like 'Pan%' and a.town not like 'Kul%' order by a.custName");
                        
                        foreach ($cust->result() as $row){
                            $cc = $row->sID;                         
                            echo "<option value=\"" . $cc . "\">" . $row->custName." - ". $row->town ."</option>";
                        }
                    ?>
                </select>
                <table id="reportTable5">
                <?php
                      //DISPLAY sanofi OTHER CUSTOMERS
                    $cust = $this->db->query("select distinct a.sID,a.custName,a.town from sanofi a Left join customer h on (a.sID = h.sID) left join customer hh on (a.sID = hh.sID2) where h.Custid is null and hh.Custid is null and a.custName not like 'Dr%' and a.town not like 'Putt%' and a.town not like 'Chi%' and a.town not like 'Wen%' and a.town not like 'Mar%' and a.town not like 'Pan%' and a.town not like 'Kul%' order by a.custName");
                    echo "<strong><th>Name</th><th>Town</th></strong>"; 
                    echo "";
                    foreach ($cust->result() as $row){
                        echo "<tr>";
                        
                        echo "<td>".$row->custName. "</td>";
                        echo "<td>".$row->town. "</td>";
                        echo "</tr>";           
                    }
                ?>
                </table>	
		    </div>
            <div id="hBlock2" style="float: center">
                <select name="hcust" id="selectH2">
                    <?php
                        echo "<option value=NULL>select new customer from Hemas</option>";
                        echo "<option value=\"NULL\">empty</option>";
                        $cust = $this->db->query("select distinct a.hID,a.custName,a.town from hemas a Left join customer h on (a.hID = h.hID) left join customer hh on (a.hID = hh.hID2) where h.Custid is null and hh.Custid is null and a.custName not like '%Dr.' order by a.custName");
                        foreach ($cust->result() as $row){
                            $cc = $row->hID;
                            echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
                        }
                    ?>
                </select> 
                <table  id="reportTable1">
                <?php
                    $cust = $this->db->query("select distinct a.hID,a.custName,a.town from hemas a Left join customer h on (a.hID = h.hID) left join customer hh on (a.hID = hh.hID2) where h.Custid is null and hh.Custid is null and a.custName not like '%Dr.' order by a.custName");
                    echo "<strong><th>Hemas ID</th><th>Name</th><th>Town</th></strong>"; 
                    echo "";
                    foreach ($cust->result() as $row){
                        echo "<tr>";
                        echo "<td>".$row->hID. "</td>";
                        echo "<td>".$row->custName. "</td>";
                        echo "<td>".$row->town. "</td>";
                        echo "</tr>";
            
                    }
                ?>
                </table>
            </div>
            <div id="cBlock2" style="float: center">	
                <select name="ccust" id="selectC2">
                    <?php
                        echo "<option value=NULL>select new customer from Cipla</option>";
                        echo "<option value=\"NULL\">empty</option>";
                        $cust = $this->db->query("select distinct a.cID,a.custName,a.town from cipla a Left join customer h on (a.cID = h.cpID) left join customer hh on (a.cID = hh.cpID2) where h.Custid is null and hh.Custid is null and a.custName not like '%Dr.' order by a.custName");
                        foreach ($cust->result() as $row){
                            $cc = $row->cID;                         
                            echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
                        }
                    ?>
                </select>
                <table id="reportTable2">
                <?php
                      //DISPLAY CIPLA OTHER CUSTOMERS
                    $cust = $this->db->query("select distinct a.cID,a.custName,a.town from cipla a Left join customer h on (a.cID = h.cpID) left join customer hh on (a.cID = hh.cpID2) where h.Custid is null and hh.Custid is null and a.custName not like '%Dr.' order by a.custName");
                    echo "<strong><th>Cipla ID</th><th>Name</th><th>Town</th></strong>"; 
                    echo "";
                    foreach ($cust->result() as $row){
                        echo "<tr>";
                        echo "<td>".$row->cID. "</td>";
                        echo "<td>".$row->custName. "</td>";
                        echo "<td>".$row->town. "</td>";
                        echo "</tr>";           
                    }
                ?>
                </table>	
		    </div>
            <div id="gBlock2" style="float: center">	
                <select name="gcust" id="selectG2">
                    <?php
                        echo "<option value=NULL>select new customer from George Stewart</option>";
                        echo "<option value=\"NULL\">empty</option>";
                        $cust = $this->db->query("select distinct a.gID,a.custName,a.town from gs a Left join customer h on (a.gID = h.gsID) left join customer hh on (a.gID = hh.gsID2) where h.Custid is null and hh.Custid is null and a.town not like 'Put%' and a.town not like 'KUL%' and a.town not like 'WEN%' and a.town not like 'MAR%' and a.town not like 'CHI%' and a.custName not like 'Dr%' order by a.custName");
                        foreach ($cust->result() as $row){
                            $cc = $row->gID;                         
                            echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
                        }
                    ?>
                </select>
                <table id="reportTable3">
                <?php
                      //DISPLAY GS OTHER CUSTOMERS
                    $cust = $this->db->query("select distinct a.gID,a.custName,a.town from gs a Left join customer h on (a.gID = h.gsID) left join customer hh on (a.gID = hh.gsID2) where h.Custid is null and hh.Custid is null and a.town not like 'Put%' and a.town not like 'KUL%' and a.town not like 'WEN%' and a.town not like 'MAR%' and a.town not like 'CHI%' and a.custName not like 'Dr%' order by a.custName");
                    echo "<strong><th>GS ID</th><th>Name</th><th>Town</th></strong>"; 
                    echo "";
                    foreach ($cust->result() as $row){
                        echo "<tr>";
                        echo "<td>".$row->gID. "</td>";
                        echo "<td>".$row->custName. "</td>";
                        echo "<td>".$row->town. "</td>";
                        echo "</tr>";           
                    }
                ?>
                </table>	
		    </div>
            <div id="jBlock2" style="float: center">
                <select name="jcust" id="selectJ2">
                    <?php
                        echo "<option value=NULL>select new customer from J.L.Morison</option>";
                        echo "<option value=\"NULL\">empty</option>";
                        $cust = $this->db->query("select distinct a.jID,a.custName,a.town from jlm a Left join customer h on (a.jID = h.jID) left join customer hh on (a.jID = hh.jID2) where h.Custid is null and hh.Custid is null and a.custName not like 'Dr%' order by a.custName");
                        
                        foreach ($cust->result() as $row){
                            $cc = $row->jID;                         
                            echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
                        }
                    ?>
                </select>
                <table id="reportTable4">
                <?php
                      //DISPLAY JLM OTHER CUSTOMERS
                    $cust = $this->db->query("select distinct a.jID,a.custName,a.town from jlm a Left join customer h on (a.jID = h.jID) left join customer hh on (a.jID = hh.jID2) where h.Custid is null and hh.Custid is null and a.custName not like 'Dr%' order by a.custName");
                    echo "<strong><th>JLM ID</th><th>Name</th><th>Town</th></strong>"; 
                    echo "";
                    foreach ($cust->result() as $row){
                        echo "<tr>";
                        echo "<td>".$row->jID. "</td>";
                        echo "<td>".$row->custName. "</td>";
                        echo "<td>".$row->town. "</td>";
                        echo "</tr>";           
                    }
                ?>
                </table>	
		    </div>
            <div id="sBlock2" style="float: center">
                <select name="scust" id="selectS2">
                    <?php
                        echo "<option value=NULL>select new customer from Sanofi</option>";
                        echo "<option value=\"NULL\">empty</option>";
                        $cust = $this->db->query("select distinct a.sID,a.custName,a.town from sanofi a Left join customer h on (a.sID = h.sID) left join customer hh on (a.sID = hh.sID2) where h.Custid is null and hh.Custid is null and a.custName not like 'Dr%' and a.town not like 'Putt%' and a.town not like 'Chi%' and a.town not like 'Wen%' and a.town not like 'Mar%' and a.town not like 'Pan%' and a.town not like 'Kul%' order by a.custName");
                        
                        foreach ($cust->result() as $row){
                            $cc = $row->sID;                         
                            echo "<option value=\"" . $cc . "\">" . $row->custName." - ". $row->town ."</option>";
                        }
                    ?>
                </select>
                <table id="reportTable5">
                <?php
                      //DISPLAY sanofi OTHER CUSTOMERS
                    $cust = $this->db->query("select distinct a.sID,a.custName,a.town from sanofi a Left join customer h on (a.sID = h.sID) left join customer hh on (a.sID = hh.sID2) where h.Custid is null and hh.Custid is null and a.custName not like 'Dr%' and a.town not like 'Putt%' and a.town not like 'Chi%' and a.town not like 'Wen%' and a.town not like 'Mar%' and a.town not like 'Pan%' and a.town not like 'Kul%' order by a.custName");
                    echo "<strong><th>Name</th><th>Town</th></strong>"; 
                    echo "";
                    foreach ($cust->result() as $row){
                        echo "<tr>";
                        
                        echo "<td>".$row->custName. "</td>";
                        echo "<td>".$row->town. "</td>";
                        echo "</tr>";           
                    }
                ?>
                </table>	
		    </div>
    </div>
    </div>
    </body>
</html>
