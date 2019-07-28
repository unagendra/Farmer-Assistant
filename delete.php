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



 <h1>Delete Information</h1></legend>

<div>
  <form method="POST">
    <label for="fname">Enter Farmer ID:</label>
	
    <input type="text" id="scrpname" name="frm" placeholder="crop name..">
	


    




    
  
    <input type="submit" name="submit" value="submit"> <input type="reset" value="Clear">
  </form>
</div>


 <?php
  require 'db.php';
	if(isset($_POST['submit'])) {
		$cropname = $_POST['frm'];
				

	$sql = "DELETE FROM `enter_land_info` WHERE frmrid LIKE '".$cropname."';";
		
	
		
				
		
		
		} else {
			
			echo $connection->error;
		}
	
  
  ?>
    </body>


</html>
