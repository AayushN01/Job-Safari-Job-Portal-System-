<!DOCTYPE html>
<html>
<head>
	<title>JOBS</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
  <meta charset="utf-8">
      <meta name="viewport" content="width= device-width, initial-scale=1" >
     
</head>
<body style="    padding-top: 20px;
    padding-bottom: 20px;     font-size: 16px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
    ">
	<div class="container" style="width: 970px;     padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto">
      <div class="header clearfix" style="margin-bottom: 30px;padding-bottom: 20px; border-bottom: 1px solid #e5e5e5;">
      	<nav style="font-size: 25px;">
      		<ul class="nav nav-pills pull-right">
      			<li role="presentation"><a href="home.php">Home</a></li>&nbsp &nbsp
      			<li role="presentation"><a href="jsprofile.php">Profile</a></li>&nbsp &nbsp
           
               <li role="presentation"><a href="logout.php">LogOut</a></li>

      		</ul>
      	</nav><br>
        <h3 class="text-muted"style="text-align: center; margin-top: 0;margin-bottom: 0; line-height: 40px; font-size: 60px; color: #777;    font-weight: 500; padding: 10px;"><?php echo SITE_TITLE; ?></h3>
      </div>
      <?php displayMessage(); ?>

