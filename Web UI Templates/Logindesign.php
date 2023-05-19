<?php
$user=$_POST["user"];
$pass=$_POST["pass"];
$conn=mysqli_connect("localhost","root","","login insert");
$mysql="insert into practice values('$user','$pass');";
if($conn->query($mysql)===true){
	die ("Inserted successfully");
	
}
else{
	die("failed");
}

?>
