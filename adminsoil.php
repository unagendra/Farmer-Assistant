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
$cropname=$_POST['cropname'];
$landtype=$_POST['landtype'];
$bstfrtlzr=$_POST['bstfrtlzr'];
//$frmracre=$_POST['frmracre'];


$sql="INSERT INTO soil_fertilizer (cropname,landtype,bstfrtlzr) VALUES ('$cropname','$landtype','$bstfrtlzr')";
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