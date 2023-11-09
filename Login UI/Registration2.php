<html>
<head>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Tamil:wght@100&family=Roboto:wght@300&display=swap');
*{
	margin:0;
	padding:0;
	font-family: 'Roboto', sans-serif;
}
body{
	background:#4287f5;
}
.loginbx{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	display:inline-block;
	width:400px;
	cursor:pointer;
	height:400px;
	background:#fff;
	border-radius:5px;
}
.loginbx input,h2{
	display:block;
	width:68%;
	height:28px;
	cursor:pointer;
	margin-bottom:26px;
	text-align:center;
	letter-spacing:1px;
}
.loginbx input:focus{
	display:block;
	width:68%;
	height:28px;
	cursor:pointer;
	margin-bottom:26px;
	text-align:center;
	letter-spacing:1px;
	outline:none;
}
.loginbx input[type="submit"]{
	display:block;
	width:99.5%;
	height:32px;
	margin-bottom:26px;
	text-align:center;
	letter-spacing:1px;
	margin-top:70px;
	color:white;
	background:#4287f5;
	border:0.1px solid #fff;
	
	font-size:15px;
	cursor:pointer;
}
.loginbx input[type="submit"]:hover{
	display:block;
	width:100%;
	height:33px;
	margin-bottom:26px;
	text-align:center;
	letter-spacing:1px;
	margin-top:70px;
	color:white;
	background:#4287f5;
	font-style:bold;
	cursor:pointer;

}
span{
	display:none;
	position:fixed;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	width:280px;
	height:280px;
	background:#fff;
	z-index:4;
	box-shadow:0 0 20000px 20px black;
	text-align:middle;
}
span .btnspan{
	position:absolute;
	top:60%;
	width:100%;
	color:white;
	background:blue;
	
}
</style>
<script>

 
	 var x=getElementById("err");
var y=getElementById("btn");
y.onclick=function(){x.style.display="block"};
	 

</script>
<?php
$err="";
if(empty($_POST["name"])){
	$err="Name is required";
}
else if(empty($_POST["email"])){
	$err="E-mail is required";
}
else{}
?>
<body>
<div class="loginbx"><center>
<form name="myform" method="POST" >
<h2>REGISTER </H2>
<input type="text" name="name" placeholder="Your name"/>
<input type="email" name="email" placeholder="E-mail"/>
<input type="tel" name="phoneno" placeholder="Phone number"/>
<input type="Password" name="password" placeholder="Password"/>
<input type="Password" name="confirm_password" placeholder="Confirm_Password"/>
<b><input type="Submit" name="submitbtn" placeholder="Submit"    id="btn"/>	</b>
</form> </center></div>
<span class="alert" id="err"><center><b><?php echo $err;?><input type="button" class="btnspan" value="OKAY"></input></b></center></span>

</body>
</html>