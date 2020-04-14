<?php
$conn=new mysqli("localhost","root","","labfinal");
if(!$conn){
die("Error:Cannot Connect".mysqli_connect_error());
}
$name=$_POST['name'];
$suggestion=$_POST['tea'];
$email=$_POST['email'];
if(isset($_POST['sub'])){
	if(!empty($name) && !empty($suggestion) && !empty($email)){
$sql="INSERT INTO converter(Name,Suggestions, Email) VALUES('$name','$suggestion','$email')";
if(mysqli_query($conn,$sql)){
	echo "THANKS FOR FEEDBACK!";
}
else{
	die("THIS EMAIL ID IS ALREADY PRESENT");
}
	}        // check someone empty

else
{	
die("SORRY!SOMEONE IS MISSING");  // if someone is empty than die do not store in database
 }

} # isset method end here

mysqli_close($conn);
?>