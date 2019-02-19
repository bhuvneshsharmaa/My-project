<?php 
$did=$_POST['did'];
$name=$_POST['name'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'myproject');
$q="select * from doner where name ='$name' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>blood donation management system</title>
 	<style type="text/css" >
 		.border,td,tr,th{ 
 		border:1px solid black;
 		border-collapse: collapse; }
 	</style>
 </head>
 <body>
 <table class="border">

<?php for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_assoc($result);
	if( $row['did']==$did)
	{
	?>
	<tr>
		<th>did</th>
   <th>name</th>
   <th>sex</th>
   <th>age</th>
   <th>dob</th>
   <th>bloodgroup</th>
   <th>phno</th>
   </tr>
	<tr>
	<td><?php echo $row['did']?></td>
	<td><?php echo $row['name']?></td>
	<td><?php echo $row['sex']?></td>
	<td><?php echo $row['age']?></td>
	<td><?php echo $row['dob'] ?></td>
	<td><?php echo $row['bloodgroup'] ?></td>
	<td><?php echo $row['contactno']?></td>
	</tr>
<?php
break;
}
else
{
	echo "no matching record found";
}
}
?>
</table>
 </body>
 </html>
