<?php include 'inc/headers.php';?>
<h2 class="page-header"><?php echo $job->job_title; ?></h2>
<small>Posted By <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
<hr>
<p class="lead"><?php echo $job->description; ?></p>
<ul class="list-group">
	<li class="list-group-item"><strong>Name of Orgaization: &nbsp</strong><?php echo $job->company; ?></li>
	<li class="list-group-item"><strong>Location: &nbsp</strong><?php echo $job->location; ?></li>
	<li class="list-group-item"><strong>Salary: &nbsp</strong><?php echo $job->salary; ?></li>
	<li class="list-group-item"><strong>Email: &nbsp</strong><?php echo $job->contact_email; ?></li>
</ul><br>
<div class="well"> 
	
<form style="display:inline;" method="post" action="jobs.php">
	<a href="confirm.php?id=<?php echo $job->id; ?>" class= "btn btn-default" name = "cnfm_id"  style="background: grey; align-content: right;">Confirm</a>
	<!--<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="submit" class="btn" value="Upload your CV" name="submit" style="color: #fff; background-color: #fa3944;">-->
	
	</form>
<br><br>
<a href="home.php" style="font-size: 20px; ">Cancel</a>
<?php include 'inc/footer.php';?>