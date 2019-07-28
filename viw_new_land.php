<html>
<head>
<style>



table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
h1{
color:white;
 list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
	font-style:italic;
 
 }
</style>

</head>
<body>
<table>
<tr>
	<th> FARMER ID</th>
	<th> FARMER NAME</th>
	<th> FARMER LOCATION</th>
	<th> Land Type</th>
	<th> Acre</th>
	</tr>
	<?php 
	$conn=mysqli_connect("localhost","root","","registration");
	if($conn-> connect_error){
		die("connection failed".$conn->connect_error);
	}
	$sql="select * from enter_land_info";
	$result=$conn-> query($sql);
	if($result-> num_rows > 0){
		while($row=$result->fetch_assoc()){
			echo "<tr><td>".$row["frmrid"]."</td><td>".$row["frmrname"]."</td><td>".$row["frmrlocation"]."</td><td>".$row["frmrtype"]."</td><td>".$row["frmracre"]."</td></tr>";
			
		}
		echo "</tables>";
	}
	else{
		echo "0 result";
		
	}
	$conn-> close();
	?>
	</table>
	</body>
	</html>