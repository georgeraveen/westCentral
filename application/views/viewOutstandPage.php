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
    <div class="header">
        <h1>welcome</h1>
        <h2>customer outstanding report</h2>
    </div>
    <div>
        single customer wise

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
            <input type="submit" value="view outstanding">
        </form>

       
    </div>
    <br>==================================================================================================================<br>
    <div>
    single town wise

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
            <input type="submit" value="view outstanding">
        </form>
    </div>
    <br>==================================================================================================================<br>
    <div>
        multi customer wise

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

            <input type="submit" value="view outstanding">
            
        </form>
       
    </div>
    <br>==================================================================================================================<br>
    <br><br>
    <div>
        multi town wise

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

            <input type="submit" value="view outstanding">
            
        </form>
       
    </div>
    <br><br>
    
    </body>
</html>

        