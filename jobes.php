<?php
session_start();
if(empty($_SESSION['login'])){
	header('location:jobseeker_login.php');
	
}
?>


<html>
	<head>
		<link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width= device-width, initial-scale=1" >
      <title>JOBS</title>
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
            <li role="presentation"><a href="home.php">Home</a></li>&nbsp &nbsp
                                    <li role="presentation"><a href="jsprofile.php">Profile</a></li>&nbsp &nbsp
                                    <li role="presentation"><a href="logout.php">LogOut</a></li>

          </ul>
        </nav><br>
                    </div>
      	</div>
      		<span class = "box1"> 
			<span style="margin-right: 25px;"><a href="recommendation.php" id= "rec"> Get Recommendations </a></span> 
	<?php
		$conn = new mysqli("localhost", "root", "", "joblister");
		$user_id_query = $_SESSION['login'];
		$sql = "SELECT * FROM ratings WHERE userId = '$user_id_query'";
	
		$result = $conn->query($sql); 
		$row = mysqli_fetch_array($result);
		$job_array = array(); //job_title
		$rating_array = array(); //ratings for the jobs
		array_push($job_array, $row["jobId"]);
		array_push($rating_array, $row["rating"]);
		while($row = $result->fetch_assoc()) {
		array_push($job_array, $row["jobId"]);
		array_push($rating_array, $row["rating"]);
    	}
    	//print_r($movie_array);
    	$arrlength = count($job_array);
		for($x = 0; $x < $arrlength; $x++) {
    	$sql2 = "SELECT job_title FROM job_data WHERE jobId = '$job_array[$x]'";
		$result2 = $conn->query($sql2); 
		$row2 = mysqli_fetch_array($result2);
    	$job_array[$x] = $row2['job_title'];
		}
		echo '<table align="center" border="1"><tr><td style="text-align:center;"><b>Job Title :-</b></td><td><b>Rating</b></td></tr>';
		for($x = 0; $x < $arrlength; $x++) {
		echo '<tr>';
		echo '<td>' . $job_array[$x] . '</td>';
		echo '<td>' . $rating_array[$x] . '</td>';
		echo '</tr>';
    	//echo $job_array[$x] . ' ' . $rating_array[$x]. '<br>' ;
    	}
    	echo '</table>';
    
    	$conn->close();
	?>

	
	</body>
</html