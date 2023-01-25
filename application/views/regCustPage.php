<!DOCTYPE HTML>
<html>
    <head>
        <title>The West Central Pharma</title>
        <link href="../upload/css/style.css" rel="stylesheet" type="text/css"  media="all" />
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
    
    <body>
	<div class="container">
        <h1  class="mt-5" >Welcome</h1>
        <h2>Customer Outstanding Management System </h2>
        <h2>Register new customer</h2>
	</div>
	
	<div class="mx-5">
		<div>
			<br>
				<!-- SELECT customer BOXes-->
				<div>
					<form action = "./regCustomer/regCustQ" method="post">
						<div class="border border-secondary rounded p-3 bg-dark text-white">
							<h4 class="text-center" > Select Main Customers</h4>	
							<div class="row my-3">
								<div class="col">
									<select name="hcust" class="w-100">
										<?php
											echo "<option value=NULL>select customer from Hemas</option>";
											$cust = $this->db->query("select distinct a.hID,a.custName,a.town from hemas a Left join customer h on (a.hID = h.hID) left join customer hh on (a.hID = hh.hID2) where h.Custid is null and hh.Custid is null and a.custName not like '%Dr.' order by a.custName");
											foreach ($cust->result() as $row){
												$cc = $row->hID;
												echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
											}
										?>
									</select> 
								</div>
								<div class="col">
									<select name="ccust" class="w-100">
										<?php
											echo "<option value=NULL>select customer from Cipla</option>";
											$cust = $this->db->query("select distinct a.cID,a.custName,a.town from cipla a Left join customer h on (a.cID = h.cpID) left join customer hh on (a.cID = hh.cpID2) where h.Custid is null and hh.Custid is null and a.custName not like '%Dr.' order by a.custName");
											foreach ($cust->result() as $row){
												$cc = $row->cID;                         
												echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
											}
										?>
									</select>
								</div>
								<div class="col">
									<select name="gcust" class="w-100">
										<?php
											echo "<option value=NULL>select customer from George Stewart</option>";
											$cust = $this->db->query("select distinct a.gID,a.custName,a.town from gs a Left join customer h on (a.gID = h.gsID) left join customer hh on (a.gID = hh.gsID2) where h.Custid is null and hh.Custid is null and a.town not like 'Put%' and a.town not like 'KUL%' and a.town not like 'WEN%' and a.town not like 'MAR%' and a.town not like 'CHI%' and a.custName not like 'Dr%' order by a.custName");
											foreach ($cust->result() as $row){
												$cc = $row->gID;                         
												echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
											}
										?>
									</select>
								</div>
							</div>
							<div class="row my-3">
								<div class="col">
									<select name="jcust" class="w-100">
										<?php
											echo "<option value=NULL>select customer from J.L.Morison</option>";
											$cust = $this->db->query("select distinct a.jID,a.custName,a.town from jlm a Left join customer h on (a.jID = h.jID) left join customer hh on (a.jID = hh.jID2) where h.Custid is null and hh.Custid is null and a.custName not like 'Dr%' order by a.custName");
											
											foreach ($cust->result() as $row){
												$cc = $row->jID;                         
												echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
											}
										?>
									</select>
								</div>
								<div class="col">
									<select name="scust" class="w-100">
										<?php
											echo "<option value=NULL>select customer from Sanofi</option>";
											$cust = $this->db->query("select distinct a.sID,a.custName,a.town from sanofi a Left join customer h on (a.sID = h.sID) left join customer hh on (a.sID = hh.sID2) where h.Custid is null and hh.Custid is null and a.custName not like 'Dr%' and a.town not like 'Putt%' and a.town not like 'Chi%' and a.town not like 'Wen%' and a.town not like 'Mar%' and a.town not like 'Pan%' and a.town not like 'Kul%' order by a.custName");
											
											foreach ($cust->result() as $row){
												$cc = $row->sID;                         
												echo "<option value=\"" . $cc . "\">" . $row->custName." - ". $row->town ."</option>";
											}
										?>
									</select>
								</div>
								<div class="col">
								<!-- //emercheme -->
								</div>
							</div>
						</div>     
						<hr>
						<div class="border border-primary rounded p-3 bg-secondary text-white">
							<h4 class="text-center" > For duplicate customers</h4>	
							<div class="row my-3">
								<div class="col">
									<select name="hcust2" class="w-100">
										<?php
											echo "<option value=NULL>select customer from Hemas</option>";
											$cust = $this->db->query("select distinct a.hID,a.custName,a.town from hemas a Left join customer h on (a.hID = h.hID) left join customer hh on (a.hID = hh.hID2) where h.Custid is null and hh.Custid is null and a.custName not like '%Dr.' order by a.custName");
											//$cust = $this->db->query("select distinct a.hID,a.hCustName,a.hTown from hemasoutupload a");
											foreach ($cust->result() as $row){
												$cc = $row->hID;
												echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
											}
										?>
									</select>  
								</div>
								<div class="col">
									<select name="ccust2" class="w-100">
										<?php
											echo "<option value=NULL>select customer from Cipla</option>";
											$cust = $this->db->query("select distinct a.cID,a.custName,a.town from cipla a Left join customer h on (a.cID = h.cpID) left join customer hh on (a.cID = hh.cpID2) where h.Custid is null and hh.Custid is null and a.custName not like '%Dr.' order by a.custName");
											
											foreach ($cust->result() as $row){
												$cc = $row->cID;                         
												echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
											}
										?>
									</select>
								</div>
								<div class="col">
									<select name="gcust2" class="w-100">
										<?php
											echo "<option value=NULL>select customer from George Stewart</option>";
											$cust = $this->db->query("select distinct a.gID,a.custName,a.town from gs a Left join customer h on (a.gID = h.gsID) left join customer hh on (a.gID = hh.gsID2) where h.Custid is null and hh.Custid is null and a.town not like 'Put%' and a.town not like 'KUL%' and a.town not like 'WEN%' and a.town not like 'MAR%' and a.town not like 'CHI%' and a.custName not like 'Dr%' order by a.custName");
											foreach ($cust->result() as $row){
												$cc = $row->gID;                         
												echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
											}
										?>
									</select>
								</div>
							</div>		
							<div class="row my-3">
								<div class="col">
									<select name="jcust2" class="w-100">
										<?php
											echo "<option value=NULL>select customer from J.L.Morison</option>";
											$cust = $this->db->query("select distinct a.jID,a.custName,a.town from jlm a Left join customer h on (a.jID = h.jID) left join customer hh on (a.jID = hh.jID2) where h.Custid is null and hh.Custid is null and a.custName not like 'Dr%' order by a.custName");
											
											foreach ($cust->result() as $row){
												$cc = $row->jID;                         
												echo "<option value=\"'" . $cc . "'\">" . $row->custName." - ". $row->town ." - ".$cc."</option>";
											}
										?>
									</select>
								</div>
								<div class="col">
									<select name="scust2" class="w-100">
										<?php
											echo "<option value=NULL>select customer from Sanofi</option>";
											$cust = $this->db->query("select distinct a.sID,a.custName,a.town from sanofi a Left join customer h on (a.sID = h.sID) left join customer hh on (a.sID = hh.sID2) where h.Custid is null and hh.Custid is null and a.custName not like 'Dr%'  and a.town not like 'Putt%' and a.town not like 'Chi%' and a.town not like 'Wen%' and a.town not like 'Mar%' and a.town not like 'Pan%' and a.town not like 'Kul%' order by a.custName");
											
											foreach ($cust->result() as $row){
												$cc = $row->sID;                         
												echo "<option value=\"" . $cc . "\">" . $row->custName." - ". $row->town ."</option>";
											}
										?>
									</select>
								</div>
								<div class="col">
									<!-- emercheme -->
									<!-- <select name="ecust">
								
									</select> -->
								</div>
							</div>
						</div>	
						<hr>
						<div class="container my-5 bg-primary text-white p-3 rounded ">
							<h4 class="text-center">Select the Main Company for the customer registration</h4>
							<div class="d-flex justify-content-center">
								<select name="mcust" class="mx-3">
									<option value="hemas">Hemas</option>
									<option value="cipla">Cipla</option>
									<option value="gs">George Stewart</option>
									<option value="jl">J.L.Morison</option>
									<option value="san">Sanofi</option>
									<option value="NULL">------------------------</option>
									<option value="hemas2">Hemas-2</option>
									<option value="cipla2">Cipla-2</option>
									<option value="gs2">George Stewart-2</option>
									<option value="jl2">J.L.Morison-2</option>
									<!-- <option value="san2">Sanofi-2</option> -->
								</select>
								<select name="ctype" class="mx-3">
									<option value="p">Pharmacy</option>
									<option value="d">Doctor</option>
								</select>
								<select name="cTown" class="mx-3">
										<option value="Negombo">Negombo</option><option value="Katana">Katana</option><option value="Kochikade">Kochchikade</option><option value="Raddolugama">Raddolugama</option>
										<option value="Katunayake">Katunayake</option><option value="Seeduwa">Seeduwa</option><option value="Averiwatta">Averiwatta</option><option value="Bopitiya">Bopitiya</option>
										<option value="Ja-Ela">Ja-Ela</option><option value="Kapuwatte">Kapuwatte</option><option value="Ekala">Ekala</option><option value="Pamunugama">Pamunugama</option>
										<option value="Kandana">Kandana</option><option value="Enderamulla">Enderamulla</option><option value="Hunupitiya">Hunupitiya</option>
										<option value="Hendala">Hendala</option><option value="Ragama">Ragama</option><option value="Welisara">Welisara</option>
										<option value="Elakande">Elakande</option><option value="Mabole">Mabole</option><option value="Mahabage">Mahabage</option>
										<option value="Wattala">Wattala</option><option value="Peliyagoda">Peliyagoda</option>
										<option value="Divulapitiya">Divulapitiya</option><option value="Minuwangoda">Minuwangoda</option>
								</select>
								<input type="submit" value="Register"class="btn btn-warning" class="mx-3">
							</div>
						</div>
					</form>
				</div>
				
				

				<div>
				<h3 class="mx-5">Customer not yet registered</h3>
				<div class="row">
					<div style="float: left" class="col">
							
						<button onclick="exportTableToExcel('reportTable1')">Export Table Data To Excel File</button>
			
						<table  id="reportTable1">
						<?php
							//DISPLAY HEMAS OTHER CUSTOMERS
							//$this->load->model('regCust_model');
							//$cust = $this->regCust_model->viewOtherCust();
							$cust = $this->db->query("select distinct a.hID,a.custName,a.town from hemas a Left join customer h on (a.hID = h.hID) left join customer hh on (a.hID = hh.hID2) where h.Custid is null and hh.Custid is null and a.custName not like '%Dr.' order by a.custName");
							//$cust = $this->db->query("select distinct a.hID,a.hCustName,a.hTown from hemasoutupload a");
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
					<div style="float: left" class="col">	
					
						<button onclick="exportTableToExcel('reportTable2')">Export Table Data To Excel File</button>
					
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
					<div style="float: left" class="col">	
					
						<button onclick="exportTableToExcel('reportTable3')">Export Table Data To Excel File</button>
					
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
					<div style="float: left" class="col">			

					
						<button onclick="exportTableToExcel('reportTable4')">Export Table Data To Excel File</button>
			
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

					<div style="float: left" class="col">			
			
						<button onclick="exportTableToExcel('reportTable5')">Export Table Data To Excel File</button>
		
						<table id="reportTable5">
						<?php
							//DISPLAY sanofi OTHER CUSTOMERS
							$cust = $this->db->query("select distinct a.sID,a.custName,a.town from sanofi a Left join customer h on (a.sID = h.sID) left join customer hh on (a.sID = hh.sID2) where h.Custid is null and hh.Custid is null and a.custName not like 'Dr%' and a.town not like 'Putt%' and a.town not like 'Chi%' and a.town not like 'Wen%' and a.town not like 'Mar%' and a.town not like 'Pan%' and a.town not like 'Kul%' order by a.custName");
							echo "<strong><th>Sanofi Name</th><th>Town</th></strong>"; 
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
				
		</div>
    </div>
    </body>
</html>
