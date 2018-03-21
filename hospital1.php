<!DOCTYPE html>
<html>
<head>
	<title>vadicthospital</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	
	.container-fluid{
       background-color:purple; 
	}
	body{
		padding: 40px 40px 30px 30px;
	}
	
</style>
<body>
<nav>
<div class="nav navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">THE VADICT</a>


				<div class="nav navbar-nav">
					<li class="active"><a href="">HOME</a></li>
					<li><a href="regt.php">register</a></li>
					<li><a href="#sect1">log in</a></li>
					<li><a href="#see our doctors">see doctors</a></li>
					
				</div>
			</div>
		</div>	
	</div>	
</div>
</nav>
<img src="pictures/hospital.jpg" width="1060px">
<div class="pag1log">

<style type="text/css">
	.ruby{

		background-color:yellow;
		width:1020px;
		height:60px;   
	}
	.babeboo{

		padding:50px; 
	
	}
	.josh{
		color: white;
		text-align: center;
	}
    .ben{
    	color: white;
    }
    h1{
    	color: white;
    }
    .job{
        background-color: skyblue; 
        color:black; 
    	width:500px;
    	height: 600px; 
    }
    .judy{

    	background-color: orange;
    	align-items: center;
    }
</style>
<div id="sect1">
	<div class="babeboo">
	<span class="glyphicon glyphicon-user" height="160px" width="150px"></span>
<h1 color="white">log in Here</h1>
<form action="" method="$_GET">
	<button id="job">
	Email:<br>
	<input type="Email" name="Email" class="form-control" type="text" required=""><br>
	password:<br>
	<input type="password" name="password" class="form-control" type="text" required=""><br>
	confirmpassword:<br>
	<input type="password" name="confirmpassword" class="form-control" type="text" required=""><br>
	</button>
<br>

<li><a href="#sym">sign in</a></li>
</div>
</div>
<?php
$cale=$_GET['password'];
if (strlen($cale)<7) {
	# code...
	echo "incorrect password";


}else
echo "correct";
?>
<?php
$mwesh=$_GET['confirnpassword'];
if (strlen($mwesh===$cale)) {
	# code...
}echo "okay";


?>
	
    <div class="josh">
	<div id="sym">
	<h2>welcome to our services</h2>

	<div class="column-md-5"><img src="pictures/NITF-2017-500x300.jpg" width="700px" height="500px"><i><p align="center">we treat various sickness. vadict offers you with relieable services. Our doctors are there for you working daily 24 hrs. We have well trained doctors who specialise in various fields. Commonly treated diseases include:<b>malaria, typhoid, TB, Asthma and others.</b> </p></i>
	</div>
	<br>
	<br>
	<div class="column-md-5"><img src="pictures/president-machine-500x300.jpg"><i><p align="center">we treat various sickness. vadict offers you with relieable services. Our doctors are there for you working daily 24 hrs. We have well trained doctors who specialise in various fields. Commonly treated diseases include:<b>malaria, typhoid, TB, Asthma and others.</b> </p></i>
	</div>
	<br>
	<br>
	<div class="column-md-5"><img src="pictures/conjoined_twins_separation_team-700x500.jpg"><i><p align="center">we treat various sickness. vadict offers you with relieable services. Our doctors are there for you working daily 24 hrs. We have well trained doctors who specialise in various fields. Commonly treated diseases include:<b>malaria, typhoid, TB, Asthma and others.</b> </p></i>	
	</div>
	<br>
	<br>
	<div class="column-md-5"><img src="pictures/separation_of_conjoined_twins-700x500.jpg"><i><p align="center" width="500px">we treat various sickness. vadict offers you with relieable services. Our doctors are there for you working daily 24 hrs. We have well trained doctors who specialise in various fields. Commonly treated diseases include:<b>malaria, typhoid, TB, Asthma and others.</b> </p></i>	
	</div>
	<h1>select sympoms</h1>
	
		<select>
			<option value="malaria">malaria</option>
			<option value="typhoid">typhoid</option>
			<option value="cholera">cholera</option>
			<option value="TB">TB</option>
			<option value="STIs">STIs</option>
			<option value="it`s a secret see the doc">it`s a secret see the doc</option>
		</select>
		
<div class="ben">
	<br>
	<div id="see our doctors">
<p>see our doctors</p>
<i><p align="center">we treat various sickness. vadict offers you with relieable services. Our doctors are there for you working daily 24 hrs. We have well trained doctors who specialise in various fields. Commonly treated diseases include:<b>malaria, typhoid, TB, Asthma and others.</b> </p></i>

<div class="col-sm-3 col-md-3">
	<img src="pictures/beautiful-female-doctor-portrait-confident-woman-her-office-34503158.jpg" width="200px" height="200px">
	</div>

	<div class="col-sm-3 col-md-3">
	<img src="pictures/african-american-woman-doctor-child-women-isolated-31173781.jpg" width="200px" height="200px">
</div>
	<div class="col-sm-3 col-md-3">
		<img src="pictures/17883687_431791740504492_8535664289199615187_n.jpg">
		</div>
<div class="col-sm-3 col-md-3">
<img src="pictures/28958269_173951313410277_1600283875543238917_n.jpg">
</div>
</div>
</body>
<br>
<br>
<footer>
	<p>&copy;<br><br><br><br><br><br><br><br><br><img src="pictures/11667403_10153091874877746_2392239114956965706_n.png"><img src="pictures/15873207_10154844319504286_1108420984561784312_n.png"><img src="pictures/1919390_1078153412209147_4424257258860443259_n.png"></p>

</footer>
</html>