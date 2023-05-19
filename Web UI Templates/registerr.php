<html>
<head>
</head>
<link rel="stylesheet" href="Registerr.css">
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