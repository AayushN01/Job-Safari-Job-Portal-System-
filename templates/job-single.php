<?php include 'inc/header.php';?>
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
<a href="edit.php?id=<?php echo $job->id; ?>" class= "btn btn-default" style="background: orangered;">Edit</a>

<form style="display:inline;" method="post" action="job.php">
	<input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
	<input type="submit" class="btn btn-danger" value="Delete">
</form>
</div>
<br>
<a href="homejoblister.php" style="font-size: 20px; ">Back</a>
<?php include 'inc/footer.php';?>