<?php
require_once 'recommend.php';
require_once 'content_based.php';
include "connection.php";
session_start();
$username=$_SESSION['login'];
$result=mysqli_query($db, "SELECT * FROM jobseeker WHERE username = '$username'");
	$retrieve = mysqli_fetch_array($result);
	//print_r($retrieve);
	$firstname = $retrieve['firstname'];
	$lastname = $retrieve['lastname'];
	$email = $retrieve['email'];
	$username = $retrieve['username'];
	$interest = $retrieve['interest'];
	?>

<!DOCTYPE html>
<html>
<head>  
  <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width= device-width, initial-scale=1" >
      <title>RECOMMENDATION</title>
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
      	<div class="wrapper" style="color: black;">

      	<h2 style="text-align: center; font-size: 30px;"><b>WELCOME, </b>
      		<?php echo $username; ?>
      	</h2><br><br>
      	<h3 style="text-align: center;font-size: 25px;">Recommended Jobs</h3><br><br>
        
      	 </div>


      	<?php

$retrieve = mysqli_fetch_array($result);
$interest = $retrieve['interest'];
//$objects =  mysqli_query($db,"SELECT jobs .*, categories.name AS cname FROM jobs INNER JOIN categories ON jobs.category_id = categories.id ORDER BY post_date DESC ");

//$objects =  mysqli_query($db,"SELECT job_title , user.id AS cid FROM jobs INNER JOIN jobseeker ON jobs.username = user.id ");
$objects = [
	'Medical Receptionist' => ['Health','Account'],
	'Clinical Research Associate' => ['Health','Others'],
	'Sales Analyst' => ['Business', 'Retail'],
	'Treasurer' => ['Business', 'Retail'],
	'IT Support Staff' => ['Technology'],
	'Software Engineer' => ['Technology'],
  'Treasurer' => ['Business','Others'],
  'Solar Installers' => ['Construction'],
  'Account Executive' => ['Business', 'Account'],
  'Staff Engineer' => ['Construction', 'Technology'],
  'Sales Coordinator' => ['Retail'],
  'SalesPerson' => ['Retail'],
  'Project Manager' => ['Business', 'Construction', 'Technology'],
  'SalesPerson' => ['Retail'],
  'Vice Principal' => ['Education'],
  'Part-time teacher' => ['Education'],
  'Database Analyst' => ['Technology'],
  'Network Engineer' => ['Technology'],
  'Conference Manager' => ['Business'],
  'Director' => ['Business'],
  'Account Manager' => ['Business', 'Account'],
  'Nurse' => ['Health'],
   'Senior Java Developer' => ['Technology'], 


];
//$objects = [($db,"SELECT job_title from jobs") => [$db, "SELECT name FROM categories"]];
//$objects = [$db, "SELECT job_title, category FROM job_data"];
$user =['Technology', 'Business'];
//$user = [$db, "SELECT interest FROm jobseeker WHERE username = '$username'"];
$engine = new ContentBasedRecommend($user, $objects);
var_dump($engine->getRecommendation());
?>