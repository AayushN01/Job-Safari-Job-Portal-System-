
<?php
include "server.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>JOBSAFARI</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
	<link rel="stylesheet" href="csss/styles.css">
	
      <meta charset="utf-8">
      <meta name="viewport" content="width= device-width, initial-scale=1" >
</head>
<body>
	<header>
		<h1 style="text-align: center;font-size: 55px; padding: 10px;">JOB SAFARI</h1>
			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="jobseeker_login.php">JOB-SEEKER</a></li>
				<li><a href="">RECRUITER</a></li>
				</ul>
			</nav>		
		</header>
			<section>
		<br><br><br><br>

		<div class="box2">
			<h1 style="text-align: center; font-size: 23px;">JOB-SEEKER REGISTRATION</h1><br>
			
		<form name="Registration" action="" method="post">
			<?php include('errors.php'); ?>

		<table>
				<tr>
					<td style="padding:10px; font-size: 18px;">First Name</td>
					<td>
						<input class="form-control"  type="text" name="firstname" placeholder="Firstname" style="height: 30px; width: 100%">
					</td>
				</tr>
				<tr>
					<td style="padding:10px; font-size: 18px;">Last Name</td>
					<td>
						<input class="form-control"  type="text" name="lastname" placeholder="Last Name" style="height: 30px; width: 100%">
					</td>
				</tr>
				<tr>
					<td style="padding:10px; font-size: 18px;">Gender</td>
					<label class="radio-inline">
						<td>
						<input   type="radio" name="gender" value="male">Male
						<input   type="radio" name="gender" value="Female">Female
						<input  type="radio" name="gender" value="Others" >Others
						</td>
					</label>	
				</tr>
					<tr>
					<td style="padding:10px; font-size: 18px;">Email</td>
					<td>
						<input class="form-control"  type="text" name="email" placeholder="Email" style="height: 30px; width: 100%">
					</td>
				</tr>		
						<tr>
					<td style="padding:10px; font-size: 18px;">Username</td>
					<td>
						<input class="form-control"  type="text" name="username" placeholder="Username" style="height: 30px; width: 100%">
					</td>
				</tr>	
					<tr>
					<td style="padding:10px; font-size: 18px;">Date of Birth</td>
					<td>
						<input class="form-control"  type="date" name="dob" placeholder="DOB" style="height: 30px; width: 100%">
					</td>
				</tr>		
				<tr>
					<td style="padding:10px; font-size: 18px;">Password</td>
					<td><input class="form-control"  type="password" name="password_1"placeholder="password" style="height: 30px; width: 100%"></td>
				</tr>
					<tr>
					<td style="padding:10px; font-size: 18px;">Re-Enter Password</td>
					<td><input class="form-control"  type="password" name="password_2"placeholder="password" style="height: 30px; width: 100%"></td>
				</tr>
				
					<tr>
					<td style="padding:10px; font-size: 18px;">Contact</td>
					<td>
						<input class="form-control"  type="text" name="contact" placeholder="Contact" style="height: 30px; width: 100%">
					</td>
				</tr>
					<tr>
					<td style="padding:10px; font-size: 18px;">Address</td>
					<td>
						<input class="form-control"  type="text" name="address" placeholder="Address" style="height: 30px; width: 100%">
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input class="btn btn-default"  type="submit" name="submit" value="Register" style="width: 75%;height: 35px; background-color: #20c997;">
					</td>
				</tr>
			</table>
			
		</form><br><br>
		</div>		
	</section>
				  	
</body>