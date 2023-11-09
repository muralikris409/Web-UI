<?php
$user=$_POST["name"];
$pass=$_POST["password"];
$conn=mysqli_connect("localhost","root","","test");
if($conn->connect_error)
{
	echo"Connection failed" . $conn->connect_error."</br>";
	
}
else{
	echo"Connected<br>";
}
$sql=mysqli_query("insert into sample values($user,$pass)");
$result=$conn->query($sql);
if($conn->query($sql)===true){
	echo"correct";
}
else{
	echo"not".$conn->error;
}
?>