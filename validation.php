<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'myproject');
$q="select * from manager where( username='$username' && password='$password')";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']="$username";
	echo "session variable=".$_SESSION['username'];
	header('location:http://localhost/my project/home_manager.php');
	exit();
}
else
{
	header('location:http://localhost/my project/manager.html');
	exit();
}
?>