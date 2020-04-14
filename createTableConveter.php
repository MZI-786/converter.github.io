<?php
$conn=new mysqli("localhost","root","","labfinal");
if(!$conn){
die("Error:Cannot Connect".mysqli_connect_error());
}
$sql="CREATE TABLE converter(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(30) NOT NULL,
    Suggestions VARCHAR(100) NOT NULL,
    Email VARCHAR(70) NOT NULL UNIQUE
)";
if(mysqli_query($conn,$sql)){
	echo "TABLE CREATED SUCCESSFULLY!";
}
else{
	die("ERROR:DATABASE CAN NOT Executed $sql ".mysqli_error($conn));
}
mysqli_close($conn);
?>