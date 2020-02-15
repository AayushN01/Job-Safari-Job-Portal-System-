<?php
include "adserver.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>JOBSAFARI</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">
	
      <meta charset="utf-8">
      <meta name="viewport" content="width= device-width, initial-scale=1" >
</head>
<body>
	<header>
		<h1 style="text-align: center;font-size: 55px; padding: 10px;">JOB SAFARI</h1>
			<nav>
				<ul>
				<li><a href="jobseeker_login.php">JOB-SEEKER</a></li>
				<li><a href="recruiter_login.php">ADMIN</a></li>
				</ul>
			</nav>		
		</header>
			<section>
		<br><br><br><br>

		<div class="box2">
			<h1 style="text-align: center; font-size: 23px;">ADMIN REGISTRATION</h1><br>
			
		<form name="Registration" action="" method="post">
			<?php include "errors.php"; ?>

		<table>
				<tr>
					<td style="padding:10px; font-size: 18px;">Username</td>
					<td>
						<input class="form-control"  type="text" name="username" placeholder="Username" style="height: 30px; width: 100%">
					</td>
				</tr>
				<tr>
					<td style="padding:10px; font-size: 18px;">Email</td>
					<td>
						<input class="form-control"  type="text" name="email" placeholder="Email" style="height: 30px; width: 100%">
					</td>
				</tr>
				<tr>
					<td style="padding:10px; font-size: 18px;">Passsword</td>
					<td>
						<input class="form-control"  type="password" name="pwd1" placeholder="Password" style="height: 30px; width: 100%">
					</td>
				</tr>
					<tr>
					<td style="padding:10px; font-size: 18px;">Re-Enter Passsword</td>
					<td>
						<input class="form-control"  type="password" name="pwd2" placeholder="Password" style="height: 30px; width: 100%">
					</td>
				</tr>
				<tr>
					<td style="padding:10px; font-size: 18px;">Address</td>
					<td>
						<input class="form-control"  type="text" name="address" placeholder="Address" style="height: 30px; width: 100%">
					</td>
				</tr>
				<tr>
					<td style="padding:10px; font-size: 18px;">Contact</td>
					<td>
						<input class="form-control"  type="text" name="contact" placeholder="Contact" style="height: 30px; width: 100%">
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
