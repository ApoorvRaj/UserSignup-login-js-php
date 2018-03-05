<html>
<head>

</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sign";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
	die('connection failed'.mysqli_error());
}
$sql="select * from signtab where Email='$_POST[email]' and Password='$_POST[pass1]'";
if($result=mysqli_query($con,$sql))
{
	if($row=mysqli_fetch_row($result))
	echo "Hi ".$row[0]." you have successfully logged in";
	else
	echo "invalid username or password";
}
else
echo "invalid username or password";
mysqli_close($con);
?>
</body>
</html>