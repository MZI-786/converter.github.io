<?php
$conn=new mysqli("localhost","root","");
if(!$conn){
die("Error:Cannot Connect".mysqli_connect_error());
}
$sql="CREATE DATABASE labfinal";
if(mysqli_query($conn,$sql)){
	echo "DATBSE CREATED SUCCESSFULLY!";
}
else{
	die("ERROR:DATABASE CAN NOT Executed $sql ".mysqli_error($conn));
}
mysqli_close($conn);
?>