<?php
$state=$_POST['state'];
$city=$_POST['city'];
//$bloodgroup=$_POST['bloodgroup'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'myproject');
$q="select * from bloodbank where city='$city' and state='$state'";
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
border-collapse:collapse;}
th{
	background-color: lightblue;
	text-align: center;
}
table{
	margin-left: 20px;
	margin-top: 20px;
}
th,td{
	text-align: center;

}
</style>
</head>
<body>
<table>
<tr>
<th>bid</th>
<th>hname</th>
<th>state</th>
<th>city</th>
<th>bloodgroup</th>
<th>quantity</th>
<th>contact</th>
</tr>
<?php for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_assoc($result);
	?>
	<tr>
	<td><?php echo $row['bid']?></td>
	<td><?php echo $row['hname']?></td>
	<td><?php echo $row['state']?></td>
	<td><?php echo $row['city']?></td>
	<td><?php echo $row['bloodgroup']?></td>
	<td><?php echo $row['quantity']?></td>
	<td><?php echo $row['contact']?></td>
	</tr>
<?php
}
?>
</table>
</body>
</html>