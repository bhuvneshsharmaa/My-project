<?php 
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))
		$s_id[$i]=$_POST[$index];
	else
		$i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'blood');
for($k=1;$k<=$size;$k++)
{
	$q="update donor where did=".$s_id[$k];
	mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>deletion</title></head>
<body>
<h1>blood donation management </h1>
<p>
<?php
echo $size."record deleted";
?>
go back to home page <a href="home.php">click here</a>
</p>
</body>
</html>