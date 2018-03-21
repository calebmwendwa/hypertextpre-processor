<?php
if (isset($_POST['patientname'])) {
	$ruby=mysqli_connect('localhost', 'root', '', 'vardict');
	if (!$ruby) {
		echo "failed to connect";
		# code...

	}
	else{

     extract($_POST);
     $insertme="INSERT INTO `vadi` (`id`, `patientname`, `password`) VALUES(NULL, '$patientname', 'password')";
     $cale=mysqli_query($ruby,$insertme);
     if ($cale) {
     	echo "saved successfully into hospital's database";
     }

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>you can now log in</p><a href="hospital1.php">log in
</body>
</html>