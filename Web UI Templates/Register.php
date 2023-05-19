<?php
$name=$_POST["Name"];
$mail=$_POST["Mail"];
$tel=$_POST["Number"];
$pass=$_POST["Pass"];
$conn=mysqli_connect("localhost","root","","login insert");
$mysql="insert into register values('$name','$mail','$tel','$pass');";

if($conn->query($mysql) === true){
	echo"hai";
}

?>