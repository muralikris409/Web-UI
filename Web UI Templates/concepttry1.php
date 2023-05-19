
<html>
<head>
<title>myhomeconcept</title>
</head>
<link rel="stylesheet" href="concepttry1.css">
<body>
<div class="main">
<form method="POST">
<div class="log" id="log">
<span class="span" id="span"></span>
<h2 id="h2" class="h2"><center>LOGIN</h2></center>
<input type="name" placeholder="Username or Mobile number" name="name" id="name"/>
<input type="password" placeholder="Password" name="pass" id="pass"/>
<input type="checkbox" name="remember " /><label for="remember">Remember me</LABEL>
<input type="submit" name="logbtn" value="Submit"/>

</div>
</form>
<script>
var tgle=document.getElementById("span");
var log=document.getElementById("log");
var h2=document.getElementById("h2");
tgle.onclick=function(){
tgle.classList.toggle("active");
log.classList.toggle("logdark");
h2.classList.toggle("hdark");

}

</script>
<?php
$conn=mysqli_connect("localhost","root","","login insert")or die("failed");


if(isset($_POST["logbtn"])){
	$name=$_POST["name"];
	$pass=$_POST["pass"];
	$sql= "insert into register(Name,Password) values('$name','$pass')";
	if(mysqli_query($conn,$sql)){
	echo"ok";
	}
}
?>

</div>

