<?php
	$conn = new mysqli("localhost","root","","joblister");
	$sql = "SELECT * FROM job_data";
	$result = $conn->query($sql); 
	$row = mysqli_fetch_array($result);
	$search_term = ", The";
	if (strpos($row["job_title"], $search_term) !== false) {
    		//		echo $row["job_title"].'<br>';
					$temp = $row["job_title"];
					$temp = "The ".str_replace($search_term,"",$temp);
    				$x = $row["jobId"];
    				$sql = "UPDATE job_data SET job_title = '$temp' WHERE jobId = '$x'";
    				$conn->query($sql);
				}
			while($row = $result->fetch_assoc()) {
				if (strpos($row["job_title"], $search_term) !== false) {
    		//		echo $row["job_title"].'<br>';
    				$temp = $row["job_title"];
					echo $temp;
					echo '<br>';
					$temp = "The ".str_replace($search_term,"",$temp);
					echo $temp;
					echo '<br>';
					$x = $row["jobId"];
					$temp = str_replace("'","''",$temp);
    				$sql1 = "UPDATE job_data SET job_title = '$temp' WHERE jobId = '$x'";
    				$conn->query($sql1);
				}
    		}
$conn->close();
?>