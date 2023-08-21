<?php 
	include 'db_config.php';

	$idnum = $_POST['idnumber'];
	if (isset($idnum)) {
		# code...
		$results = $conn->query("SELECT * from ");
	}
?>
<!DOCTYPE html>
<html>
<head>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 3 meta tags first; any content *after* these tags -->

    <title>Honey Moon Accommodation | registration</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
	<style>
		body{
	        background-image: url("students.jpg");
	        background-attachment: fixed;
	        background-size: 100%;
		}

		.card {
			margin: 10px;
		}
	  
		.modal-footer {
			position: relative;
		}

		.pager {
			background-color: rgba(0,0,0,0.8);
			border-radius: 5px;
			padding: 15px;
			color: whitesmoke;
		}


      	@media only screen and (max-width: 992px){
	        body {
	          background: radial-gradient(lightgray,whitesmoke 65%,lightgray);
	        }

	        .jumbotron {
	          background-color: rgba(0,0,0,.5);
	          font-size: all;
	        }

		}
	</style>
</head>
<body>
	<div class="jumbotron text-center">
		<h1>Honey Moon Accommodation&trade;</h1>
	</div>
	<div class="card">
		<div class="card-body bg-default">
			<form method="post">
				<input type="text" name="idnumber" placeholder="ID number: e.g 951120 0786 081">
			</form>
		</div>
	</div>
	<div class="container">

		<div class="card">
			<div class="card-header bg-primary">
				<h4>Results</h4>
			</div>
			<div class="card-body">
				Greetings John Kani, status of your application is still pending, You will receive an sms when the status changes.
			</div>
			<div class="card-footer">
				Kind Regards, HMA Management.
			</div>
		</div>

		<div class="card">
			<div class="card-header bg-danger">
				<h4>Results</h4>
			</div>
			<div class="card-body">
				Dear Mundo Sono, we regret to inform you that due to results obtained from backround checks of your previous residence and other similar criteria, we will not be taking you as a tenant at Honey Moon Accomodation&trade;, however we do hope you will find another accomodation soon.
			</div>
			<div class="card-footer">
				Kind Regards, HMA Management.
			</div>
		</div>

		<div class="card">
			<div class="card-header bg-success">
				<h4>Results</h4>
			</div>
			<div class="card-body">
				Congratulations! Koketso Malope!, We are glad to inform you that you have been accepted to reside with us at Honey Money Accomodation. 
			</div>
			<div class="card-footer">
				Kind Regards, HMA Management.
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h4>Results</h4>
			</div>
			<div class="card-body">
				No Results yet, please kindly check again tomorrow. Thank you
			</div>
			<div class="card-footer">
				Kind Regards, HMA Management.
			</div>
		</div>

      	<button class="btn btn-danger float-right" onclick="document.location.href='register.php'">Back</button>

		<div class="modal-footer">
			<p>Honey Moon Accommodation&trade; : 2020</p>
		</div>
	</div>
</body>
</html>