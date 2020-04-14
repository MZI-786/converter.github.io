<?php
$name=$_POST['name'];
$email=$_POST['email'];
$suggestion=$_POST['tea'];
$conn=new mysqli("localhost","root","","labfinal");
if(!$conn){
	die("ERROR:COULD NOT CONNECET To:".mysqli_connect_error());
	
}
if(isset($_POST['sub'])){
	$sql="INSERT INTO converter(name,email,suggest) VALUES('$name','$email','$suggestion')";
	
if(mysqli_query($conn,$sql)){
	echo "INSERTED SUCCESFULLY";
}	
else{
	die("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
}
}

/*if($conn->connect_error){
	
	die("connection failed:" .$conn->connect_error);
}

$sql="INSERT INTO suggestion(name,email,suggest) VALUES('$name','$email','$suggestion')";
if($conn->query($sql)===TRUE){
	echo "THANKS FOR SUGGESTION<br>";
	echo "<a href='unit converter.html'>GO BACK</a>";
}
else
{
	echo "ERRORS: " . $sql . "<br>" . $conn->error;
}
$conn->close();
*/
?>