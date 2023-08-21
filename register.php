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

	        .check {
	        	float: none !important;
	        }
		}
	</style>
</head>
<body>
	<div class="jumbotron center">
		<h1>Honey Moon Accommodation&trade;</h1>
	</div>
	<div class="container">
		<div class="main">
			<div class="pager">
				<button class="btn btn-lg btn-warning float-right check" onclick="document.location.href='check.php'">Check Status</button>
				<h3>Student Biograpgical Data</h3>
				<div>
					<b>Personal Information Worksheet</b>
					<p>This form is designed to assist the student residence biographical data.</p>
				</div>
			</div>

			<form method="post" action="newstudent.php">
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header">
								<b class="card-title text-dark">Names information</b>
							</div>
							<div class="card-body">
								<input type="text" name="matricno" placeholder="Matric Number" required ic="txtbx">
								<input type="text" name="firstname" placeholder="First Name" required>
								<input type="text" name="middlename" placeholder="Middle Name/Initials" required>
								<input type="text" name="lastname" placeholder="Last name/Surname" required>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="card">
							<div class="card-header">
								<b class="card-title text-dark">Gender/dates information</b>
							</div>
							<div class="card-body">
								<select name="gender">
									<option value="">-- Gender --</option>
									<option value="male">MALE</option>
									<option value="female">FEMALE</option>
								</select>
								<input type="text" name="dob" placeholder="Identity Number" required>
								<input type="text" name="dates" placeholder="date" required>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="card">
							<div class="card-header">
								<b class="card-title text-dark">Address information</b>
							</div>
							<div class="card-body">
								<input type="text" name="street" placeholder="Street Name" required>
								<input type="text" name="suburb" placeholder="Suburb/Area" required>
								<input type="text" name="city" placeholder="City/Town" required>
								<input type="text" name="province" placeholder="Province/State" required>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="card">
							<div class="card-header">
								<b class="card-title text-dark">Next of Kin information</b>
							</div>
							<div class="card-body">
								<input type="text" name="kinname" placeholder="Next of kin First Name" required>
								<input type="text" name="kinsurname" placeholder="Next of kin Last Name" required>
								<input type="text" name="kinphone" placeholder="Next of kin contact" required>
								<input type="text" name="kingender" placeholder="Gender" required>
								<input type="text" name="kinrelation" placeholder="Relation to student" required>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

      	<button class="btn btn-danger float-right" onclick="document.location.href='index.php'">Cancel</button>
      	<button class="btn btn-success float-right" type="submit" name="submit">Submit</button>

		<div class="modal-footer">
			<p>Honey Moon Accommodation&trade; : 2020</p>
		</div>
	</div>

<script type="text/javascript">
    window.onload = function() {
      document.getElementById("txtbx").focus();
    };
</script>
</body>
</html>