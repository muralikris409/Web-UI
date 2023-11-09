
<html>
<head>
<title>myhomeconcept</title>
</head>

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
<style>
	*{
margin:0;
padding:0;
}
body{
	background:url(bgbg.jpg);
	background-size:cover;
	
}
.main{
	width:95%;
	height:95%;
	background:url(project1.jpg);
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	border-radius:10px;
}
.log{
	display:block;
	width:30%;
	height:100%;
	background:white;
	text-align:center;
	position:absolute;
	transition:0.8s;
	left:100%;
	transform:translatex(-100%);
	border-radius:10px;
}
.logdark{
	display:block;
	width:30%;
	height:100%;
	background:black;
	transition:0.67s;
	text-align:center;
	position:absolute;
	left:100%;
	transform:translatex(-100%);
	border-radius:10px;
}
.log input{
	display:block;
	width:65.2%;
	height:3.6%;
	text-align:center;
	position:relative;
	top:38%;
	left:50%;
	transform:translate(-50%,-50%);
	margin-top:15px;
	border:1px solid #3458eb;
	border-radius:5px;
}
.log input[type="checkbox"],label{

	width:35.2%;
	height:3.6%;
	text-align:center;
	position:relative;
	top:38%;
	left:21%;
	transform:translate(-50%,-50%);
	letter-spacing:0.5px;
	
	border-radius:5px;
}
.log label{

	width:35.2%;
	height:3.6%;
	text-align:center;
	position:relative;
	top:33%;
	left:-10%;
	transform:translate(-50%,-50%);
	letter-spacing:0.5px;
	
	border-radius:5px;
}
.log .h2{
	display:block;
	width:65.2%;
	height:3.6%;
	text-align:center;
	position:relative;
	top:36%;
	left:50%;
	transform:translate(-50%,-50%);
	margin-top:15px;
}
.log .hdark{
	display:block;
	width:65.2%;
	height:3.6%;
	text-align:center;
	position:relative;
	top:36%;
	color:white;
	transition:0.7s;
	left:50%;
	transform:translate(-50%,-50%);
	margin-top:15px;
}
.log input[type="submit"]{
	display:block;
	width:65.2%;
	height:3.6%;
	text-align:center;
	position:relative;
	top:38%;
	left:50%;
	transform:translate(-50%,-50%);
	margin-top:15px;
	color:white;
	background:#3458eb;
	border-radius:5px;
	letter-spacing:0.5px;
}
.log input[type="submit"]:hover{
	display:block;
	width:65.3%;
	height:3.7%;
	text-align:center;
	position:relative;
	top:38%;
	left:50%;
	transform:translate(-50%,-50%);
	margin-top:15px;
	color:white;
	background:#3458eb;
	border-radius:5px;
	letter-spacing:1px;
}
.span{
	width:50px;
	height:25px;
	background:#000;
	border-radius:20px;
	position:absolute;
	left:75%;
	margin:20px;
	transition:0.5s;
}
.span::before{
	content:"";
    
	width:20px;
	height:20px;
	background:#fff;
	border-radius:50px;
	position:absolute;
	left:5%;
	transition:0.5s;
	top:10%;

}
.active{
	width:50px;
	height:25px;
	background:#fff;
	border-radius:20px;
	position:absolute;
	left:75%;
	margin:20px;
	transition:0.5s;
}
.active::before{
	content:"";
    
	width:20px;
	height:20px;
	background:#000;
	border-radius:50px;
	position:absolute;
	left:50%;
	top:10%;
	transition:0.5s;

}
</style>
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

