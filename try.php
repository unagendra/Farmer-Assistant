<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>


    <body>
	 <nav class="nav-extended #80deea cyan">
	 
    <div class="nav-wrapper">
    
	CRICKET DATABASE
	</div></nav>
  <div><form method="POST"><table><th>
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          
          <input id="icon_prefix" type="text" name="name" class="validate" required>
		  
          <label for="icon_prefix">name</div></div></label>
        </div>
		</div>
		</div>
		 <div class="cities1"> <button  class="btn waves-effect waves-light" type="submit" name="submit">search
		  
   
  </button>
          </th><th><div class="row center">

<img height="600" width="1100" src="http://localhost/project/3.jpeg">


  </div></th>
      
					 
<th>
             
		 </th></table></form></div></div>
           <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  
  <?php
  require 'db.php';
	if(isset($_POST['submit'])) {
		$cricketer = $_POST['name'];
		
	$sql = "SELECT * FROM `cricketersinformation` WHERE name LIKE '".$cricketer."';";
		
	
		
				//$sql = "SELECT * FROM `cricketersinformation`, batsman WHERE cricketersinformation.name LIKE '".$cricketer."' and cricketersinformation.id = batsman.id";

		
		
		if($result = mysqli_query($connection,$sql)) {
		echo "<table>
		       <thead>
          <tr>
              <th>Name</th>
              <th>country</th>
              <th>DOB</th>
              <th>Phone</th>
              <th>Qualification</th>
			  
			  
          </tr>
        </thead>

        <tbody>
 ";
		while ($row = mysqli_fetch_assoc($result)) {
		echo "
          <tr>
            <td>".$row['name']."</td>
            <td>".$row['country']."</td>
            <td>".$row['dob']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['qualification']."</td>
			
            
          </tr>";
          $history = $row['history'];
            
				}

	echo "
        </tbody>
      </table>";
      echo "<h4>History</h4><p>$history</p>";
			} else {
			//	print_r($connection->errorInfo());
			}
		} else {
			
			echo $connection->error;
		}
	
  
  ?>
    </body>
  </html>