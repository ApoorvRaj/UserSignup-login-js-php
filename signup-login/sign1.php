<html>
<body>
<?php
$servername="localhost";
$username="root";
$dbname="sign";
$password="";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
die('connection failed'.mysqli_error());
$result="INSERT INTO signtab(Name,Number,Password,Email)VALUES('$_POST[text1]','$_POST[text2]','$_POST[pass1]','$_POST[email]')";
if(!mysqli_query($con,$result))
die('no record added : '.mysqli_error());
else
echo "BINGO!!!! YOU HAVE SUCCESSFULLY REGISTERED";
mysqli_close($con);
?>
</body>
</head>