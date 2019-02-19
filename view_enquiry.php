<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'myproject');
$q="select * from enquiry";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>blood donation management</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<style type="text/css">
table,tr,th,td{border:2px solid black;
border-collapse:collapse;}
th{background-color: red;}
table{margin:50px 40px 0px 200px;}
th,td{text-align: center;color:black;font-size: 25px;}</style>
</head>
<body class="bg-warning">
<div class="container">
	<table>
<tr><th>Name</th>
<th>Blood Group</th>
<th>Message</th>
</tr>
<?php for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_assoc($result);
	?>
	<tr>
	<td><?php echo $row['name']?></td>
	<td><?php echo $row['bloodgroup']?></td>
	<td><?php echo $row['message']?></td>
	</tr>
<?php
}
?>
</table>
</div>
</body>
</html>