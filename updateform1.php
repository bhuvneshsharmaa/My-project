<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'blood');
$q="select * from donor";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>blood donation management</title>
<style type="text/css">
table,tr,th,td{border:2px solid black;
border-collapse:collapse;}</style>
</head>
<body>
<form action="update1.php" method="post">
<table>
<tr><th>donor id</th>
<th>name</th>
<th>sex</th>
<th>age</th>
<th>address</th>
<th>phno</th>

</tr>
<?php for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_assoc($result);
	?>
	<tr>
	<td><input type="number" name="did<?php echo $i ?>" value="<?php echo $row['did']?>"></td>
	<td><input type="text" name="name<?php echo $i ?>" value="<?php echo $row['name']?>"></td>
	<td><input type="text" name="sex<?php echo $i ?>" value="<?php echo $row['sex']?>"></td>
	<td><input type="number" name="age<?php echo $i ?>" value="<?php echo $row['age']?>"></td>
	<td><input type="text" name="address<?php echo $i ?>" value="<?php echo $row['address']?>"></td>
	<td><input type="number" name="phno<?php echo $i ?>" value="<?php echo $row['phno']?>"></td>
	</tr>
<?php
}
?>
<tr><td colspan="7"><input type="submit" value="update"/></td></tr>
</table>
</form>
</body>
</html>