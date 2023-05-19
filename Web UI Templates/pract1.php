<html>
<head>
<title>Login</title>
</head>
<link rel="stylesheet" href="stylesheet.css"/>
<body>
    <form method="post">
<div class="lgbx">
<h2>Login Form</h2>
<input type="text" placeholder="Username" name="user"/>
<input type="password" placeholder="Password" name="pass"/>
<button>Submit</button>
</div>
</form>
<?php
$host="localhost";
$username="root";
$password="";
$dba_name="login insert";
$user=$_POST["user"];
$pass=$_POST["pass"];
$conn=mysqli_connect($host,$username,$password,$dba_name);
$mysql="insert into practice values('$user','$pass')";
if ($conn->query($mysql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
</body>
</html>