<?php include 'inc/header.php';?>
<h3 class="page-header">Update jobs</h3><br>
<form method="post" action="edit.php?id=<?php echo $job->id; ?>">
	<div class="form-group">
		<label>Name of Organization</label>
		<input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
	</div>
	<div class="form-group">
		<label>Category</label>
		<select type="text" class="form-control" name="category">
			<option value="0">Choose a Category</option>
                <?php foreach ($categories as $category): ?>
                	
                		<?php if($job->category_id == $category->id) : ?>
                		 <option value="<?php echo $category->id; ?>"selected><?php echo $category->name; ?></option>
                		<?php else: ?>
                		 <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                		<?php endif; ?>
                	
                 
                <?php endforeach; ?><br>
          </select>      
	</div>
	<div class="form-group">
		<label>Job Title</label>
		<input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>">
	</div>
	<div class="form-group">
		<label>Description</label>
		<textarea  class="form-control" name="description"><?php echo $job->description; ?></textarea>
	</div>
	<div class="form-group">
		<label>Location</label>
		<input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
	</div>
	<div class="form-group">
		<label>Salary</label>
		<input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
	</div>
	<div class="form-group">
		<label>Contact User</label>
		<input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>">
	</div>
	<input type="submit" class="btn" value="Submit" name="submit" style="color: #fff; background-color: #56CC9D;">
</form>
<br>
<a href="homejoblister.php">Back</a>
<br>
<?php include 'inc/footer.php';?>