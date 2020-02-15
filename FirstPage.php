<!DOCTYPE html>
<?php

$conn=mysqli_connect('localhost','root','','joblister');
 	if (isset($_POST['submit'])) {
		$type=$_POST['type'];
		$username=$_POST['username'];
		$password=$_POST['pwd'];


		$query="select * from login where username='".$username."' and password='".$password."' and type ='".$type."'";
		$result=mysqli_query($conn, $query);
		if($result){
		while ($row=mysqli_fetch_array($result)) {
			echo '<script type="text/javascript"> alert("Login successful as '.$row['type'].'")</script>';
		}
	
		if (mysqli_num_rows($result)>0) {
			?>
			<script type="text/javascript">
				window.location.href="homejoblister.php"
			</script>
			<?php
		}else{
			if (empty($username)) {
array_push($errors,"username is required");
	}
	if (empty($password)) {
	array_push($errors,"Password is required");
	}
		}
		}else{
			echo "no user found";
		}
}
?>
<html>
<head>
	<link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
<meta charset="utf-8">
	<meta name="viewport" content="width= device-width, initial-scale=1" >
	<title>Login Page</title>
</head>
<body>
	<div class="head">
		<h1 align="center" style="font-size: 36px;
								    font-weight: bolder;
								    font-stretch: extra-expanded;
								    color: #888;
								    border: initial;
								    border-color: black;
								    border-width: thick;
								    background: #ffffff">JOB SAFARI</h1>
									</div>
	<div class="form">
		<form method="POST" style="    height: 100%;
    width: 35%;
    margin: 0px auto;
    padding: 20px;
    border: 10px;
    background: #f7f7f9;
    border-radius: 0px 0px 5px 5px;
}">
			<table>
					<td style="padding:10px; font-size: 18px;">User Type</td>
					<td><SELECT name="type" style="height: 30px; width: 100%">
						<option value="...">Select user type</option>
						<option value="Recruiter">Recruiter</option>
						<option value="JobSeeker">JobSeeker</option>
					</SELECT></td>
				</tr>
				<tr>
					<td style="padding:10px; font-size: 18px;">Username</td>
					<td>
						<input type="text" name="username" placeholder="username" style="height: 30px; width: 100%">
					</td>
				</tr>
				<tr>
					<td style="padding:10px; font-size: 18px;">Password</td>
					<td><input type="password" name="pwd"placeholder="password" style="height: 30px; width: 100%"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" name="submit" value="Login" style="width: 75%;
																				height: 35px;">
					</td>
				</tr>
			</table>
			<p>
								Already registered?<a href="recregistration.php">Register</a>
							</p>
							<p>
								Already registered?<a href="jsregistration.php">Register</a>
							</p>
		</form>
	</div>

</body>
</html>

