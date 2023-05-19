<html>
<head>
<title>
Login</title>
</head>
<link rel="stylesheet" href="loginpract.css">
<body>
<?php
$err="";
if(isset($_POST["btn"])){
$name=$_POST["name"];
$pass=$_POST["pass"];

if($name===""){
$err="Please enter the name";

}
else if($pass===""){
$err="Please enter the password";

}
else{
$err="Login successful";
}



}
?>

<div class="log">
<form name="myform" method="POST">
<h2><center>LOGIN<center/></h2>
<input type="name" placeholder="Username" name="name" id="name"/>
<input type="password" placeholder="Password" name="pass" id="pass"/>
<input type="submit" name="submit" id="btn" name="btn" />
</div>
<div class="err" id="err"><h3 id="h3"><?php echo $err; ?></h3></div>
</form>



</body>
</html>

