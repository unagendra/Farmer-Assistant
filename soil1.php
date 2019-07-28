<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 49%;
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=reset] {
    width: 49%;
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}



div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
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
<body>



 <h1> Soil and Fertilizers</h1></legend>

<div>
  <form method="POST">
    <label for="fname">Enter Crop name:</label>
	
    <input type="text" id="scrpname" name="frmrid" placeholder="crop name..">
	
	<label for="fname">Enter Soil Type:</label>
	<input type="text" id="soiltype" name="frmrid1" placeholder="soil type..">

    




    
  
    <input type="submit" name="submit" value="submit"> <input type="reset" value="Clear">
  </form>
</div>


 <?php
  require 'db.php';
	if(isset($_POST['submit'])) {
		$cropname = $_POST['frmrid'];
				$landtype = $_POST['frmrid1'];

	$sql = "SELECT * FROM `soil_fertilizer` WHERE cropname LIKE '".$cropname."'and landtype LIKE '".$landtype."';";
		
	
		
				//$sql = "SELECT * FROM `cricketersinformation`, batsman WHERE cricketersinformation.name LIKE '".$cricketer."' and cricketersinformation.id = batsman.id";

		
		
		if($result = mysqli_query($connection,$sql)) {
		echo "<table>
		       <thead>
          <tr>
              <th>cropname</th>
              <th>landtype</th>
              <th>bestfertilizer</th>
              
			  
			  
          </tr>
        </thead>

        <tbody>
 ";
		while ($row = mysqli_fetch_assoc($result)) {
		echo "
          <tr>
            <td>".$row['cropname']."</td>
            <td>".$row['landtype']."</td>
            <td>".$row['bstfrtlzr']."</td>
         
			
          
          </tr>";
       
            
				}

	echo "
        </tbody>
      </table>";
      
			} else {
			//	print_r($connection->errorInfo());
			}
		} else {
			
			echo $connection->error;
		}
	
  
  ?>
    </body>


</html>
