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




<?php 

$con=mysqli_connect('127.0.0.1','root','','registration');
if(!$con)
{
echo 'not connected to server'; 
}

if(!mysqli_select_db($con,'registration'))
{
echo 'database not selected';
}


$sql="SELECT * from enter_land_info";
$result=$con->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc())
{
echo "<tr>";

echo "<td>".$row['frmrid']."</td>";
echo "<td>".$row['frmrname']."</td>";
echo "<td>".$row['frmrlocation']."</td>";
echo "<td>".$row['frmrtype']."</td>";
echo "<td>".$row['frmracre']."</td>";
echo "</tr>";



}
}
else
{
echo "error";
}





?>
</body></html>



    




    
  
   


