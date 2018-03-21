<?php

$ruby=mysqli_connect('localhost', 'root', '', 'vardict');
if (isset($_GET['id'])) {
	extract($_GET);
	mysqli_query($ruby,"delete from patients where id=$id");
	# code...
}

header('location:users.php');
?>