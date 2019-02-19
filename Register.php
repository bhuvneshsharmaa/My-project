<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'myproject');
$q="insert into Register (name,email,password,address,city,state) 
values ('$name','$email','$password','$address','$city','$state')";
if(mysqli_query($con,$q))
	{
		echo "Registered successfully";
		
//<div class="jumbotron"><blockquote>RECORD ADDED SUCCESSFULLY</blockquote></div>
}
mysqli_close($con);
?>