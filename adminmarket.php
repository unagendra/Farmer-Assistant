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
$cname=$_POST['cname'];
$mname=$_POST['mname'];
$location=$_POST['location'];
$mrate=$_POST['mrate'];
$mxrate=$_POST['mxrate'];
$connum=$_POST['connum'];


$sql="INSERT INTO admin_market (cname,mname,location,mrate,mxrate,connum) VALUES ('$cname','$mname','$location','$mrate','$mxrate','$connum')";
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