<?php
include "connection.php";
session_start();
$username=$_SESSION['login'];
$result=mysqli_query($db, "SELECT * FROM recruiter WHERE username = '$username'");
	$retrieve = mysqli_fetch_array($result);
	//print_r($retrieve);
	
	$email = $retrieve['email'];
	$username = $retrieve['username'];
	$address = $retrieve['address'];
	$contact = $retrieve['contact'];

?>

<!DOCTYPE html>
<html>
<head>  
  <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width= device-width, initial-scale=1" >
      <title>PROFILE</title>
      <style type="text/css">
      	.wrapper{
      		width: 500px;
      		margin: 0 auto;

      	}
      </style>
</head>
 <body>
  <div class="container">
      <div class="header clearfix">
        <nav style="font-size: 25px;">
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="homejoblister.php">Home</a></li>&nbsp &nbsp
            <li role="presentation"><a href="create.php">Create-jobs</a></li>&nbsp &nbsp
                        <li role="presentation"><a href="profile.php">Profile</a></li>&nbsp &nbsp
                         <li role="presentation"><a href="logout.php">LogOut</a></li>&nbsp &nbsp

          </ul>
        </nav><br>
            </div>
      	</div>
      	<div class="wrapper" style="color: black;">

      	<h2 style="text-align: center; font-size: 30px;"><b>WELCOME, </b>
      		<?php echo $username; ?>
      	</h2><br><br>
      	<center><img style="width: 250px;" src="images/pic.jpg"></center><br>
      	<?php
					echo "<b>";
					echo "<table class='table table-border'>";

			
					echo "<tr>";
					echo  "<td>";
					echo "<b>Email: </b>";
					echo "</td>";

					echo "<td>";
					echo $email;
					echo "</td>";
					echo "</tr>";

						echo "<tr>";
					echo  "<td>";
					echo "<b>Username: </b>";
					echo "</td>";

					echo "<td>";
					echo $username;
					echo "</td>";
					echo "</tr>";
	

					echo "<tr>";
					echo  "<td>";
					echo "<b>Address: </b>";
					echo "</td>";

					echo "<td>";
					echo $address;
					echo "</td>";
					echo "</tr>";

					echo "<tr>";
					echo  "<td>";
					echo "<b>Contact: </b>";
					echo "</td>";

					echo "<td>";
					echo $contact;
					echo "</td>";
					echo "</tr>";	
		
						
				

					echo "</table>";
					echo"</b>"
					?>	<br>
					<form action="profile-update.php" method="post">
				<button class="btn btn-default" style="float: right; background-color: orangered;" name="submit" type="submit" >Edit your Profile	
					</button>
				</form>
					<?php if(isset($_POST['submit']))
					{
						?>
						<script type="text/javascript">
							window.location:"profile-update.php";
						</script>
						<?php
					}
					?>
      </div>
		
				
					      	      


	