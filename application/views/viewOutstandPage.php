<!DOCTYPE HTML>
<html>
    <head>
        <title>The West Central Pharma</title>
        <link href="../upload/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- MultiSelect CSS & JS library -->
        <link href="../../upload/jquery.multiselect.css" rel="stylesheet" />
        <script src="../../upload/jquery.multiselect.js"></script>


    </head>
    
   
    <body>
    <div class="container">
        <h1  class="mt-5" >Welcome</h1>
        <h2>View Customer Outstanding Report</h2>
    </div>
    <div class="container">
		<div id="accordion">
			<div class="card">
				<div class="card-header" id="headingOne">
				<h5 class="mb-0">
					<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					Single Customer Wise
					</button>
				</h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body">
					<form action ="./viewOutstand/singleOutQ" target="popup" method="post">
						<select name="vcust">
						<?php
							echo "<option value=NULL>select the customer</option>";
							$cust = $this->db->query("select Custid,custName,town from customer order by custName");
							foreach($cust->result() as $row){
								$cc = $row->Custid;
								echo "<option value=\"'".$cc. "'\">" .$row->custName . " - ".$row->town." - ".$cc. "</option>";
							}
						?>  
						</select>
						Age: <input type="text" name="age" value=0><br><br>
						<input type="submit" class="btn btn-success" value="View Outstanding">
					</form>
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingTwo">
				<h5 class="mb-0">
					<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					Single Town Wise
					</button>
				</h5>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				<div class="card-body">
					<form action ="./viewOutstand/singleTwOutQ" target="popup" method="post">
						<select name="vtown">
						<?php
							echo "<option value=NULL>select the town</option>";
							$cust = $this->db->query("select distinct town from customer");
							foreach($cust->result() as $row){
								$cc = $row->town;
								echo "<option value=\"'".$cc. "'\">" .$cc. "</option>";
							}
						?>  
						</select>
						
						Age: <input type="text" name="age" value=0>
						<select name="ctype">
							<option value="p">Pharmacy</option>
							<option value="d">Doctor</option>
						</select>
						<br><br>
						<input type="submit" class="btn btn-success" value="View Outstanding">
					</form>
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingThree">
				<h5 class="mb-0">
					<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					Multi Customer Wise
					</button>
				</h5>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				<div class="card-body">
					<form action ="./viewOutstand/multiOutQ" target="popup" method="post">
						<select name="mcust[]" multiple id="mcust" size="8">
						<?php
							echo "<option value=NULL>select the customer</option>";
							$cust = $this->db->query("select Custid,custName,town from customer order by custName");
							foreach($cust->result() as $row){
								$cc = $row->Custid;
								echo "<option value=\"'".$cc. "'\">" .$row->custName ." - ".$row->town." - " .$cc. "</option>";
							}
						?>  
						</select>
						Age: <input type="text" name="age" value=0>
						<script>
						$('#mcust').multiselect({
							columns: 1,
							placeholder: 'Select CUstomers',
							search: true,
							selectAll: true
						});
						</script>
						<input type="submit" class="btn btn-success" value="View Outstanding">
					</form>
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingFour">
				<h5 class="mb-0">
					<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					Multi Town Wise
					</button>
				</h5>
				</div>
				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
				<div class="card-body">
					<form action ="./viewOutstand/multiTwOutQ" target="popup" method="post">
						<select name="mtown[]" multiple id="mtown" size="8">
						<?php
							echo "<option value=NULL>select the town</option>";
							$cust = $this->db->query("select distinct town from customer");
							foreach($cust->result() as $row){
								$cc = $row->town;
								echo "<option value=\"'".$cc. "'\">" .$cc. "</option>";
							}
						?>  
						</select>
						Age: <input type="text" name="age" value=0>
						<select name="ctype">
							<option value="p">Pharmacy</option>
							<option value="d">Doctor</option>
						</select>
						<script>
						$('#mtown').multiselect({
							columns: 1,
							placeholder: 'Select towns',
							search: true,
							selectAll: true
						});
						</script>
						<input type="submit" class="btn btn-success" value="View Outstanding">
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
    </body>
</html>

        