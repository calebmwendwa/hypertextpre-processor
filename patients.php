<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr border="2px solid black">
		<th>id</th>
		<th>patientname</th>
		<th>password</th>
	</tr>
<?php 

$ruby=mysqli_connect('localhost','root','','vardict'); 
$fetch=mysqli_query($ruby,"SELECT * FROM vadi");
while ($row=mysqli_fetch_assoc($fetch)) {
	# code...
	extract($row);
	echo "
     <td>$id</td>
     <td>$patientname</td>
     <td><a href='delete.php?id=$id'>Delete</a></td>
	";
 }
?>

</table>
</body>
</html>