<?php
$con=mysqli_connect('127.0.0.1','root','');
if(!$con)
{
echo 'not connected to server'; 
}

if(!mysqli_select_db($con,'registration'))
{
echo 'database not selected';
}
$frmrname=$_POST['frmrname'];
$frmrlocation=$_POST['frmrlocation'];
$frmrtype=$_POST['frmrtype'];
$frmracre=$_POST['frmracre'];


$sql="INSERT INTO enter_land_info (frmrname,frmrlocation,frmrtype,frmracre) VALUES ('$frmrname','$frmrlocation','$frmrtype','$frmracre')";
if(!mysqli_query($con,$sql))
{
echo 'not inserted';

}
else
{
echo 'inserted';
}
//header("refresh:2;url=new23.html");

?>