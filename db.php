<?php
$connection=mysqli_connect("localhost","root","","registration");
if(!$connection)
{
	die("DAtabase error".mysqli_connect_errno());
}
?>