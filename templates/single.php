<?php include 'inc/headers.php';?>
<h2 class="page-header"><?php echo $job->job_title; ?></h2>
<small>Posted By <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
<hr>
<p class="lead"><?php echo $job->description; ?></p>
<ul class="list-group">
	<li class="list-group-item"><strong>Name of Organization:</strong><?php echo $job->company; ?></li>
	<li class="list-group-item"><strong>Location:</strong><?php echo $job->location; ?></li>
	<li class="list-group-item"><strong>Salary:</strong><?php echo $job->salary; ?></li>
	<li class="list-group-item"><strong>Email:</strong><?php echo $job->contact_email; ?></li>
</ul><br>
<div class="well"> 
<form style="display:inline;" method="post" action="apply.php">
	<a href="apply.php?id=<?php echo $job->id; ?>" class= "btn btn-default" style="background: grey; align-content: right;">Apply</a>
</form>
</div>
<br>
<a href="home.php" style="font-size: 20px; ">Back</a>
<?php include 'inc/footer.php';?>