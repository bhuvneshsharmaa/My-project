<?php
$did=$_POST["did"];
$name=$_POST["name"];
$sex=$_POST["sex"];
$age=$_POST["age"];
$bloodgroup=$_POST["bloodgroup"];
$contactno=$_POST["contactno"];
$dob=$_POST["dob"];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'myproject');
$q="insert into doner values($did,'$name',$age,'$sex','$dob','$bloodgroup',$contactno)";
$result=mysqli_query($con,$q);
echo "data is inserted successfully";
mysqli_close($con);
?>
<!doctype html>
<html>
<body>
do you want  to insert more record:
<a href="insertrecord.php">click here</a>
</body>
</html>