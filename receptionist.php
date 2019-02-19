<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'myproject');
$q="select * from receptionist Where username='$username' and password='$password'"; 
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if(($num))
{	header('Location: receptionist1.html');}
else
	{
		header('Location: receptionist.html');}
mysqli_close($con);
?>